<?php
namespace Models;
use \Config\Database;
use PDO;
class Homes {


 	public function session(){


 			if(isset($_SESSION['AuthUser']) && !empty($_SESSION['AuthUser'])){
             
 				return true;

 			}else {

 				return false;
 			}


 	}


    public function contarEntrada(){

            $dados = [];

            $sql = "SELECT count(id_entrada) as totalentrada FROM entrada";
            $sql = Database::conectar()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetch(PDO::FETCH_ASSOC);

            }

        
              return $dados;

   }

   public function somarVendas(){

      $dados1 = [];
 
      $sql = "SELECT sum(total_venda) as totalvenda FROM venda";
      $sql = Database::conectar()->prepare($sql);
      $sql->execute();
 
      if($sql->rowCount() > 0){
 
           $dados3 = $sql->fetch(PDO::FETCH_ASSOC);
 
      }
 
  
        return $dados3;
 
 }


 public function somarVendasDia(){

   $dados4 = [];

   $sql = "SELECT sum(total_venda) as totalvenda FROM venda WHERE CURDATE();  ";
   $sql = Database::conectar()->prepare($sql);
   $sql->execute();

   if($sql->rowCount() > 0){

        $dados4 = $sql->fetch(PDO::FETCH_ASSOC);

   }


     return $dados4;

}


public function somarVendasMes(){

   $dados5 = [];

   $sql = "SELECT sum(total_venda) as totalvenda FROM venda WHERE  month(now())  ";
   $sql = Database::conectar()->prepare($sql);
   $sql->execute();

   if($sql->rowCount() > 0){

        $dados5 = $sql->fetch(PDO::FETCH_ASSOC);

   }


     return $dados5;

}

   


}


