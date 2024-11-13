<?php 

namespace Controllers;

use \Config\Controller;
use \Models\Entradas;

class EntradaController extends Controller{



    public function __construct(){}



     public function index(){
        
        $reg = new Entradas();
        $dados = $reg->listaEntradas();
         
        
        $array = [

             'pasta' => "entrada",
             'lista' => $dados
        ];

        $this->loadTemplate('entrada', $array);

     }
      public function cadastrarEntrada(){
        
         $dados = ""; 

         $reg = new Entradas();
         $dados = $reg->carregarProduto();
         

    
        $array = [

             'pasta' => "entrada",
             'lista' => $dados
        ];

        $this->loadTemplate('cadastrarentrada', $array);

     }

     public function carregarDadosProduto(){
        
         $id_produto = $_POST['produto'];

         $reg = new Entradas();
         $dados = $reg->carregarDadosProdutos($id_produto);

         $array = [

             'lista' => $dados
        ];

        echo json_encode($array);
        die();


     }



     public function salvardados(){
        
            if(isset($_POST['id_produto']) && !empty($_POST['id_produto']))
            {

                $data = filter_input(INPUT_POST,'data');
                $data = implode("-",array_reverse(explode("/",$data)));
                $id_produto = filter_input(INPUT_POST,'id_produto');
                $valor = filter_input(INPUT_POST,'valor');
                $codproduto = filter_input(INPUT_POST,'codproduto');
                $descricao = filter_input(INPUT_POST,'descricao');
                $quantidade = filter_input(INPUT_POST,'quantidade');
                $minimo = filter_input(INPUT_POST,'minimo');
                $maximo = filter_input(INPUT_POST,'maximo');
             
                $adicionar = new Entradas();

                $adicionar->adicionar($data,$id_produto,$valor,$codproduto,$descricao,$quantidade,$minimo,$maximo);
                

            }

        
        header("Location: ".BASE_URL."entrada");

     }

     public function carregardadoseditar($id){

          $editar = new Entradas();
          $dados = $editar->carregardadoseditar($id);


          $array = [

             'pasta' => "entrada",
             'registroeditar' => $dados
          ];

        $this->loadTemplate('editarentrada', $array);

     }

     public function editardados(){
        
            if(isset($_POST['id_entrada']) && !empty($_POST['id_entrada']))
            {

                $id_entrada = filter_input(INPUT_POST,'id_entrada');
                $quantidade = filter_input(INPUT_POST,'quantidade');
                $minimo = filter_input(INPUT_POST,'minimo');
                $maximo = filter_input(INPUT_POST,'maximo');
               
                

                $adicionar = new Entradas();

                $adicionar->atualizar($id_entrada,$quantidade,$minimo,$maximo);
                

            }

        
        header("Location: ".BASE_URL."entrada");

     }

   public function filtrardados(){


         if(isset($_POST['produto']) && !empty($_POST['produto']))
         {


              $produto = $_POST['produto'];

             $reg = new Entradas();
             $dados = $reg->filtrar($produto);


              $array = [

                 'pasta' => "entrada",
                 'lista' => $dados
              ];

             $this->loadTemplate('entrada', $array);

         }else{

            header("Location: ".BASE_URL."entrada");
         }

     }

     public function excluirdados($id){

          $excluir = new Entradas();
          $dados = $excluir->excluir($id);

          header("Location: ".BASE_URL."entrada");

     }


}