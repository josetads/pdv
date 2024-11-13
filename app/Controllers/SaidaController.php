<?php 

namespace Controllers;

use \Config\Controller;
use \Models\Saidas;

class SaidaController extends Controller{



    public function __construct(){}



     public function index(){
        
        $reg = new Saidas();
        $dados = $reg->listaSaidas();
         
        
        $array = [

             'pasta' => "saida",
             'lista' => $dados
        ];

        $this->loadTemplate('saida', $array);

     }
      public function cadastrarSaida(){
        
         $dados = ""; 

         $reg = new Saidas();
         $dados = $reg->carregarProduto();
         

    
        $array = [

             'pasta' => "saida",
             'lista' => $dados
        ];

        $this->loadTemplate('cadastrarsaida', $array);

     }

     public function carregarDadosProduto(){
        
         $id_produto = $_POST['produto'];

         $reg = new Saidas();
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
                $saldo = filter_input(INPUT_POST,'saldo');
                $quantidade = filter_input(INPUT_POST,'quantidade');
               
                $adicionar = new Saidas();

                $adicionar->adicionar($data,$id_produto,$valor,$codproduto,$descricao,$quantidade,$saldo);
                

            }

        
        header("Location: ".BASE_URL."saida");

     }

     public function carregardadoseditar($id){

          $editar = new Saidas();
          $dados = $editar->carregardadoseditar($id);


          $array = [

             'pasta' => "saida",
             'registroeditar' => $dados
          ];

        $this->loadTemplate('editarsaida', $array);

     }

     

   public function filtrardados(){


         if(isset($_POST['produto']) && !empty($_POST['produto']))
         {


              $produto = $_POST['produto'];

             $reg = new Saidas();
             $dados = $reg->filtrar($produto);


              $array = [

                 'pasta' => "saida",
                 'lista' => $dados
              ];

             $this->loadTemplate('saida', $array);

         }else{

            header("Location: ".BASE_URL."saida");
         }

     }

     public function excluirdados($id,$id_produto,$qtd){




          $excluir = new Saidas();
          $dados = $excluir->excluir($id,$id_produto,$qtd);

          header("Location: ".BASE_URL."saida");

     }


}