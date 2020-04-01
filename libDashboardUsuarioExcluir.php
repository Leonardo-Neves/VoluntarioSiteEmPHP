<?php  

	include('databaseSignUpMethods.php');
	
	$cpf = $_POST['cpf'];

	if(!empty($_POST['cpf']))
	{
		ExcluirSignUp($cpf);
	}
	else
	{
		header('Location: dashboard.php');
		exit();
	}

?>