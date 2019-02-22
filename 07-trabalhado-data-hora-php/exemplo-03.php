<?php
//função strftime
//https://secure.php.net/manual/pt_BR/function.strftime.php

setlocale(LC_ALL, "pt-br" , "pt_BR.utf-8", "portuguese");

//função ucwords coloca sempre a primeira letra mauscula de cada palavra
//"%A %B" tem varios argumentos que podem ser utilizados

echo ucwords(strftime("%A %B"));

?>