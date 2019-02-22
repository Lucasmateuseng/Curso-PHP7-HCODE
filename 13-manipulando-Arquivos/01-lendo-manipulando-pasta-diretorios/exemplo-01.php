<?php

$name = "images";
//criar diretorio
if (!is_dir($name)) {

	mkdir($name);
	echo "Diretório $name criado com sucesso!";
//exclui diretorio
} else {

	rmdir($name);
	echo "Já existe o diretório: $name foi removido";

}

?>