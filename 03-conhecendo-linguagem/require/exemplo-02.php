<?php

//require_once traz apenas uma vez a chamada do arquivo de existir duplicação
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php"; //duplicação

$resultado = somar(10, 300);

echo $resultado;

?>