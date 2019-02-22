<?php

//include_once traz apenas uma vez a chamada do arquivo de existir duplicação
include_once "inc/exemplo-01.php";
include_once "inc/exemplo-01.php"; //duplicação

$resultado = somar(10, 30);

echo $resultado;

?>