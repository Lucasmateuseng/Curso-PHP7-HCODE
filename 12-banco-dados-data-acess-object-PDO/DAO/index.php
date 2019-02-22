<?php 

require_once("config.php");
/*
//carrega um usuario
$root = new Usuario();
$root->loadById(3);

echo $root;
*/

/*
//carrega uma lista de usuario
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("lu");
echo json_encode($search);
*/

/*
//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Lucas", "123");
echo $usuario;
*/

/*
//Criando um novo usuário
$aluno = new Usuario("jessica", "321");
$aluno->insert();
echo $aluno;
*/

/*
//update um usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;
*/

//deleta um usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

 ?>