<?php
namespace core\lib\drive\log;

class mysql {
	public $path;
	public function __construct(){
		$config = config::get('OPTION','log');
		$this->path = $config['PATH'];
	}

	public function log($message = '',$filename = 'log'){
		//确定路径是否存在，不存在就创建
		//写入日志
		p('mysql log');
	}
}


?>