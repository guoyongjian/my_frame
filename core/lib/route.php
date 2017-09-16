<?php
	namespace core\lib;
	use core\lib\config;
	use core\lib\log;
	class route{
		public $controller;
		public $action;

		/**
        *1,隐藏index.php
        *2，获取URL参数部分
        *3，返回对应控制器和方法
		*/
		public function __construct(){
			if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
				$path = $_SERVER['REQUEST_URI'];
				$path_arr = explode('/',trim($path,'/'));
				// p($path_arr);
				if(isset($path_arr[0])){
					$this->controller = trim($path_arr[0],'?');
				}else{
					$this->controller = config::get('controller','route');
				}
				unset($path_arr[0]);
				if(isset($path_arr[1])){
					$this->action = $path_arr[1];
					$log = 'controller : ' . $this->controller . '   action : ' . $this->action;
			    	log::log($log);
				}else{
					$this->action = config::get('action','route');
				}
				
				unset($path_arr[1]);
				if(!empty($path_arr)){
					$i=2;
					while($i<=count($path_arr)){
						if(isset($path_arr[$i+1])){
							$_GET['field'][$path_arr[$i]] = $path_arr[$i+1];
							$i+=2;
						}
					}
				}
			}
		}
	}



?>