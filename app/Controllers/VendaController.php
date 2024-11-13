<?php 

namespace Controllers;

use \Config\Controller;
use \Models\Vendas;
use \Models\Saidas;
use \Models\Clientes;

class VendaController extends Controller{



    public function __construct(){}



     public function index(){
        
       $reg = new Vendas();
       $dados = $reg->listaVendas();

        
        $array = [

             'pasta' => "venda",
             'lista' => $dados
        ];

        $this->loadTemplate('venda', $array);

     }


     public function cadastro(){

        $reg = new Saidas();
       $dados = $reg->carregarProduto();

        
        $array = [

             'pasta' => "venda",
             'lista' => $dados
        ];

        $this->loadTemplate('cadastrarvenda', $array);


     }

     //Lá na pasta js/venda.js tem uma função que carrega os dados dos produtos encodificados aqui via json
      public function carregarDadosProduto(){

        $id_produto = $_POST['produto'];

        $reg = new Vendas();
        $dados = $reg->carregarDadosProdutos($id_produto);

        
        $array = [

             'lista' => $dados
        ];

        echo json_encode($array);
        exit();


     }

     //Aqui eu estou carregando os dados do cliente em um arrray e encodificando em um arquivo json, que será carregado com base no cpf da pessoa, e será chamada no arquivo venda.js que está na pasta js.
     public function carregarDadosCliente(){

        $cpf = $_POST['cpf'];

        $reg = new Vendas();
        $dados = $reg->carregarDadosCliente($cpf);

        
        $array = [

             'lista' => $dados
        ];

        echo json_encode($array);
        exit();


     }

    

      public function salvarvenda(){

             if(isset($_POST['cpf']) && !empty($_POST['cpf']))
            {

                $id_cliente = filter_input(INPUT_POST,'idcliente');
                $cpf_cliente = filter_input(INPUT_POST,'cpf');
                $desconto = filter_input(INPUT_POST,'desconto');
                $total_desconto = filter_input(INPUT_POST,'valor_total_desconto');
                $itens = $_POST['itens'];
               
                $adicionar = new Vendas();

                


                $adicionar->adicionarVenda($id_cliente,$cpf_cliente,$desconto,$total_desconto,$itens);
              
            }

        
           header("Location: ".BASE_URL."venda");


     }

     public function carregardadoseditar($id){

          $editar = new Clientes();
          $dados = $editar->carregardadoseditar($id);


          $array = [

             'pasta' => "cliente",
             'registroeditar' => $dados
          ];

        $this->loadTemplate('editarcliente', $array);

     }

    
    public function filtrardados(){


         if(isset($_POST['cpf']) && !empty($_POST['cpf']))
         {


              $cpf = $_POST['cpf'];

             $reg = new Vendas();
             $dados = $reg->filtrar($cpf);


              $array = [

                 'pasta' => "venda",
                 'lista' => $dados
              ];

             $this->loadTemplate('venda', $array);

         }else{

            header("Location: ".BASE_URL."venda");
         }

     }

      public function visualizarvenda(){

          $id = $_GET['id_venda'];

          $visualizar = new Vendas();
          $dados = $visualizar->visualizarvenda($id);

            $array = [

                 'pasta' => "venda",
                 'lista' => $dados
              ];

             $this->loadTemplate('visualizarvenda', $array);

     }
     

   
}