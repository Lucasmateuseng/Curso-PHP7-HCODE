<?php

require_once("config.php");

//limpa variavel de sessao
//session_unset($_SESSION['nome']);

//limpa a variavel e distrui o usuario
session_destroy($_SESSION['nome']);

echo $_SESSION['nome'];

?>