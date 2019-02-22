<?php

//ESCOPO DE VARIAVEIS

$nome = "Lucas";

function teste() {

    global $nome;
    echo $nome;

}

function teste2() {

    $nome = " jessica";
    echo $nome." agora no teste2 ";

}

teste();
teste2();



?>