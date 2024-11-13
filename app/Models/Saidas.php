<?php
namespace Models;
use \Config\Database;
use PDO;
class Saidas {


 	public function session(){


 			if(isset($_SESSION['AuthUser']) && !empty($_SESSION['AuthUser'])){
             
 				return true;

 			}else {

 				return false;
 			}


 	}


    public function carregarProduto(){

            $dados = [];

            $sql = "SELECT * FROM produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;

   }
   

   public function listaSaidas(){

            $dados = [];

            $sql = "SELECT produto.produto,saida.* FROM produto INNER JOIN saida ON produto.id_produto = saida.id_produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;

   }

   public function carregarDadosProdutos($id_produto){

            $dados = [];

            $sql = "SELECT * FROM entrada WHERE id_produto = :id_produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':id_produto',$id_produto);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetch(PDO::FETCH_ASSOC);

            }

              return $dados;
    }

 public function adicionar($data,$id_produto,$valor,$codproduto,$descricao,$quantidade,$saldo){

            
         $valor = $valor?floatval(str_replace(',', '.', str_replace('.',',', $valor))):0;



         $sql = "INSERT INTO saida(data_saida,id_produto,valor,codproduto,descricao,qtd) VALUES (:data_saida,:id_produto,:valor,:codproduto,:descricao,:qtd)";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':data_saida',$data);
         $sql->bindValue(':id_produto',$id_produto);
         $sql->bindValue(':valor',$valor);
         $sql->bindValue(':codproduto',$codproduto);
         $sql->bindValue(':descricao',$descricao);
         $sql->bindValue(':qtd',$quantidade);
         $sql->execute();



         $sql = "UPDATE entrada SET qtd=:qtd WHERE id_produto= :id_produto";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':qtd',$saldo - $quantidade);
         $sql->bindValue(':id_produto',$id_produto);
         $sql->execute();


   }
  

    
     public function excluir($id,$id_produto,$qtd){

            
         $sql = "DELETE FROM saida  WHERE id_saida = :id_saida";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':id_saida',$id);
         $sql->execute();


        $sql = "SELECT * FROM entrada WHERE id_produto = :id_produto";
        $sql = Database::conectar()->prepare($sql);
        $sql->bindValue(':id_produto',$id_produto);
        $sql->execute();


        $dados = $sql->fetch(PDO::FETCH_ASSOC);

        $saldo = $dados['qtd'];

         $sql = "UPDATE entrada SET qtd=:qtd WHERE id_produto= :id_produto";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':qtd',$qtd + $saldo);
         $sql->bindValue(':id_produto',$id_produto);
         $sql->execute();
    }

    public function filtrar($produto){

            $dados = [];

            $sql = "SELECT produto.produto,saida.* FROM produto  INNER JOIN  saida ON produto.id_produto = saida.id_produto WHERE produto.produto like :produto";
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
    

}


