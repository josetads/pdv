<?php 

namespace Controllers;

use \Config\Controller;
use \Models\Usuarios;

class UsuarioController extends Controller{



    public function __construct(){}



     public function index(){
        
        $reg = new Usuarios();
        $dados = $reg->listaUsuario();
         
    
        $array = [

             'pasta' => "usuario",
             'lista' => $dados
        ];

        $this->loadTemplate('usuario', $array);

     }
      public function cadastro(){
        
         $dados = ""; 
    
        $array = [

             'pasta' => "usuario",
             'lista' => $dados
        ];

        $this->loadTemplate('cadastro', $array);

     }

     public function salvardados(){
        
            if(isset($_POST['email']) && !empty($_POST['email']))
            {

                $email = filter_input(INPUT_POST,'email');
                $senha = filter_input(INPUT_POST,'senha');
                $nivel = filter_input(INPUT_POST,'nivel');

                $adicionar = new Usuarios();

                $adicionar->adicionar($email,$senha,$nivel);
                

            }

        
        header("Location: ".BASE_URL."usuario");

     }

     public function carregardadoseditar($id){

          $editar = new Usuarios();
          $dados = $editar->carregardadoseditar($id);


          $array = [

             'pasta' => "usuario",
             'registroeditar' => $dados
          ];

        $this->loadTemplate('editar', $array);

     }

     public function editardados(){
        
            if(isset($_POST['email']) && !empty($_POST['email']))
            {


                $id = filter_input(INPUT_POST,'id_usuario');
                $email = filter_input(INPUT_POST,'email');
                $senha = filter_input(INPUT_POST,'senha');
                $nivel = filter_input(INPUT_POST,'nivel');

                $adicionar = new Usuarios();

                $adicionar->atualizar($id,$email,$senha,$nivel);
                

            }

        
        header("Location: ".BASE_URL."usuario");

     }

     public function filtrardados(){


         if(isset($_POST['email']) && !empty($_POST['email']))
         {


              $email = $_POST['email'];

             $reg = new Usuarios();
             $dados = $reg->filtrar($email);


              $array = [

                 'pasta' => "usuario",
                 'lista' => $dados
              ];

             $this->loadTemplate('usuario', $array);

         }else{

            header("Location: ".BASE_URL."usuario");
         }

     }

     public function excluirdados($id){

          $excluir = new Usuarios();
          $dados = $excluir->excluir($id);

          header("Location: ".BASE_URL."usuario");

     }


}