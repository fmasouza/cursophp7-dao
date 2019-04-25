<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("fabio","1234");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("aluno", "@aluno");
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadbyId(8);
//$usuario->update("professor", "!@#$%");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->delete();

echo $usuario;

 ?>