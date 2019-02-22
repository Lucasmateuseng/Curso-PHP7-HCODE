<?php

//strpos — Encontra a posição da primeira ocorrência de uma string

$frase = "A repetição e a mãe da repetição.";
$palavra = "mãe";

$q = strpos($frase, "mãe");

//substr — Retorna uma parte de uma string

$texto = substr($frase, 0, $q);

var_dump($texto);

echo ("<br/>");

//strlen - Retorna o tamanho de uma string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase) );

var_dump($texto2);




?>