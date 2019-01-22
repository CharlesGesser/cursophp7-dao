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

/*
	//Carrega uma lista de usuarios buscando pelo login
	$search = Usuario::search("o");

	echo json_encode($search);
*/

/*
	//Carrega um usuario usando o login e a senha

	$usuario = new Usuario();

	$usuario->login("root", "!@#$");

	echo ($usuario);
*/

/*
	//Criar um aluno com metodo construtor vasio
	$aluno = new Usuario();

	$aluno->setDeslogin("aluno");
	$aluno->setDessenha("@lun0");

	$aluno->insert();

	echo $aluno;

*/
/*
	//cria um aluno passando os dados no construtor
	$aluno = new Usuario("Aluno exemplo", "senha exemplo");

	$aluno->insert();

	echo $aluno;
*/
/*
	//Fazer update no usuario
	$usuario = new Usuario();

	$usuario->loadById(4);

	$usuario->update("Professor", "Senha do id 5");

	echo $usuario;
*/

	//Deletar um usuario
	$usuario = new Usuario();

	$usuario->loadById(4);

	$usuario->delete();

	echo $usuario;
 ?>