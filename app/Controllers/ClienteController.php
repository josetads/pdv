<?php 

namespace Controllers;

use \Config\Controller;
use \Models\Clientes;
use \Models\Homes;

class ClienteController extends Controller{



    public function __construct(){}



     public function index(){
        
       $reg = new Clientes();
       $dados = $reg->listaClientes();

        
        $array = [

             'pasta' => "cliente",
             'lista' => $dados
        ];

        $this->loadTemplate('cliente', $array);




     }


     public function cadastro(){

        $dados = "";

        $array = [

             'pasta' => "cliente",
             'lista' => $dados
        ];

        $this->loadTemplate('cadastrocliente', $array);


     }

      public function salvardados(){

           if(isset($_POST['nome']) && !empty($_POST['nome']))
            {

                $nome = filter_input(INPUT_POST,'nome');
                $email = filter_input(INPUT_POST,'email');
                $cpf = filter_input(INPUT_POST,'cpf');
                $telefone = filter_input(INPUT_POST,'telefone');
                $cep = filter_input(INPUT_POST,'cep');
                $rua = filter_input(INPUT_POST,'rua');
                $bairro = filter_input(INPUT_POST,'bairro');
                $numero = filter_input(INPUT_POST,'numero');
                $cidade = filter_input(INPUT_POST,'cidade');
                $estado = filter_input(INPUT_POST,'estado');
              
               
                $adicionar = new Clientes();

                $adicionar->adicionar($nome,$email,$cpf,$telefone,$cep,$rua,$bairro,$numero,$cidade,$estado);
                

            }

        
        header("Location: ".BASE_URL."cliente");


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

     public function editardados()
     {
        
            if(isset($_POST['nome']) && !empty($_POST['nome']))
            {

                $id = filter_input(INPUT_POST,'id_cliente');
                $nome = filter_input(INPUT_POST,'nome');
                $email = filter_input(INPUT_POST,'email');
                $cpf = filter_input(INPUT_POST,'cpf');
                $telefone = filter_input(INPUT_POST,'telefone');
                $cep = filter_input(INPUT_POST,'cep');
                $rua = filter_input(INPUT_POST,'rua');
                $bairro = filter_input(INPUT_POST,'bairro');
                $numero = filter_input(INPUT_POST,'numero');
                $cidade = filter_input(INPUT_POST,'cidade');
                $estado = filter_input(INPUT_POST,'estado');
                $ativo = filter_input(INPUT_POST,'ativo');
              
           

                $adicionar = new Clientes();

                $adicionar->atualizar($id,$nome,$email,$cpf,$telefone,$cep,$rua,$bairro,$numero,$cidade,$estado,$ativo);
                

            }

        
        header("Location: ".BASE_URL."cliente");

     }


     public function carregarDadosCliente(){

      $cpf = $_POST['cpf'];

      $reg = new Clientes();
      $dados = $reg->carregarDadosCliente($cpf);

      
      $array = [

           'lista' => $dados
      ];

      echo json_encode($array);
      exit();


   }
    public function filtrardados(){


         if(isset($_POST['nome']) && !empty($_POST['nome']))
         {


              $nome = $_POST['nome'];

             $reg = new Clientes();
             $dados = $reg->filtrar($nome);


              $array = [

                 'pasta' => "cliente",
                 'lista' => $dados
              ];

             $this->loadTemplate('cliente', $array);

         }else{

            header("Location: ".BASE_URL."cliente");
         }

     }

      public function desativarcliente($id){

          $excluir = new Clientes();
          $dados = $excluir->desativarcliente($id);

          header("Location: ".BASE_URL."cliente");

     }
     

   
}