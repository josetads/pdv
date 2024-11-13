<?php
namespace Models;
use \Config\Database;
use PDO;
class Usuarios {


 	public function session(){


 			if(isset($_SESSION['AuthUser']) && !empty($_SESSION['AuthUser'])){
             
 				return true;

 			}else {

 				return false;
 			}


 	}


   public function Logar($email,$senha){

   			$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
   			$sql = Database::conectar()->prepare($sql);
   			$sql->bindValue(':email', $email);
   			$sql->bindValue(':senha', $senha);
   			$sql->execute();

   			if($sql->rowCount() > 0){

   				  $row = $sql->fetch(PDO::FETCH_ASSOC);

   				  $_SESSION['AuthUser'] = array($row['id_usuario'],$row['email'],$row['nivel']);

   				  return true;
  				

   			}else{

   				 return false;

   			}

   }

   public function listaUsuario(){

            $dados = [];

            $sql = "SELECT * FROM usuario";
            $sql = Database::conectar()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;

   }

   public function adicionar($email,$senha,$nivel){

            
         $sql = "INSERT INTO usuario(email,senha,nivel) VALUES (:email,:senha,:nivel)";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':email',$email);
         $sql->bindValue(':senha',$senha);
         $sql->bindValue(':nivel',$nivel);
         $sql->execute();
   }

   public function carregardadoseditar($id){

            $dados = [];

            $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':id_usuario',$id);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetch(PDO::FETCH_ASSOC);

            }

              return $dados;
    }

     public function atualizar($id,$email,$senha,$nivel){

            
         $sql = "UPDATE usuario SET email=:email,senha=:senha,nivel=:nivel WHERE id_usuario = :id_usuario";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':email',$email);
         $sql->bindValue(':senha',$senha);
         $sql->bindValue(':nivel',$nivel);
         $sql->bindValue(':id_usuario',$id);
         $sql->execute();
    }
     public function excluir($id){

            
         $sql = "DELETE FROM usuario  WHERE id_usuario = :id_usuario";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':id_usuario',$id);
         $sql->execute();
    }

    public function filtrar($email){

            $dados = [];

            $sql = "SELECT * FROM usuario WHERE email LIKE :email";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':email',$email.'%');
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;
    }


   public function deslogar(){

   		unset($_SESSION['AuthUser']);

   }
    

}


