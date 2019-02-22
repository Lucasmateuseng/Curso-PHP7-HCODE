<?php
//polimorfisto e ter metodos com os mesmos nomes na classe pai classe filho, que fazem coisas distindas

abstract class Animal{

    public function falar(){
    
    return "Som";
    }

    public function mover(){

        return "Anda";
    }

}

class Cachorro extends Animal{

    public function falar(){

        return "Late";
    }
}

class Gato extends Animal{
    public function falar(){

        return "Mia";
    }

}

class Passaro extends Animal{
    public function falar(){

        return "Canta";
    }

    public function mover(){

        return "Voa e " .parent::mover();
    }
}

//cachorro
$pluto = new Cachorro();

echo $pluto->falar() ."</br>";
echo $pluto->mover() ."</br>";

echo "</br>";

//gato
$garfield = new Gato();

echo $garfield->falar() ."</br>";
echo $garfield->mover() ."</br>";

echo "</br>";

//passaro
$ave = new Passaro();

echo $ave->falar() ."</br>";
echo $ave->mover() ."</br>";


?>