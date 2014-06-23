<?php
define('debug_mod',true);
		
if(defined('debug_mod'))
	error_reporting(E_ALL);
else
	error_reporting(0);

define('BASEPATH',(dirname(__FILE__)).'/');


require_once BASEPATH.'core/init.php';

A::pp()->run();
 


! defined('debug_mod') || A::pp()->profiler->report();
