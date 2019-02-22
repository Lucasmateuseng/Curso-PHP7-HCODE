<?php
//passagem de parametro por valor

$a = 10;

//o que acontece dentre da função fica na função
function trocaValor($c){

    $c += 50;

    return $c;

}

//o que acontece dentre da função fica na função
echo $a;

echo "<br>";
//echo da função trocaValor()
echo trocaValor($a);

?>
