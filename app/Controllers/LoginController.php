<?php
namespace Controllers;

use \Config\Controller;
use \Models\Usuarios;

class LoginController extends Controller{


	 public function index(){

		 	$data = array();

		 	$email = filter_input(INPUT_POST, 'email');
		 	$senha = filter_input(INPUT_POST, 'senha');


		 	if($email && $senha){

		 		//$senha = md5($senha); senha criptografada
		 		
		 		$user = new Usuarios();

		 		if($user->Logar($email,$senha)){

		 			header("Location: ".BASE_URL);
		 			die();
		 		}else{

		 		 $data['error'] = 'E-mail ou Senha Incorretos';
		 		
		 		}
		 		

		 	}

		 	$this->loadView('login',$data);

	 }

	 public function deslogar(){

	 		$user = new Usuarios();
	 		$user->deslogar();


	 		header("Location: ".BASE_URL);
	 }


}