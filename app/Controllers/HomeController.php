<?php

namespace Controllers;

use \Config\Controller;
use \Models\Usuarios;
use \Models\Homes;
use \Models\Clientes;
use \Models\Produtos;
use Models\Vendas;

class HomeController extends Controller
{



	public function __construct()
	{

		$user = new Usuarios();

		if (!$user->session()) {

			header("Location: " . BASE_URL . "login");
			die();
		}
	}



	public function index()
	{

		$reg = new Homes();
		$dados = $reg->contarEntrada();
		$reg1 = new Clientes();
		$dados1 = $reg1->contarClientes();
		$reg2 = new Produtos();
		$dados2 = $reg2->contarProdutos();
		$reg3 = new Vendas();
		$dados3 = $reg3->somarVendas();
		$reg4 = new Vendas();
		$dados4 = $reg4->somarVendasDia();
		$reg5 = new Vendas();
		$dados5= $reg5->somarVendasMes();


		$array = [

			'pasta' => "home",
			'lista' => $dados,
			'lista1' => $dados1,
			'lista2' => $dados2,
			'lista3' => $dados3,
			'lista4' => $dados4,
			'lista5' => $dados5
		];
		$this->loadTemplate('home', $array);
		// $this->loadTemplate('home', $array);




	}
}
