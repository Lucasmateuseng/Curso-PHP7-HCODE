<?php
//classe datetime
//https://secure.php.net/manual/pt_BR/class.datetime.php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

//antes
echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

//depois
echo $dt->format("d/m/Y H:i:s");


?>