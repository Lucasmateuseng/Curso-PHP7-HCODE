<?php   

//variaveis basicas
$nome = "lucas";
$site = 'www.lmit.com.br';

$ano = 1999;
$salarios = 5500.99;
$bloqueando = false;

//////////////////////////////
//variaveis compostas
$frutas = array("abacaxi", "laranja", "manga" );

echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
//////////////////////////////
//tipos especiais
$arquivo = fopen("exemplo-02.php", "r");

//var_dump($arquivo);

//nulo ausencia de valor
$nulo = null;

//vazia ja reservo um espaço para ela na memoria porem não foi iniciada
$vazio = "";

?>