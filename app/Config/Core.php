<?php
namespace Config;

class Core{


	  public function start(){


	  		$url = "/";
	  		$Controller;
	  		$Action = "index";
	  		$params = [];

	  		$url = isset($_GET['url']) ? $url .=$_GET['url'] : '/'.'Home';
	  		$url = explode('/', $url);
	  		array_shift($url);
	  		$Controller = $url[0].'Controller';
	  		array_shift($url);
         
         	if(isset($url[0]) && !empty($url[0])){

         		$Action = $url[0];

         	}else{

         		$Action;
         	}

         	array_shift($url);

         	if(count($url) > 0){

         		$params = $url;
         	}

         	$Controller = ucfirst($Controller);



         	if(!file_exists('app/Controllers/'.$Controller.'.php') || !method_exists('\Controllers\\'.$Controller,$Action)){

         		$Controller = 'NotController';
         		$Action = 'index';

         	}

         	$newController = '\Controllers\\'.$Controller;

         	$c = new $newController();

         	call_user_func_array([$c, $Action], $params);

	  }

}