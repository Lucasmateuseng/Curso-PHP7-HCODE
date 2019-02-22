<?php
//novidade do php 7 chamar uma constante em arrays

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);//, true (torna a contante caseinsensitive), não recomendado

print_r(BANCO_DE_DADOS);

?>