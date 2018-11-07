<?php
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'clear' && !empty($_REQUEST['cron_key']) && $_REQUEST['cron_key']==Registry::get('addons.csc_full_page_cache.cron_key')) {
	$controllers = fn_csc_full_page_cache_get_cache_controllers();
	foreach ($controllers as $controller){
		if (!empty($_REQUEST[$controller]) && $_REQUEST[$controller]=="Y"){
			fn_csc_full_page_cache_cleare_cache_by_controller($controller);			
		}
	}
	if (!empty($_REQUEST['expired'])){
		fn_csc_full_page_cache_cleare_expired_cache();
	}
	die('Full page cache was cleared');
}
die('Access denied');