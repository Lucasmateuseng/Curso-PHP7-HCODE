<?php
function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php") === true){

        require_once($nomeClasse. ".php");
    }

}
//pode ser utilizada passando uma string
spl_autoload_register("incluirClasses");

//pode ser utilizada passado uma função anonima 
spl_autoload_register(function($nomeClasse){

    if(file_exists("abst". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true){

        require_once("abst". DIRECTORY_SEPARATOR .$nomeClasse.".php");
    }    

});

$carro = new DelRey();

$carro->acelerar(80);

?>