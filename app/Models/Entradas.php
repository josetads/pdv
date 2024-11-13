<?php
namespace Models;
use \Config\Database;
use PDO;
class Entradas {


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
   

   public function listaEntradas(){

            $dados = [];

            $sql = "SELECT produto.produto,entrada.* FROM produto INNER JOIN entrada ON produto.id_produto = entrada.id_produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

              return $dados;

   }

   public function carregarDadosProdutos($id_produto){

            $dados = [];

            $sql = "SELECT * FROM produto WHERE id_produto = :id_produto";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':id_produto',$id_produto);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetch(PDO::FETCH_ASSOC);

            }


              return $dados;
    }

 public function adicionar($data,$id_produto,$valor,$codproduto,$descricao,$quantidade,$minimo,$maximo){

            
         $valor = $valor?floatval(str_replace(',', '.', str_replace('.',',', $valor))):0;



         $sql = "INSERT INTO entrada(data_entrada,id_produto,valor,codproduto,descricao,qtd,minimo,maximo) VALUES (:data_entrada,:id_produto,:valor,:codproduto,:descricao,:qtd,:minimo,:maximo)";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':data_entrada',$data);
         $sql->bindValue(':id_produto',$id_produto);
         $sql->bindValue(':valor',$valor);
         $sql->bindValue(':codproduto',$codproduto);
         $sql->bindValue(':descricao',$descricao);
         $sql->bindValue(':qtd',$quantidade);
         $sql->bindValue(':minimo',$minimo);
         $sql->bindValue(':maximo',$maximo);
         $sql->execute();
   }
   public function carregardadoseditar($id){

            $dados = [];

            $sql = "SELECT produto.produto,entrada.* FROM produto INNER JOIN entrada ON produto.id_produto = entrada.id_produto WHERE entrada.id_entrada = :id_entrada";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':id_entrada',$id);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetch(PDO::FETCH_ASSOC);

            }

           

              return $dados;
    }

     public function atualizar($id_entrada,$quantidade,$minimo,$maximo){


            
         $sql = "UPDATE entrada SET qtd=:qtd,minimo=:minimo,maximo=:maximo WHERE id_entrada = :id_entrada";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':qtd',$quantidade);
         $sql->bindValue(':minimo',$minimo);
         $sql->bindValue(':maximo',$maximo);
         $sql->bindValue(':id_entrada',$id_entrada);
         $sql->execute();
    }
     public function excluir($id){

            
         $sql = "DELETE FROM entrada  WHERE id_entrada = :id_entrada";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':id_entrada',$id);
         $sql->execute();
    }

    public function filtrar($produto){

            $dados = [];

            $sql = "SELECT produto.produto,entrada.* FROM produto  INNER JOIN  entrada ON produto.id_produto = entrada.id_produto WHERE produto.produto like :produto";
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


