<?php
$qualSuaIdade = 80;

$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

//if - se
if($qualSuaIdade < $idadeCriança){

    echo "Criança";
}
//elseif - senaose testa as outras condições
elseif ($qualSuaIdade < $idadeMaior){
    echo "Adolecente";
}
//elseif - senaose testa as outras condições
elseif($qualSuaIdade < $idadeMelhor){
    echo "Adulto";
}
// else -senao
else{
    echo "Idoso";
}

echo "<br/>";

//função ternaria
echo ($qualSuaIdade < $idadeMaior)?"menor de idade":"maior de idade";


?>