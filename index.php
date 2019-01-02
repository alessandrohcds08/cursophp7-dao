<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(5);
//echo $root;


//carrega uma lista
//$lista = Usuario::getList();


//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");


//carrega user usando logine senha
//$usuario = new Usuario();
//$usuario->login("user","");
/* criando um novo usuario
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();
*/

$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->update("jovemap", "zaqwsx");

echo $usuario;

?>