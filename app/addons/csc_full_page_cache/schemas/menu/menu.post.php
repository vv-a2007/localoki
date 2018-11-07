<?php
$schema['top']['administration']['items']['storage']['subitems']['cs_divider'] = array(
	 'type' => csc_full_page_cache::_("ZGl2aWRlcg=="),
	 'position' => 9998,
);
$schema['top']['administration']['items']['storage']['subitems']['cfpc_clear_all'] = array(
	 'href' => 'full_page_cache.clear?controller=all&redirect_url=%CURRENT_URL',
	'position' => 9999,
);
$schema['top']['administration']['items']['storage']['subitems']['cfpc_clear_expired'] = array(
	 'href' => 'full_page_cache.clear?type=expired&redirect_url=%CURRENT_URL',
	'position' => 9999,
);

$controllers = fn_csc_full_page_cache_get_cache_controllers();
foreach ($controllers as $controller){
	$schema['top']['administration']['items']['storage']['subitems']['cfpc_clear_'.$controller] = array(
		 'href' => 'full_page_cache.clear?controller='.$controller.'&redirect_url=%CURRENT_URL',
		'position' => 10000,
	);
}



return $schema;
