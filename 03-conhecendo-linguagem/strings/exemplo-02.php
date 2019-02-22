<?php

//Função letra maiuscula

$nome = "lucas mateus";
$nome = strtoupper($nome);

echo $nome;

echo "<br/>";

//função letra minuscula

$nome2 = "jessica a morais"; 
$nome2 = strtolower($nome2);

echo $nome2;

echo "<br/>";

//primeira letra mauscula de cada nome

echo ucwords($nome);

echo "<br/>";

//somente a primeira letra mauscula

echo ucfirst($nome2);



?>