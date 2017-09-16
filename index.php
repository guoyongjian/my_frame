<?php
	/**
     * 入口文件
	*/
	//定义常量
	define('ROOT',realpath('./'));
	define('CORE', ROOT.'/core');
	define('APP', ROOT.'/app');
	define('CONFIG', CORE.'/config');
	define('MODULE', 'app');
	define('DEBUG', true);
	include "vendor/autoload.php";
      include "vendor/catfan/medoo/src/Medoo.php";

	if(DEBUG){
		$whoops = new \Whoops\Run;
		$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
		$whoops->register();
		ini_set('display_error', 'On');
	}else{
		ini_set('display_error', 'Off');
	}

//加载函数库
	include(CORE.'/common/function.php');
	include(CORE.'/project.php');


	spl_autoload_register('\core\project::load');

//启动框架
	$a = new \core\project();

?>