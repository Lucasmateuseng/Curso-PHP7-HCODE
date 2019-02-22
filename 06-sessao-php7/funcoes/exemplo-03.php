<?php
//se colocar = na variavel ela pega o valor defenido como padrão se não for definida tem que definir no echo
//se colocar (,) na função posso definir 2 parametros a função
//se não definir valor da variavel na função tem que adicionar o valor no echo
function ola($texto = "mundo", $periodo = "bom dia"){

    return "ola $texto $periodo! <br>";

}
echo "<br>";

//exemplo definindo variavel na função
echo ola();
//usando (,) para definir segundo parametro
echo ola("","Boa noite");

//exemplo definindo valor no echo atribuindo valor a função para completar a var $texto
echo ola("Trabalho", "Boa tarde");
//usando (,) para definir segundo parametro
echo ola("lucas","");

?>
