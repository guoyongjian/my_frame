<?php
	namespace core\lib;
	class config{
		public function __construct(){
			p('config page');
		}
		public static $conf = array(); 
		public static function get($name,$file){
			//判断文件是否存在
			//判断配置是否存
			//缓存配置
			if(isset(self::$conf[$file])){
				return self::$conf[$file][$name];
			}else{
				$path = CONFIG.'/'.$file.'.php';
				if(is_file($path)){
					$config = include $path;
					if(isset($config[$name])){
						self::$conf[$file] = $config;
						return $config[$name];
					}else{
						throw new \Exception("配置项不存在".$name, 2);
						
					}
				}else{
					throw new \Exception("找不到配置文件".$file, 1);
					
				}
			}
		}


		public static function all($file){
			//判断文件是否存在
			//缓存配置
			if(isset(self::$conf[$file])){
				return self::$conf[$file];
			}else{
				$path = CONFIG.'/'.$file.'.php';
				if(is_file($path)){
					$config = include $path;
					self::$conf[$file] = $config;
					return $config;
				}else{
					throw new \Exception("找不到配置文件".$file, 1);
					
				}
			}
		}
	}

?>