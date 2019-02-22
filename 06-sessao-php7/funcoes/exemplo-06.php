<?php
//passagem de parametro por referencia

$a = 10;

//o que acontece dentre da função fica na função
//& significa passagem de valor por referencia
function trocaValor(&$c){

    $c += 50;

    return $c;

}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

?>
