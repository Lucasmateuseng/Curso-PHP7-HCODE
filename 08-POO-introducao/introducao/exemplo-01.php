<?php

class Pessoa{

    public $nome; //atributo

    public function falar(){ //metodo

        return "O meu nome é " .$this->nome; 

    }
}

$Lucas = new Pessoa();
$Lucas->nome = "Lucas mateus";
echo $Lucas->falar();

?>