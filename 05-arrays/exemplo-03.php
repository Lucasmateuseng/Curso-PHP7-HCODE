<?php

//arrays biredicionais

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Lucas',
    'idade'=>22
));

array_push($pessoas, array(
    'nome'=>'Jessica',
    'idade'=>28
));

print_r($pessoas[0]['nome']);

?>