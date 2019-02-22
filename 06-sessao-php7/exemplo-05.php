<?php
//função

//Obtém e/ou define o caminho para armazenamento da sessão atual

require_once("config.php");

echo session_save_path();

echo "<br>";

//Retorna o status atual da sessão
var_dump(session_status());

echo "<br>";

switch (session_status()) {
    case 'PHP_SESSION_DISABLED':
        echo "se as sessões estiverem desabilitadas";
        break;

    case 'PHP_SESSION_NONE':
        echo "se as sessões estiverem habilitadas, mas nenhuma existir";
        break;

    case 'PHP_SESSION_ACTIVE':
        echo "se as sessões estiverem habilitadas, e uma existir";
        break;   
   
}

?>