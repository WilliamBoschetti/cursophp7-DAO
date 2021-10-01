<?php 

require_once("config.php");

// Pegar um usuario $usuario = new Usuario();
//$usuario->loadById(4);

//echo $usuario;


//Carrega uma lista de usuario

//$list = Usuario::getList();

//echo json_encode($list);


//Carrega uma lita de usuarios buscando pelo login

//$busca = Usuario::search("ro");

//echo json_encode($busca);


//Carrega um usuario usando um login e senha

$usuario = new Usuario();
$usuario->login("root", "123456");

echo $usuario;

 ?>