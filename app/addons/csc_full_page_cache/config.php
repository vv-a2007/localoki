<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }
use Tygh\Registry;

define('CS_FPC_MAX_FILES_IN_DIR', 1000);
define('CS_FPC_CACHE_DIR', Registry::get('config.dir.var').'cache/full_cache');

