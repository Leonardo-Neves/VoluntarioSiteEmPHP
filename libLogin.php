<?php
session_start();
include('conexao.php');
include('passwordValidator.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location: login.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$senhaValidator = DecryptPasswordValidatorMD5($senha);

$query = "select * from usuario where email = '{$email}' and senha = '{$senhaValidator}' ";
$result = $conexao->query($query);
$dado = mysqli_fetch_array($result);

if(!empty($dado))
{

	$queryNome = "select * from usuario where email = '{$email}' ";
	$resultNome = $conexao->query($queryNome);
	$dadoAll = mysqli_fetch_array($resultNome);

	if($dadoAll["tipo"] === 'V')
	{
		$_SESSION["VoluntarioLogin"] = $dadoAll["nome"];
		$_SESSION['CPFVoluntarioLogin'] = $dadoAll["cpf"];
		$_SESSION['Logado'] = true;
		$_SESSION['LogadoVoluntario'] = true;
		header('Location: index.php');
		exit();
	}

	if($dadoAll["tipo"] === 'G')
	{
		$_SESSION['GerenteLogin'] = $dadoAll['nome'];
		$_SESSION['Logado'] = true;
		header('Location: dashboard.php');
		exit();
	}

	if($dadoAll["tipo"] === 'A')
	{
		$_SESSION['AdministradorLogin'] = $dadoAll['nome'];
		$_SESSION['Logado'] = true;
		header('Location: dashboard.php');
		exit();
	}
}
else
{
	$_SESSION["nao_autenticado"] = true;

	$_SESSION["erro"] = $dado["email"];
	header('Location: login.php');

	exit();
}

$conexao->close();

?>