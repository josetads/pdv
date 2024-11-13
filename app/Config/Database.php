<?php
  namespace Config;
  use PDO;

  class Database{

  			private static $conexao;

  			public static function conectar(){


  					if(self::$conexao == null){

  						try{

  							self::$conexao = new PDO("mysql:dbname=".DATABASE.";host=".HOST,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  							self::$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  						}catch(PDOException $e){

  								echo "ERRO AO CONECTAR BANDO DE DADOS";
  								die();

  						}


  					}


  					return self::$conexao;

  			}


  }