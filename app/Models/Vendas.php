<?php
namespace Models;
use \Config\Database;
use PDO;
class Vendas {


 	public function session(){


 			if(isset($_SESSION['AuthUser']) && !empty($_SESSION['AuthUser'])){
             
 				return true;

 			}else {

 				return false;
 			}


 	}


 
   public function listaVendas(){

            $dados = [];

            $sql = "SELECT clientes.nome,venda.* FROM clientes INNER JOIN venda ON clientes.id_cliente = venda.id_cliente order by venda.id_venda desc limit 10";
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

   


 public function adicionarVenda($id_cliente,$cpf_cliente,$desconto,$total_desconto,$itens){


         $total_venda = isset($total_desconto)?floatval(str_replace(',','.',str_replace('.','',$total_desconto))):0;
         $desconto = isset($desconto)?floatval(str_replace(',','.',str_replace('.','',$desconto))):0;

         $sql = "INSERT INTO venda(data_venda,id_cliente,cpf,total_venda,desconto) VALUES (:data_venda,:id_cliente,:cpf,:total_venda,:desconto)";
         $sql = Database::conectar()->prepare($sql);
         $sql->bindValue(':data_venda',date('Y-m-d'));
         $sql->bindValue(':id_cliente',$id_cliente);
         $sql->bindValue(':cpf',$cpf_cliente);
         $sql->bindValue(':total_venda',$total_venda);
         $sql->bindValue(':desconto',$desconto);
        
         $sql->execute();



         $id_venda = Database::conectar()->lastInsertId();



         foreach($itens as $id_prod => $quant_prod)
         {

                $sql = "SELECT * FROM produto WHERE id_produto = :id_produto";
                $sql = Database::conectar()->prepare($sql);
                $sql->bindValue(':id_produto',$id_prod);
                $sql->execute();

                if($sql->rowCount() > 0)
                {

                     $res = $sql->fetch(PDO::FETCH_ASSOC);
                     $preco = $res['valor'];


                         $sql = "INSERT INTO venda_produto(id_venda,id_produto,valor,qtd) VALUES (:id_venda,:id_produto,:valor,:qtd)";
                         $sql = Database::conectar()->prepare($sql);
                         $sql->bindValue(':id_venda',$id_venda);
                         $sql->bindValue(':id_produto',$id_prod);
                         $sql->bindValue(':valor',$preco);
                         $sql->bindValue(':qtd',$quant_prod);
                         $sql->execute();


                        $sql = "SELECT * FROM entrada WHERE id_produto = :id_produto";
                        $sql = Database::conectar()->prepare($sql);
                        $sql->bindValue(':id_produto',$id_prod);
                        $sql->execute();   

                        if($sql->rowCount() > 0)
                        {

                            $result = $sql->fetch(PDO::FETCH_ASSOC);

                            $quantidade = $result['qtd'];

                            $sql = "UPDATE entrada SET qtd=:qtd WHERE id_produto=:id_produto";
                            $sql = Database::conectar()->prepare($sql);
                            $sql->bindValue(':qtd',$quantidade - $quant_prod);
                            $sql->bindValue(':id_produto',$id_prod);
                            $sql->execute();

                        }


                }
            


          }




   }
   
     
     
    public function filtrar($cpf){

            $dados = [];

            $sql = "SELECT clientes.nome,venda.* FROM clientes INNER JOIN venda ON clientes.id_cliente = venda.id_cliente WHERE venda.cpf =:cpf";
            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':cpf',$cpf);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

           

              return $dados;
    }

  


   public function deslogar(){

   		unset($_SESSION['AuthUser']);

   }

   public function visualizarvenda($id_venda){

            $dados = [];
            $sql = "SELECT produto.produto,venda_produto.* FROM produto INNER JOIN venda_produto ON produto.id_produto = venda_produto.id_produto WHERE venda_produto.id_venda =:id_venda order by venda_produto.id_venda";

            $sql = Database::conectar()->prepare($sql);
            $sql->bindValue(':id_venda',$id_venda);
            $sql->execute();

            if($sql->rowCount() > 0){

                 $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            }

           

              return $dados;
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

     $sql = "SELECT sum(total_venda) as totalvenda FROM venda WHERE  CURDATE();  ";
     $sql = Database::conectar()->prepare($sql);
     $sql->execute();

     if($sql->rowCount() > 0){

          $dados4 = $sql->fetch(PDO::FETCH_ASSOC);

     }

 
       return $dados4;

}


public function somarVendasMes(){

     $dados5 = [];

     $sql = "SELECT sum(total_venda) as totalvenda FROM venda WHERE   month(now())  ";
     $sql = Database::conectar()->prepare($sql);
     $sql->execute();

     if($sql->rowCount() > 0){

          $dados5 = $sql->fetch(PDO::FETCH_ASSOC);

     }

 
       return $dados5;

}

}


