<?php
class usuarios extends Controller{
    public function cadastrar (){
          $formulario = filter_input_array(INPUT_POST,['nome'=>FILTER_SANITIZE_FULL_SPECIAL_CHARS,//PARA SANITIZAR ENTRADAS COMO O NOME, EVITANDO A EXECUÇÃO DE CÓDIGOS MALICIOSO
          'email'=>FILTER_SANITIZE_EMAIL,//PARA GARATIR QUE O EMAIL SEJA VÁLIDO
          'senha'=>FILTER_DEFAULT,
          'confirma_senha' =>FILTER_DEFAULT]);
        $this->view ('usuarios/cadastrar');

    }// fim da função cadastrar 
}// fim da classe usuarios