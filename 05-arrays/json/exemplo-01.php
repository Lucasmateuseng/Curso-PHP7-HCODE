<?php

//json

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Lucas',
    'idade'=>22
));

array_push($pessoas, array(
    'nome'=>'Jessica',
    'idade'=>28
));

//gera de php para json
echo json_encode($pessoas);

?>