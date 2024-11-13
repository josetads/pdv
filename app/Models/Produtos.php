<?php
namespace Models;
use \Config\Database;
use PDO;
class Produtos {


 	public function session(){


 			if(isset($_SESSION['AuthUser']) && !empty($_SESSION['AuthUser'])){
             
 				return true;

 			}else {

 				return false;
 			}


 	}


   

   public function listaProdutos(){

            $dados = [];

            $sql = "SELECT * FROM produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;

   }

   public function adicionar($produto,$valor,$codproduto,$descricao){

            
         $valor = $valor?floatval(str_replace(',', '.', str_replace('.',',', $valor))):0;

         $sql = "INSERT INTO produto(produto,valor,codproduto,descricao) VALUES (:produto,:valor,:codproduto,:descricao)";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':produto',$produto);
         $sql->bindValue(':valor',$valor);
         $sql->bindValue(':codproduto',$codproduto);
         $sql->bindValue(':descricao',$descricao);
         $sql->execute();
   }

   public function carregardadoseditar($id){

            $dados = [];

            $sql = "SELECT * FROM produto WHERE id_produto = :id_produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':id_produto',$id);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetch(PDO::FETCH_ASSOC);

            }

              return $dados;
    }

     public function atualizar($id,$produto,$valor,$codproduto,$descricao){


        $valor = $valor?floatval(str_replace(',', '.', str_replace('.',',', $valor))):0;


            
         $sql = "UPDATE produto SET produto=:produto,valor=:valor,codproduto=:codproduto,descricao=:descricao WHERE id_produto = :id_produto";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':produto',$produto);
         $sql->bindValue(':valor',$valor);
         $sql->bindValue(':codproduto',$codproduto);
         $sql->bindValue(':descricao',$descricao);
         $sql->bindValue(':id_produto',$id);
         $sql->execute();
    }
     public function excluir($id){

            
         $sql = "DELETE FROM produto  WHERE id_produto = :id_produto";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':id_produto',$id);
         $sql->execute();
    }

    public function filtrar($produto){

            $dados = [];

            $sql = "SELECT * FROM produto WHERE produto LIKE :produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':produto',$produto.'%');
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;
    }


   public function deslogar(){

   		unset($_SESSION['AuthUser']);

   }
   
   
   public function contarProdutos(){

     $dados1 = [];

     $sql = "SELECT count(id_produto) as totalprodutos FROM produto";
     $sql = Database::conectar()->prepare($sql);
     $sql->execute();

     if($sql->rowCount() > 0){

          $dados1 = $sql->fetch(PDO::FETCH_ASSOC);

     }

 
       return $dados1;

}


}


