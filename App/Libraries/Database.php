<?php
class Database{
private $host = "localhost";
private $usuario = "root";
private $senha = "";
private $banco = "blogaula";
private $porta = "3306";
private $dbh;
private $stmt;

public function __construct(){


        $dns = 'mysql:host='.$this->host.';port='.$this->porta.';dbname='.$this->porta.';
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
// prepara o statement com query 
public function query($sql){
        //prepara uma consulta sql
        $this->stmt = $this->dbh->prepare($sql);
        }
        
        //vincula um valor a um parâmetro
        public function bind($parametro, $valor, $tipo = null){
        if(is_null($tipo)):
           switch (true):
                case is_int($valor):
                        $tipo = PDO::PARAM_INT;
                        break;
                case is_bool($valor):
                        $tipo = PDO::PARAM_BOOL;
                        break;
                case is_null($valor):
                        $tipo = PDO::PARAM_NULL;
                        break;
                default:
                $tipo = PDO::PARAM_STR;
                endswitch;
                endif;
        
        $this->stmt->bindValue($parametro, $valor, $tipo);
        }
        
        //executa prepared statement
        public function executa(){
                $this ->executa();
                return $this->stmt->execute();
        }
        public function resultado (){
                $this ->executa();
                return $this->stmt->fetchAll(PDO::FETCH_OBJ);
                }
        //fim da função executa
        public function resultados (){
                $this ->executa();
                return $this->stmt->fetchAll(PDO::FETCH_OBJ);
          
        }
        public function totalResultados(){
                return $this -> stmt ->rowCount();
        }//fim da função totalResultados
}//fim da classe Database



 