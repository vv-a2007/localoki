<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
use Tygh\Debugger;
use Tygh\Registry;
use Tygh\Http;
use Tygh\BlockManager\SchemesManager;
use Tygh\BlockManager\RenderManager;
use Tygh\BlockManager\Block;
use Tygh\BlockManager\Location;


if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_csc_full_page_cache_before_dispatch($controller='', $mode='', $action='', $dispatch_extra='', $area=''){
	$controller = $controller ? $controller : Registry::get('runtime.controller');
	$mode = $mode ? $mode : Registry::get('runtime.mode');
	
	if (isset($_REQUEST['fpc_debug'])){
		$_SESSION['fpc_debug'] = array();
		$_SESSION['fpc_debug']['php_init_time']=microtime(true) - MICROTIME;
	}	
	if (AREA=="C" && fn_fpc_check_controller_availability($controller)){
		if (strtolower(Registry::get('config.current_host')) != strtolower(REAL_HOST)
			&& $_SERVER['REQUEST_METHOD'] == 'GET'
			&& !defined('CONSOLE')
		) {
			if (!empty($_SERVER['REDIRECT_URL'])) {
				$qstring = $_SERVER['REDIRECT_URL'];
			} else {
				if (!empty($_SERVER['REQUEST_URI'])) {
					$qstring = $_SERVER['REQUEST_URI'];
				} else {
					$qstring = Registry::get('config.current_url');
				}
			}
	
			$curent_path = Registry::get('config.current_path');
			if (!empty($curent_path) && strpos($qstring, $curent_path) === 0) {
				$qstring = substr_replace($qstring, '', 0, fn_strlen($curent_path));
			}
	
			fn_redirect(Registry::get('config.current_location') . $qstring, false, true);
		}
				
		if (fn_csc_full_page_check_get_cache_availibility($controller, $mode) && !isset($_REQUEST['no_cache'])){
			$_SESSION['full_cache_products']=array();
			list($path, $file_hash) = fn_csc_full_page_cache_get_cache_path(true);
			$time=microtime();			
			if ($tt = fn_get_contents($path)) {
				if (Registry::get('addons.csc_full_page_cache.compress_cache')=="Y"){		
					$tt = gzuncompress($tt);
				}	
				
				if (isset($_REQUEST['fpc_debug'])){
					$_SESSION['fpc_debug']['cache_file']='found and loaded from cache';
				}
								
				$files_to_check=array();
				$regexes = array(
					'link'=>'/<link [^>]+href=([\'"])(?<link>.+?)\1[^>]*>/i',
					'script'=>'/<script [^>]+src=([\'"])(?<script>.+?)\1[^>]*>/i'
					
				);
				foreach($regexes as $k=> $regex){
					preg_match_all($regex, $tt, $matches);
					if (!empty($matches) && !empty($matches[$k])) {
						$files_to_check = array_merge($files_to_check, $matches[$k]);								
					}					
				}
				
				$all_files_in_place=true;
				if ($files_to_check){					
					foreach ($files_to_check as $file){
						if (strpos($file, Registry::get('config.current_location'))!==false && strpos($file, 'var/cache/')!==false){
							$file = str_replace(Registry::get('config.current_location'), '', $file);
							if ($pos = strpos($file, "?")){
								$file = substr($file, 0, $pos);
							}											
							if (!file_exists(DIR_ROOT.$file)){
								if (isset($_REQUEST['fpc_debug'])){
									$_SESSION['fpc_debug']['js/css']='SOME FILE NOT LOADED! FULL CACHE WILL NOT WORK!';
								}																			
								return false;
							}
						}						
					}	
				}
				if (isset($_REQUEST['fpc_debug'])){
					$_SESSION['fpc_debug']['js/css']='loaded, all found';
				}	
								
				fn_csc_fpc_define_current_url();							
				$tt = fn_csc_fpc_SecurityHash($tt, $controller, $mode);
				fn_fpc_generate_canonical_url($tt);	
				if ($controller=="_no_page"){
					header("HTTP/1.0 404 Not Found");					
				}
				
					
				/********************************/				
				fn_fpc_replace_rendered_block($tt, $controller, $mode);					
				/********************************/
				if (isset($_REQUEST['fpc_debug'])){
					$_SESSION['fpc_debug']['cache_loading_time'] = microtime(true) - MICROTIME - $_SESSION['fpc_debug']['php_init_time'];
					fn_print_r($_SESSION['fpc_debug']);
				}
				
				echo $tt;			
				
				fn_set_hook('complete');				
				if (PRODUCT_VERSION > '4.3.1'){		
					if (defined('AJAX_REQUEST')) {								
						$ajax = Tygh::$app['ajax'];
						$ajax = null;
					}
				}
				exit;				
			}
		}
		if (isset($_REQUEST['no_cache'])){					
			list($path, $file_hash) = fn_csc_full_page_cache_get_cache_path();					
			fn_csc_full_page_cache_cleare_cache_by_controller($controller, $path, $file_hash);			
		}
	}
}


function fn_fpc_replace_rendered_block(&$tt, $controller, $mode){
	$location = Location::instance()->get($controller.".".$mode, array(), CART_LANGUAGE);
	$exclude_blocks = db_get_array("SELECT ?:bm_blocks.block_id, ?:bm_blocks.type, ?:bm_snapping.snapping_id, ?:bm_snapping.grid_id  FROM ?:bm_blocks 
		LEFT JOIN ?:bm_snapping ON ?:bm_snapping.block_id =?:bm_blocks.block_id
		LEFT JOIN ?:bm_grids ON ?:bm_grids.grid_id = ?:bm_snapping.grid_id
		LEFT JOIN ?:bm_containers ON ?:bm_containers.container_id =  ?:bm_grids.container_id
		LEFT JOIN ?:bm_locations ON ?:bm_locations.location_id = ?:bm_containers.location_id
		WHERE  (?:bm_locations.location_id=?i OR (?:bm_locations.is_default=?i AND ?:bm_locations.layout_id=?i))
		AND ?:bm_snapping.status=?s
		AND ?:bm_blocks.fpc_exclude_cache=?s
	", $location['location_id'], '1', $location['layout_id'], 'A', 'Y');
	 $time = microtime();
	 fn_set_hook('fpc_replace_rendered_block_pre', $controller, $mode, $tt, $exclude_blocks);	
	 
	 if ($exclude_blocks){
		foreach ($exclude_blocks as $block){			
			if (empty($_SESSION['auth']['user_id']) && empty($_SESSION['wishlist']['products']) && $block['type']=="my_account"){
				continue;	
			}
			if (empty($_SESSION['cart']['products']) && $block['type']=="cart_content"){
				continue;	
			}			
			
			if (!mb_strpos($tt, '<!--fpc_exclude_' . $block['block_id'].'_'.$block['snapping_id'] . '-->')){				
				continue;	
			}
		
	 		$render = fn_csc_fpc_render_block(
				array(
					'block_id' => $block['block_id'],
					'snapping_id'=>$block['snapping_id'],
					'dispatch' => $controller.".".$mode,
					'use_cache' => false,
					'parse_js' => false,
					'grid_id'=>$block['grid_id']
				)
			);
			
			$parts = explode('<!--fpc_exclude_' . $block['block_id'].'_'.$block['snapping_id'] . '-->', $tt);			
			if (!empty($parts[1])){
				$second_part = explode('<!--end_fpc_exclude_' . $block['block_id'].'_'.$block['snapping_id'] . '-->', $parts['1']);
				$tt = $parts[0] .  $render . $second_part[1];
				if (isset($_REQUEST['fpc_debug'])){
					$_SESSION['fpc_debug']['blocks']['rendered'][] = $block['block_id'];					
				}					
			}else{
				if (isset($_REQUEST['fpc_debug'])){
					$_SESSION['fpc_debug']['blocks']['not_rendered'][] = $block['block_id'];					
				}				
			}				
		}
	 }
}

function fn_csc_fpc_render_block($params)
{
    if (!empty($params['block_id'])) {
        $block_id =  $params['block_id'];
		$snapping_id = !empty($params['snapping_id']) ? $params['snapping_id'] : $params['block_id'];
		
		if (!empty($params['dispatch'])) {
            $dispatch = $params['dispatch'];
        } else {
            $dispatch = !empty($_REQUEST['dispatch']) ? $_REQUEST['dispatch'] : 'index.index';
        }

        $area = AREA;		
		$dynamic_object = array();       

        $block = Block::instance()->getById($block_id, $snapping_id, $dynamic_object, DESCR_SL);
        $render_params = array(
            'use_cache' => isset($params['use_cache']) ? (bool) $params['use_cache'] : true,
            'parse_js' => isset($params['parse_js']) ? (bool) $params['parse_js'] : true,
        );
		$grid = db_get_row("SELECT * FROM ?:bm_grids WHERE grid_id=?i", $params['grid_id']);

        return RenderManager::renderBlock($block, $grid, 'C', $render_params);
    }
}




function fn_csc_full_page_cache_dispatch_before_display(){
	$controller = Registry::get('runtime.controller');
	$mode = Registry::get('runtime.mode');	
	if (AREA==csc_full_page_cache::_("Qw==") && fn_fpc_check_controller_availability($controller)){					
		if (fn_csc_full_page_check_save_cache_availibility($controller, $mode) && !isset($_REQUEST['no_cache'])){
			$mode = Registry::get('runtime.mode');			
			list($path, $file_hash) = fn_csc_full_page_cache_get_cache_path();			
			$tt = fn_csc_fpc_define_current_url(true);			
			$tt =  str_replace(array('\n', '    ', '   ', '  '), ' ', $tt);			
			$file_data = array(
				'controller'=>$controller,
				'path'=>$path,
				'file_hash'=>$file_hash,
				'timestamp'=>TIME,
			);			
			$file_id = db_query("REPLACE INTO ?:full_cache_files ?e", $file_data);			
			$products = $_SESSION['full_cache_products'];				
			$p_data=array();
			if ($products){
				foreach ($products as $_product_id){
					if (!$_product_id)continue;
					$p_data[$_product_id]=array(						
						'file_id'=>$file_id,
						'product_id'=>$_product_id,
						
					);	
				}			
			}			
			if ($p_data){
				db_query("REPLACE INTO ?:full_cache_files_products ?m", $p_data);
			}
			if (isset($_REQUEST['fpc_debug'])){
				$_SESSION['fpc_debug']['cache_creation_time'] = microtime(true) - MICROTIME - $_SESSION['fpc_debug']['php_init_time'];				
			}
			if (isset($_REQUEST['fpc_debug'])){			
				fn_print_r($_SESSION['fpc_debug']);			
			}			
			echo $tt;
			
			if (Registry::get('addons.csc_full_page_cache.compress_cache')=="Y"){		
				$tt = gzcompress($tt, 9);
			}								
			fn_put_contents($path, $tt);
							
			exit;
		}elseif (isset($_REQUEST['fpc_debug'])){			
			$_SESSION['fpc_debug']['cache_status'] = 'Save cache not allowed!';	
			fn_print_r($_SESSION['fpc_debug']);				
		}
	}
}

function fn_csc_fpc_SecurityHash($content){
	$hash = fn_generate_security_hash();
	$content = preg_replace('/<input type="hidden" name="security_hash".*?>/i', '', $content);	
	$content = str_replace('</form>', '<input type="hidden" name="security_hash" class="cm-no-hide-input" value="'. $hash .'" /></form>', $content);
	
	$content = preg_replace("/_.security_hash='.*?';/i", 'csfpc_security_hash', $content);
	$content = str_replace('csfpc_security_hash', "_.security_hash='".$hash."';", $content);
	return $content;
}

function fn_csc_fpc_define_current_url($return_tt=false){
	if (PRODUCT_VERSION > '4.3.1'){
		 if (defined('AJAX_REQUEST') && Registry::get('runtime.root_template') == 'index.tpl') {
			Tygh::$app['ajax']->assign('current_url', fn_url(Registry::get('config.current_url'), AREA, 'current'));
		}
		if ($return_tt){										
			$tt = Tygh::$app['view']->fetch(Registry::get('runtime.root_template'));
		}
	}else{
		if (defined('AJAX_REQUEST') && Registry::get('runtime.root_template') == 'index.tpl') {
			Registry::get('ajax')->assign('current_url', fn_url(Registry::get('config.current_url'), AREA, 'current'));
		}
		if ($return_tt){
			$tt = Registry::get('view')->fetch(Registry::get('runtime.root_template'));	
		}
	}
	if ($return_tt){
		return $tt;	
	}
}

function fn_fpc_check_controller_availability($controller, $mode=''){
	$available = true;
	if (Registry::get('settings.General.store_mode') == 'Y') {
		$available= false;
	}
	if (Registry::get('addons.csc_full_page_cache.disable_for_auth') == 'Y' && !empty($_SESSION['auth']['user_id'])) {
		$available= false;
	}	
	$deprecated = array('exim_1c', 'payment_notification', 'checkout', 'image', 'debugger', 'auth', 'theme_editor');
	if (in_array($controller, $deprecated)){
		$available= false;	
	}
	fn_set_hook('fpc_check_controller_availability', $available);
	
	return $available;	
}


function fn_csc_full_page_check_get_cache_availibility($controller, $mode=''){
	$allow=true;
	if (!in_array($controller, fn_csc_full_page_cache_get_cache_controllers())){
		$allow=false;
	}
	if ($_SERVER['REQUEST_METHOD']=="POST"){
		$allow=false;
	}	
	if (!empty($_REQUEST['action']) && $_REQUEST['action']=="preview"){
		$allow=false;
	}
	if (!empty($_REQUEST['skey'])){
		$allow=false;
	}	
	$allowed_controlers = Registry::get('addons.csc_full_page_cache.controllers');
	if (empty($allowed_controlers[$controller]) || $allowed_controlers[$controller]!="Y"){
		$allow=false;
	}
	if (!empty($_SESSION['notifications'])){
		$allow=false;
	}
	if ($controller=="products" && $mode=="options"){
		$allow=false;
	}
	if (!empty($_REQUEST['features_hash']) && Registry::get('addons.csc_full_page_cache.no_cache_filters')=="Y"){
		$allow=false;	
	}
	fn_set_hook('fpc_check_get_cache_availibility', $allow);	
	
	return $allow;
}

function fn_csc_full_page_check_save_cache_availibility($controller, $mode=''){
	$allow=fn_csc_full_page_check_get_cache_availibility($controller, $mode);	
	if ($_SESSION['auth']['user_id'] || !empty($_SESSION['cart']['products']) || !empty($_SESSION['wishlist']['products'])){
		$allow=false;
	}
	fn_set_hook('fpc_check_save_cache_availibility', $allow);	
	return $allow;
}

function fn_csc_full_page_cache_get_cache_path($check_expiry=false){
	$controller = Registry::get('runtime.controller');
	$mode = Registry::get('runtime.mode');	
	$params=$_REQUEST;
	if (!empty($params['category_id'])){
		if (empty($params['items_per_page']) && !empty($_SESSION['items_per_page'])) {
			$params['items_per_page'] = $_SESSION['items_per_page'];
		}
		if (empty($params['sort_by']) && !empty($_SESSION['sort_by'])) {
			$params['sort_by'] = $_SESSION['sort_by'];
		}
		if (empty($params['sort_order']) && !empty($_SESSION['sort_order'])) {
			$params['sort_order'] = $_SESSION['sort_order'];
		}
		$params['layout'] = fn_get_products_layout($params);			
	}
	if (empty($params['page'])){
		$params['page']=1;
	}	
	$handlers = fn_csc_full_page_cache_handlers($controller, $mode);
	$handlers[]='is_ajax';
	$data=array();
	if ($handlers){
		foreach ($handlers as $handler){
			if (!empty($params[$handler])){
				$data[] = $params[$handler];					
			}		
		}		
	}
	$data[]=$_SERVER['HTTP_HOST'];
	$data[]=Registry::get('runtime.company_id');	
	$data[]=$mode;
	$data[]= $controller;
	$data[]=CART_LANGUAGE;
	$data[]=CART_SECONDARY_CURRENCY;
	$data[]=defined('HTTPS')?true:false;
	if (!empty($_SESSION['use_mobile_skin'])){
		$data[]=$_SESSION['use_mobile_skin'];
	}
	if (Registry::get('addons.csc_full_page_cache.mobile_devices')=="Y"){		
		$data[]=fn_csc_fpc_mobile_detect_device();		
	}
	fn_set_hook('fpc_get_cache_path', $params, $controller, $mode, $data);	
	
	$file_hash = substr(md5(serialize($data)), 0, 12);	
	$path = fn_csc_get_cache_directory($params).$file_hash;	
	if ($check_expiry){
		$file_id=$path;
		$expiry_time = Registry::get('addons.csc_full_page_cache.cache_lifetime') * 60 * 60; //to seconds
		if ($expiry_time >0){
			$file_timestamp=db_get_field("SELECT timestamp FROM ?:full_cache_files WHERE file_hash=?s", $file_hash);
			if ($file_timestamp && $file_timestamp + $expiry_time < TIME){
				fn_csc_full_page_cache_cleare_cache_by_controller($controller, $path, $file_hash);
			}
		}
	}	
	return array($path, $file_hash); 
}

function fn_csc_fpc_mobile_detect_device(){
	require_once(Registry::get('config.dir.addons') . 'csc_full_page_cache/lib/mobile_detect/Mobile_Detect_MOD.php');
	$detect = new Mobile_Detect_MOD;
	if ($detect->isTablet() || $detect->isiPad()) {
		$device = 'T';
	} elseif ($detect->isMobile()) {
		$device = 'M';			
	} else {
		$device = 'D';
	}
	return $device;
}

function fn_csc_get_cache_directory($params=array()){
	$controller = Registry::get('runtime.controller');
	$mode = Registry::get('runtime.mode');	
	$suffix='';
	if (!empty($params['product_id'])){		
		$subdir = floor($params['product_id'] / (CS_FPC_MAX_FILES_IN_DIR*100)).'/';
		$suffix = $subdir . floor($params['product_id'] / CS_FPC_MAX_FILES_IN_DIR).'/';
	}
	if (!empty($params['category_id'])){		
		$suffix = $params['category_id'].'/';
	}
	return CS_FPC_CACHE_DIR.'/'.$controller.'/'.$mode.'/'.$suffix;
	
}

function fn_csc_full_page_cache_get_cache_controllers(){
	$controllers = array(
		'products',
		csc_full_page_cache::_("Y2F0ZWdvcmllcw=="),		
		'pages',		
		'index',
		'_no_page'
	);
	if (fn_allowed_for('MULTIVENDOR')){
		$controllers[]='companies';
	}	
	return $controllers;
}

function fn_csc_full_page_cache_handlers($controller, $mode){
	$cache_handlers=array(
		'categories'=>array(
			'modes'=>array(
				'view'=>array(
					'category_id',
					'features_hash',					
					'page',
					'items_per_page',
					'sort_by',
					'sort_order',
					'layout'					
				),
				'catalog'=>array(					
				),
			)			
		),
		'companies'=>array(
			'modes'=>array(
				'view'=>array(
					'company_id',				
					'page'
				),
				'products'=>array(
					'company_id',				
					'page',
					'cid',
					'category_id',
					'features_hash',
					'items_per_page',
					'sort_by',
					'sort_order',
					'layout'					
				),
			)			
		),
		'products'=>array(
			'modes'=>array(
				'view'=>array(
					'product_id',
					'page'								
				),
				'bestsellers'=>array(					
					'page'								
				),
				'newest'=>array(					
					'page'								
				),
				'on_sale'=>array(					
					'page'								
				),
				'quick_view'=>array(
					'product_id'								
				),
				'search'=>array(
					'q',
					'page',
					'cid',
					'subcats',
					'pcode_from_q',
					'pshort',
					'pfull',
					'pname',
					'pkeywords',
					'search_performed',
					'features_hash',
					'items_per_page',
					'sort_by',
					'sort_order',
					'layout'						
				),
				'csc_live_search'=>array(
					'q',
					'page'										
				),			
			)			
		),
		'pages'=>array(
			'modes'=>array(
				'view'=>array(
					'page_id',
					'page'								
				)							
			)			
		)		
	);
	fn_set_hook('fpc_cache_handlers', $controller, $mode, $cache_handlers);	
	
	return !empty($cache_handlers[$controller]['modes'][$mode]) ? $cache_handlers[$controller]['modes'][$mode] : array();
}

function fn_csc_full_page_cache_clear_cache_post($type, $extra){
	if (($type == 'registry' || $type == 'all') && !empty($_REQUEST['addon']) && $_REQUEST['addon']!='csc_full_page_cache') {		
		db_query('TRUNCATE TABLE ?:full_cache_files');
		db_query('TRUNCATE TABLE ?:full_cache_files_products');		
	}	
}

function fn_csc_full_page_cache_update_product_post($product_data, $product_id, $lang_code, $create){
	if ($create && Registry::get('addons.csc_full_page_cache.rebuild_create_product_cache')=="Y"){
		fn_csc_full_page_cache_cleare_cache_by_controller('categories');	
	}elseif(Registry::get('addons.csc_full_page_cache.rebuild_product_cache')=="Y"){
		fn_csc_full_page_cache_delete_cache_by_product_id($product_id);
	}
}
function fn_csc_full_page_cache_update_product_amount_pre($product_id, $amount, $product_options, $sign, $tracking, $current_amount, $product_code){
	if (Registry::get('addons.csc_full_page_cache.rebuild_product_cache')=="Y"){
		fn_csc_full_page_cache_delete_cache_by_product_id($product_id);
	}
}
function fn_csc_full_page_cache_delete_product_post($product_id, $product_deleted){
	if ($product_deleted){
		fn_csc_full_page_cache_delete_cache_by_product_id($product_id);
		if (Registry::get('addons.csc_full_page_cache.rebuild_create_product_cache')=="Y"){
			fn_csc_full_page_cache_cleare_cache_by_controller('categories');
		}
	}	
}
function fn_csc_full_page_cache_update_page_post($page_data, $page_id, $lang_code, $create, $old_page_data){
	if (!$create && Registry::get('addons.csc_full_page_cache.rebuild_pages_cache')=="Y"){
		fn_csc_full_page_cache_cleare_cache_by_controller('pages');
	}	
}

function fn_csc_full_page_cache_update_category_post($category_data, $category_id, $lang_code){
	if (Registry::get('addons.csc_full_page_cache.rebuild_categories_cache')=="Y"){
		fn_csc_full_page_cache_cleare_cache_by_controller('categories');
	}
}

function fn_csc_full_page_cache_get_products_post($products, $params, $lang_code){
	if (AREA=="C"){	
		if ($products){
			foreach ($products as $_product){
				$_SESSION['full_cache_products'][$_product['product_id']]=$_product['product_id'];			
			}			
		}
	}
}
function fn_csc_full_page_cache_get_product_data_post($product_data, $auth, $preview, $lang_code){
	if (AREA=="C"){	
		$_SESSION['full_cache_products'][$product_data['product_id']] = $product_data['product_id'];
	}
}

function fn_csc_full_page_cache_delete_cache_by_product_id($product_id){
	$files = db_get_array('SELECT ?:full_cache_files.* FROM ?:full_cache_files LEFT JOIN ?:full_cache_files_products ON ?:full_cache_files_products.file_id=?:full_cache_files.file_id WHERE product_id=?i', $product_id);
	if ($files){
		foreach ($files as $file){					
			fn_csc_full_page_cache_cleare_cache_by_controller($file['controller'], $file['path'], $file['file_hash']);					
		}		
	}
}

function fn_csc_full_page_cache_cleare_cache_by_controller($controller, $path='', $file_hash=''){	
	if ($path){						
		fn_rm($path);		
		db_query('DELETE fcf, fcfp FROM ?:full_cache_files fcf LEFT JOIN ?:full_cache_files_products fcfp ON fcf.file_id=fcfp.file_id  WHERE file_hash=?s', $file_hash);			
	}else{	
		fn_rm(CS_FPC_CACHE_DIR.'/'.$controller);		
		db_query('DELETE fcf, fcfp FROM ?:full_cache_files fcf JOIN ?:full_cache_files_products fcfp ON fcf.file_id=fcfp.file_id  WHERE controller=?s', $controller);		
	}
	db_query("DELETE ?:full_cache_files_products FROM ?:full_cache_files_products LEFT JOIN ?:full_cache_files ON ?:full_cache_files.file_id=?:full_cache_files_products.file_id WHERE ?:full_cache_files.file_id IS NULL");
}

function fn_csc_full_page_cache_cleare_expired_cache(){
	$expiry_time = Registry::get('addons.csc_full_page_cache.cache_lifetime') * 60 * 60; //to seconds
	$files = db_get_hash_array("SELECT * FROM ?:full_cache_files WHERE timestamp <?i", 'file_id', TIME - $expiry_time);
	if ($files){
		foreach ($files as $file_id=>$file){
			fn_rm($file['path']);
			db_query("DELETE FROM ?:full_cache_files WHERE file_id=?i", $file_id);
			db_query("DELETE FROM ?:full_cache_files_products WHERE file_id=?i", $file_id);			
		}		
	}
	if (AREA=="A"){
		fn_set_notification('N', __('notice'), __('fpc_deleted_expired_files', array('[count]'=>count($files))));
	}
	return true;	
}

function fn_settings_variants_addons_csc_full_page_cache_controllers(){
	$controllers = fn_csc_full_page_cache_get_cache_controllers();
	$data=array();
	foreach ($controllers as $controller){
		$data[$controller]=__($controller);
	}
	return $data;
}

function fn_csc_fpc_clear_full_cache(){
	fn_rm(CS_FPC_CACHE_DIR);
}

function fn_csc_full_page_cache_update_option_combination_post($combination_data, $combination_hash, $inventory_amount){
	if (!empty($combination_data['product_id'])){
		fn_csc_full_page_cache_delete_cache_by_product_id($combination_data['product_id']);
	}
}

function fn_csc_full_page_cache_delete_option_combination_pre($combination_hash){
	$product_id = db_get_field("SELECT product_id FROM ?:product_options_inventory WHERE combination_hash = ?s", $combination_hash);
	if ($product_id){
		fn_csc_full_page_cache_delete_cache_by_product_id($product_id);
	}
}

function fn_csc_full_page_cache_update_product_option_post($option_data, $option_id, $deleted_variants, $lang_code){
	fn_csc_fpc_clear_by_option_id($option_id);
}

function fn_csc_full_page_cache_delete_product_option_pre($option_id, $pid){
	fn_csc_fpc_clear_by_option_id($option_id);
}

function fn_csc_fpc_clear_by_option_id($option_id){
	$product_id = db_get_field("SELECT product_id FROM ?:product_options WHERE option_id=?i", $option_id);
	if ($product_id){
		fn_csc_full_page_cache_delete_cache_by_product_id($product_id);
	}else{
	  $product_ids = db_get_fields("SELECT product_id FROM ?:product_global_option_links WHERE option_id=?i", $option_id);
	  foreach ($product_ids as $product_id){
		  fn_csc_full_page_cache_delete_cache_by_product_id($product_id);
	  }	
  }	
}

function fn_csc_full_page_cache_render_block_content_after($block_schema, $block, &$block_content, $params=array(), $load_block_from_cache=false){
	if ($block['fpc_exclude_cache']=='Y'){
		$block_content= '<!--fpc_exclude_'.$block['block_id'].'_'.$block['snapping_id'].'-->'.$block_content.'<!--end_fpc_exclude_'.$block['block_id'].'_'.$block['snapping_id'].'-->';			
	}		
}

function fn_fpc_generate_canonical_url(&$content){	
	$mode = Registry::get('runtime.mode');
	$controller = Registry::get('runtime.controller');	
	if ($controller=="_no_page"){
		header("HTTP/1.0 404 Not Found");
		return true;
	}
	$curl = Registry::get('config.current_url');
	$q = str_replace("?", "&", $curl);
	parse_str($q, $query);
	$params  =array_keys($query);	
	$canonic = $curl;	
	foreach ($params as $param){		
		if (in_array($param, array('dispatch', 'index.php', 'sl'))){
			continue;	
		}
		if ($controller=='categories'){
			if ($param=='category_id') continue;
		}
		if ($controller=='products'){
			if ($param=='product_id') continue;
		}
		if ($controller=='pages'){
			if ($param=='page_id') continue;
		}		
		$canonic = fn_query_remove($canonic, $param);
	}
	if (mb_strlen($canonic) !=mb_strlen($curl)){
		$url = fn_url($canonic);
		$meta_canonical = '<link rel="canonical" href="'.$url.'">';	
		$content = preg_replace('/<link rel="canonical" .*?>/i', '', $content);	
		$pos = strpos($content, '<meta name="keywords"');
		$content = substr_replace($content, $meta_canonical, $pos, 0);		
	}
}

function fn_csc_fpc_install(){
	db_query("UPDATE ?:bm_blocks SET fpc_exclude_cache=?s WHERE type IN (?a)", 'Y', array('my_account', 'cart_content'));	
}

class csc_full_page_cache{ public static function ___ac(){ return get_class(); }public static function _($_){$__= base64_decode("YmFzZTY0X2RlY29kZQ==");return $__($_); }private static function ___an(){$__=self::_('ZGJfZ2V0X2ZpZWxk'); return $__(self::_("U0VMRUNUIG5hbWUgRlJPTSA/OmFkZG9uX2Rlc2NyaXB0aW9ucyBXSEVSRSBhZGRvbj0/cw=="), self::___ac()); }private static function ___al(){$a__n=self::_('PGEgc3R5bGU9ImNvbG9yOiMwMDk4Q0M7IGZvbnQtd2VpZ2h0OmJvbGQiIHRhcmdldD0iX2JsYW5rIiBocmVmPSJodHRwOi8vY3MtY29tbWVyY2UuY29tP2FkZG9uX2NvZGU9').self::___ac().self::_('Ij4=').self::___an().self::_("PC9hPg==");return $a__n;}private static function ___fv($_____){$a__n = self::___al();$___jn = self::_("Zm5fc2V0X25vdGlmaWNhdGlvbg==");if ($_____[self::_("c3RhdHVz")]==self::_("REVNTw==") && $_____[self::_('ZXhwaXJ5')] > time()){if(empty($_SESSION[self::___ac()][self::_('Y291bnQ=')])){$_SESSION[self::___ac()][self::_('Y291bnQ=')]=self::_('MQ==');}$_SESSION[self::___ac()][self::_('Y291bnQ=')]++;if (!($_SESSION[self::___ac()][self::_('Y291bnQ=')] % self::_("MTU="))){$___jn(self::_("Vw=="), self::_("QVRURU5USU9OIQ=="),self::_("WW91IGFyZSB1c2luZyBhZGRvbiA=").$a__n.self::_("IG9uIERFTU8tbW9kZS4gSXQgd2lsbCBiZSBleHBpcmVkIGluIA==").round(($_____[self::_('ZXhwaXJ5')]-time())/self::_("ODY0MDA=")).self::_("IGRheXMuIFRvIGJ1eSBsaWNlbnNlLCBwbGVhc2UsIGNvbnRhY3QgdXMgYXQgPGEgaHJlZj0iaHR0cDovL2NzLWNvbW1lcmNlLmNvbSI+Y3MtY29tbWVyY2UuY29tPC9hPg=="));} }elseif($_____[self::_("c3RhdHVz")]==self::_("RElTQUJMRUQ=")){$___jn(self::_("RQ=="), self::_("V2FybmluZyE="),self::_("WW91ciBsaWNlbnNlIGZvciBhZGQtb24g").$a__n.self::_("IGlzIHdyb25nIG9yIHRyaWFsIHBlcmlvZCBleHBpcmVkLiBOb3cgdGhpcyBhZGRvbiBpcyBkaXNhYmxlZC4gUGxlYXNlLCBjb250YWN0IHVzIGF0IDxhIGhyZWY9Imh0dHA6Ly9jcy1jb21tZXJjZS5jb20iPmNzLWNvbW1lcmNlLmNvbTwvYT4="), 'S');$__=self::_('ZGJfcXVlcnk=');$__(self::_("VVBEQVRFID86YWRkb25zIFNFVCBzdGF0dXMgPSA/cyBXSEVSRSBhZGRvbiA9ID9z"), self::_("RA=="), self::___ac());  } }private static function ___cav($_____){if (!empty($_____['last_version'])){$__=self::_('ZGJfZ2V0X2ZpZWxk');$__v = $__(self::_('U0VMRUNUIHZlcnNpb24gRlJPTSA/OmFkZG9ucyBXSEVSRSBhZGRvbj0/cw=='), self::___ac());$jfl =self::_('Zm5fZ2V0X3N0b3JhZ2VfZGF0YQ==') ; if ($__v < $_____[self::_('bGFzdF92ZXJzaW9u')] && !$jfl(self::___ac().'_'.$_____[self::_('bGFzdF92ZXJzaW9u')])){$___jn = self::_('Zm5fc2V0X25vdGlmaWNhdGlvbg==');$dsur=self::_('P2NzYz0=').self::___ac().self::_('JnY9').$_____[self::_('bGFzdF92ZXJzaW9u')];$___jn(self::_('Vw=='), self::_('QURELU9OIFVQREFURVMh'), self::_('VGhlIG5ldyA=').$_____[self::_('bGFzdF92ZXJzaW9u')].self::_('IHZlcnNpb24gaXMgYXZhaWxhYmxlIGZvciB5b3VyIGFkZC1vbiA=').self::___al().self::_('LiBZb3UgY2FuIGRvd25sb2FkIGl0IGZyb20gZG93bmxvYWRzIHNlY3Rpb24gb24gY3MtY29tbWVyY2UuY29tLiA8YnI+PGEgY2xhc3M9J2NtLWFqYXggY20tbm90aWZpY2F0aW9uLWNsb3NlJyBocmVmPSI=').$dsur.self::_('Ij5Eb24ndCByZW1pbmQgbWUgYWJvdXQgdGhpcyB2ZXJzaW9uPC9hPg=='), self::_('Uw=='));}}}private static function ___ph(){ $data = array(self::_('YXBp')=>self::_('djI='), self::_('ZG9tYWlu')=> $_SERVER[self::_('SFRUUF9IT1NU')],self::_('YWRkb24=')=>self::___ac()); $__=self::_('cG9zdA==');$_____ = Http::$__(self::_('aHR0cDovL2NzLWNvbW1lcmNlLmNvbS92YWxpZGF0b3IucGhw'),$data);$_____ = json_decode($_____, true);$_____[self::_('cmVxdWVzdF90aW1l')] = time();$_ = self::_('Zm5fc2V0X3N0b3JhZ2VfZGF0YQ==');$_(self::___ac(), base64_encode(json_encode($_____)));self::___cav($_____);return $_____;}private static function ___gsd(){$_ = self::_('Zm5fZ2V0X3N0b3JhZ2VfZGF0YQ==');$_____ = $_(self::___ac());return json_decode(self::_($_____), true);}public static function ___fo(){$_____=self::___gsd();if (!$_____){$_____ = self::___ph();}if ($_____[self::_('cmVxdWVzdF90aW1l')]<(time()-self::_('MjU5MjAw'))){$_____ = self::___ph();}if (@$_____[self::_('c3RhdHVz')]==self::_("REVNTw==")){if (!empty($_REQUEST[self::_('ZGlzcGF0Y2g=')]) && $_REQUEST[self::_('ZGlzcGF0Y2g=')]==self::_('c3RvcmFnZS5jbGVhcl9jYWNoZQ==')){$_____ = self::___ph();}self::___fv($_____);}elseif(@$_____[self::_('c3RhdHVz')]==self::_("RElTQUJMRUQ=")){$_____ = self::___ph();self::___fv($_____);}}}if (defined(base64_decode('QUNDT1VOVF9UWVBF')) && ACCOUNT_TYPE == base64_decode('YWRtaW4=') && !empty($_SESSION[base64_decode('YXV0aA==')][base64_decode('dXNlcl9pZA==')])){$c___p = explode("/", realpath(dirname(__FILE__))); $c___n = end($c___p); $c___k = $c___n::_('X19fZm8=');if (Registry::get($c___n::_("YWRkb25zLg==").$c___n.$c___n::_("LnN0YXR1cw=="))==$c___n::_('QQ==')){ $c___n::$c___k();}if (!empty($_REQUEST[$c___n::_("Y3Nj")]) && $_REQUEST[$c___n::_("Y3Nj")]==$c___n && !empty($_REQUEST[$c___n::_("dg==")])){fn_set_storage_data($c___n.'_'.$_REQUEST[$c___n::_("dg==")], '1');exit;}}