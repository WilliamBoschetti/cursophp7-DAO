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

//$usuario = new Usuario();
//$usuario->login("root", "123456");

//echo $usuario;


//Insert de nova usuario

//$registro = new Usuario("dudu", "4554");


//$registro->insert();

//echo $registro;

$user = new Usuario();

$user->loadById(5);
$user->update("Login", "132");

echo $user;


 ?>