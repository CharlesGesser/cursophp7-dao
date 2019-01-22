<?php 

	require_once("config.php");
	/*
	//traz apenas o usuario do id enviado como parametro
	$root = new Usuario();

	$root->loadById(3);

	echo $root;
*/

	/*
	//carrega uma lista de usuarios
	$lista = Usuario::getList();

	echo json_encode($lista);

*/

	//Carrega uma lista de usuarios buscando pelo login
	$search = Usuario::search("o");

	echo json_encode($search);

	/*
	//Carrega um usuario usando o login e a senha

	$usuario = new Usuario();

	$usuario->login("root", "!@#$");


	echo ($usuario);
*/


 ?>