<?php 

namespace Controllers;

use \Config\Controller;
use \Models\Produtos;

class ProdutoController extends Controller{



    public function __construct(){}



     public function index(){
        
        $reg = new Produtos();
        $dados = $reg->listaProdutos();
         
        
        $array = [

             'pasta' => "produto",
             'lista' => $dados
        ];

        $this->loadTemplate('produto', $array);

     }
      public function cadastro(){
        
         $dados = ""; 
    
        $array = [

             'pasta' => "produto",
             'lista' => $dados
        ];

        $this->loadTemplate('cadastroproduto', $array);

     }

     public function salvardados(){
        
            if(isset($_POST['produto']) && !empty($_POST['produto']))
            {

                $produto = filter_input(INPUT_POST,'produto');
                $valor = filter_input(INPUT_POST,'valor');
                $codproduto = filter_input(INPUT_POST,'codproduto');
                $descricao = filter_input(INPUT_POST,'descricao');
             
                $adicionar = new Produtos();

                $adicionar->adicionar($produto,$valor,$codproduto,$descricao);
                

            }

        
        header("Location: ".BASE_URL."produto");

     }

     public function carregardadoseditar($id){

          $editar = new Produtos();
          $dados = $editar->carregardadoseditar($id);


          $array = [

             'pasta' => "produto",
             'registroeditar' => $dados
          ];

        $this->loadTemplate('editarproduto', $array);

     }

     public function editardados(){
        
            if(isset($_POST['produto']) && !empty($_POST['produto']))
            {


                $id = filter_input(INPUT_POST,'id_produto');
                $produto = filter_input(INPUT_POST,'produto');
                $valor = filter_input(INPUT_POST,'valor');
                $codproduto = filter_input(INPUT_POST,'codproduto');
                $descricao = filter_input(INPUT_POST,'descricao');
                

                $adicionar = new Produtos();

                $adicionar->atualizar($id,$produto,$valor,$codproduto,$descricao);
                

            }

        
        header("Location: ".BASE_URL."produto");

     }

     public function filtrardados(){


         if(isset($_POST['produto']) && !empty($_POST['produto']))
         {


              $email = $_POST['produto'];

             $reg = new Produtos();
             $dados = $reg->filtrar($email);


              $array = [

                 'pasta' => "produto",
                 'lista' => $dados
              ];

             $this->loadTemplate('produto', $array);

         }else{

            header("Location: ".BASE_URL."produto");
         }

     }

     public function excluirdados($id){

          $excluir = new Produtos();
          $dados = $excluir->excluir($id);

          header("Location: ".BASE_URL."produto");

     }


}