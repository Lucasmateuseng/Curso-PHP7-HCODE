<?php

//estrutura da classe

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    //get, set $modelo
    public function getModelo(){

        return $this->modelo;
    }

    public function setModelo($modelo){

        $this->modelo = $modelo;

    }

    //get, set $motor
    public function getMotor():float{

        return $this->motor;
    }

    public function setMotor($motor){

        $this->motor = $motor;

    }

    //get, set $ano
    public function getAno():int{

        return $this->ano;
    }

    public function setAno($ano){

        $this->ano = $ano;

    }

    public function exibir(){

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}

$gol = new Carro();
$gol->setModelo("gol GT");
$gol->setMotor(1.6);
$gol->setAno(2018);

var_dump ($gol->exibir());

?>