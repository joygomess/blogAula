<?php
class Usuario extends Controller  {

   private $db;
   public function __contruct(){
   
    $this->db = new Database ();

   }
   public function armazenar($dados){
    $this->db->query("INSERT INTO usuarios(nome,email,senha)) VALUES  (:nome,:email,:senha)");
     
    $this->db->bind('nome',$dados['nome']);
    $this->db->bind('email',$dados['email']);
    $this->db->bind('senha',$dados['senha']);
    if($this->db->executa()):
      return true;
   else:
    return false;
   endif;
   } 
}