<?php
class Database{
private $host = "localhost";
private $usuario = "root";
private $senha = "";
private $banco = "blogaula";
private $porta = "3306";
private $dbh;

public function __construct(){


        $dns = 'mysql:host='.this->host.';port='.$this->porta.';dbname='.$this->porta.';
        dbname='.$this->banco;

        $opcoes = [
        //armazenar em cache a conexão para ser reutilizada, evitando sobrecarga de uma nova conexão.
        PDO::ATTR_PERSISTENT => true,
        //lança um PDOException se ocorrer um erro
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try{
        //cria instancia do PDO
        $this->dbh = new PDO($dns, $this->usuario, $this->senha, $opcoes);
        }catch(PDOException $error){
        print "Error!";$error->getMessage()."
        ";
        die();
        }//fim do catch

        }//fim do método construtor
        }

