<?php
	namespace core;

	class project{
		public static  $classMap = array();
		public $assign;
		public function __construct(){
			 \core\lib\log::init();
			 $route = new \core\lib\route();
			$class = $route->controller.'Controller';
			$action = $route->action;
			$file = APP.'/Controller/'.$class.'.class.php';
			if(is_file($file)){
				include $file;
				$className =  '\\'.MODULE.'\Controller\\'.$class;
				$controller = new $className();
				$controller->$action();
			}else{
			    p('找不到');
                  }
		}

		public static function load($class){
			if(isset($classMap[$class])){
				return true;
			}else{
				$class = str_replace('\\', '/', $class);
				$file = ROOT.'/'.$class.'.php';
				if(is_file($file)){
					include $file;
				}else{
					return false;
				}
				self::$classMap[$class]=$class;
			}
		}

		public function assign($name,$value){
			$this->assign[$name] = $value;
		}

		public function display($file){
//			$filename = APP.'/Views/'.$file.'.html';
//			extract($this->assign);//打散数组
//			if(is_file($filename)){
//				include $filename;
//			}
                $filename = APP.'/Views/'.$file.'.html';
                if(is_file($filename)){
                    $loader = new \Twig_Loader_Filesystem(APP.'/Views');
                    $twig = new \Twig_Environment($loader, array(
                        'cache' => ROOT.'/cache',
                    ));
                    $template = $twig->load('index.html');
                    echo $template->render($this->assign);
			}

		}

	}



?>