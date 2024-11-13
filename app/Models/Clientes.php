<?php
namespace Models;
use \Config\Database;
use PDO;
class Clientes {


 	public function session(){


 			if(isset($_SESSION['AuthUser']) && !empty($_SESSION['AuthUser'])){
             
 				return true;

 			}else {

 				return false;
 			}


 	}

      public function carregarDadosCliente($cpf){

          $dados = [];

          $sql = "SELECT * FROM clientes WHERE cpf = :cpf";
          $sql = Database::conectar()->prepare($sql);
          $sql->bindValue(':cpf',$cpf);
          $sql->execute();

          if($sql->rowCount() > 0){

               $dados = $sql->fetch(PDO::FETCH_ASSOC);

          }

         

            return $dados;
  }






 
   public function listaClientes(){

            $dados = [];

            $sql = "SELECT * FROM clientes";
            $sql = Database::conectar()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;

   }



 public function adicionar($nome,$email,$cpf,$telefone,$cep,$rua,$bairro,$numero,$cidade,$estado){

            
      
         $sql = "INSERT INTO clientes(nome,email,cpf,telefone, cep, rua, bairro, numero, cidade, estado) VALUES (:nome,:email,:cpf,:telefone,:cep,:rua,:bairro,:numero,:cidade,:estado)";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':nome',$nome);
         $sql->bindValue(':email',$email);
         $sql->bindValue(':cpf',$cpf);
         $sql->bindValue(':telefone',$telefone);
         $sql->bindValue(':cep',$cep);
         $sql->bindValue(':rua',$rua);
         $sql->bindValue(':bairro',$bairro);
         $sql->bindValue(':numero',$numero);
         $sql->bindValue(':cidade',$cidade);
         $sql->bindValue(':estado',$estado);
        
         $sql->execute();
   }
   public function carregardadoseditar($id){

            $dados = [];

            $sql = "SELECT * FROM clientes WHERE id_cliente = :id_cliente";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':id_cliente',$id);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetch(PDO::FETCH_ASSOC);

            }

           

              return $dados;
    }

     public function atualizar($id,$nome,$email,$cpf,$telefone,$cep,$rua,$bairro,$numero,$cidade,$estado,$ativo){


            
         $sql = "UPDATE clientes SET nome=:nome,email=:email,cpf=:cpf,telefone=:telefone,cep=:cep,rua=:rua,bairro=:bairro,numero=:numero,cidade=:cidade,estado=:estado,ativo=:ativo WHERE id_cliente = :id_cliente";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':nome',$nome);
         $sql->bindValue(':email',$email);
         $sql->bindValue(':cpf',$cpf);
         $sql->bindValue(':telefone',$telefone);
         $sql->bindValue(':cep',$cep);
         $sql->bindValue(':rua',$rua);
         $sql->bindValue(':bairro',$bairro);
         $sql->bindValue(':numero',$numero);
         $sql->bindValue(':cidade',$cidade);
         $sql->bindValue(':estado',$estado);



         $sql->bindValue(':ativo',$ativo);
         $sql->bindValue(':id_cliente',$id);
         $sql->execute();
    }
     public function desativarcliente($id){

            
         $sql = "UPDATE clientes SET ativo=:ativo WHERE id_cliente = :id_cliente";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':ativo','0');
         $sql->bindValue(':id_cliente',$id);
         $sql->execute();
    }

    public function filtrar($nome){

            $dados = [];

            $sql = "SELECT * FROM clientes WHERE nome LIKE :nome";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':nome',$nome.'%');
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

           

              return $dados;
    }




   public function deslogar(){

   		unset($_SESSION['AuthUser']);

   }
   
   public function contarClientes(){

     $dados1 = [];

     $sql = "SELECT count(id_cliente) as totalclientes FROM clientes";
     $sql = Database::conectar()->prepare($sql);
     $sql->execute();

     if($sql->rowCount() > 0){

          $dados1 = $sql->fetch(PDO::FETCH_ASSOC);

     }

 
       return $dados1;

}

}


