<?php
namespace core\lib;
use core\lib\config;
class log{
	/**
	 *1,确定存储方式
	 *2，写日志
	*/
	public static $class;
	public static function init(){
		//确定存储类型
		$drive = config::get('DRIVE','log');
		$class = '\core\lib\drive\log\\'.$drive;
		self::$class = new $class;
	}

	static public function log($name = '',$filename = 'log'){
		self::$class->log($name,$filename);
	}
}


?>