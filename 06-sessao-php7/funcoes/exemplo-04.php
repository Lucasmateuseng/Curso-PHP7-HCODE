<?php
//função que recebe os argumentos declarados

function ola(){

    $argumentos = func_get_args();

    return $argumentos;
}

var_dump (ola("bom dia"));

?>
