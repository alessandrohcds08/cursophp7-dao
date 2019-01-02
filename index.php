<?php

require_once("config.php");
//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(5);
//echo $root;


//carrega uma lista
//$lista = Usuario::getList();


//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");


//carrega user usando logine senha
$usuario = new Usuario();
$usuario->login("user","");
echo $usuario;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/



?>