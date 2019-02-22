<?php

class Pessoa {
    //todo mundo ver
    public $nome = "Rasmus lerdorf";
    //na mesma classe, classe extendida
    protected $idade = 48;
    //so na mesma classe
    private $senha = "123";

    public function verDados(){

        echo $this->nome . "</br>";
        echo $this->idade . "</br>";
        echo $this->senha . "</br>";

    }

}

$objeto = new Pessoa();

//echo $objeto->nome . "</br>";

$objeto->verDados();


?>