<?php
	function p($var){
		if(is_array($var)){
			print_r($var);exit;
		}else{
			echo $var;exit;
		}
	}


?>