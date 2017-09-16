<?php 
namespace app\Controller;
use core\lib\model;
use core\lib\config;
use core\project;
class IndexController extends project{

	public function __construct(){
		$this->model = new model();
	}
	public function index(){
		// $database = config::all('database');
		// p($database);
		// $c = config::get('action','route');
		// $a = config::get('controller','route');
		// p($a);
  //  		$data = 'ceshi';
  //  		$this->assign('data',$data);
  //  		$this->display('Index');
//		echo 'index page';
//		$user = $this->model->select('c','*');
//		dump($user);


          $name = 'tom';
          $this->assign('name',$name);
          $this->display('index');
	}
}