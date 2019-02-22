<?php
//recuperando sessao
session_id('kro5n8torkans5i7prbfnffu74');

require_once("config.php");

//gera um novo id de sessao
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>