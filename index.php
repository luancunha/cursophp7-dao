<?php

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("select * from tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um usuario
//$root = new Usuario;
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("lu");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$%");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->update("professor", "123456");

echo $usuario;

?>