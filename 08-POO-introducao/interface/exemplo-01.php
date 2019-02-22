<?php 
//introdução a interface
interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

//pode colocar mais interface colocando (,) entre eles
class Civic implements Veiculo{ //colocar (,) aqui

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

$carro = new Civic();

$carro->trocarMarcha(5);

?>