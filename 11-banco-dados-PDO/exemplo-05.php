<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//cancela uma operação
//$conn->rollBack(); 

//aprova uma operação
$conn->commit();

echo "Delete OK!";

?>