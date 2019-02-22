<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "o veiculo acelerou ate " .$velocidade . "km/H";
    }

    public function frenar($velocidade){
        echo "o veiculo frenar ate " .$velocidade . "km/H";
    }

    public function trocarMarcha($marcha){
        echo "o veiculo engatou a marcha ate " .$marcha;
    }

}

?>