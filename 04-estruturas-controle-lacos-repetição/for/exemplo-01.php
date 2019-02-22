<?php
$i = 0;

for ($i=0; $i<1000; $i+=5){

    //para em determinado valor desejado e retorna apos a condição
    if($i >= 200 && $i <= 800) continue;

    //para o laço no local desejado
    if ($i === 900) break;

    echo $i . "<br>";
}

?>