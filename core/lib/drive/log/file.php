<?php
namespace core\lib\drive\log;
use core\lib\config;

class file {
	public $path;
	public function __construct(){
		$config = config::get('OPTION','log');
		$this->path = $config['PATH'];
	}

	public function log($message = '',$filename = 'log'){
		//确定路径是否存在，不存在就创建
		//写入日志
		if(!is_dir($this->path)){
			mkdir($this->path,'0777',true);
		}

		$message = '['.date('Y-m-d H:i:s',time()).'] : '.json_encode($message);
		return file_put_contents($this->path.$filename.'.php', $message.PHP_EOL,FILE_APPEND);
	}
}


?>