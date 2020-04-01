<?php
	session_start();

	include('databaseEventMethods.php');
	include('databaseSignUpMethods.php');
	include('email.php');
	include('databaseSubmitVoluntierMethods.php');
	include('messagesErrors.php');

	if(isset($_POST['email']) && !empty($_POST['email']))
	{
		$email = $_POST['email'];
	}

	if(isset($_POST['assunto']) && !empty($_POST['assunto']))
	{
		$assunto = $_POST['assunto'];
	}

	if(isset($_POST['mensagem']) && !empty($_POST['mensagem']))
	{
		$mensagem = $_POST['mensagem'];
	}

	if(isset($_POST['emailTeste']))
	{
		$emailTeste = $_POST['emailTeste'];
	}

	if(isset($_POST['contatoCliente']))
	{
		$contatoCliente = $_POST['contatoCliente'];
	}

	if(isset($_POST['codigo']))
	{
		$codigo = $_POST['codigo'];
	}
	

	// Site

	$emailSite = "testebackenddd@gmail.com";

	$mensagemSite = "<h3>Contact from: <b>$email</b></h3>  <br/><b>Message: $mensagem</b> ";
 
 	// Contato Voluntário

 	$mensagemContato = "<h3>Contact from: <b>$email</b></h3>  <br/><b>Message: $mensagem</b> ";

 	// Contato Evento

	$cpf = $_SESSION['CPFVoluntarioLogin'];

	$resultCPFExist = ConsultarSignUpCPF($cpf);

	$dadosDoCodigo = ConsultarCodigo($codigo);

	$emailEvento = $resultCPFExist['email'];

    $assuntoEvento = "Informacoes do Voluntario - Evento";

    $mensagemEvento = "$emailEvento ";



	if(!empty($emailTeste))
	{
		// Contato do Site

		Email($emailSite, $assunto, $mensagemSite);

		header('Location: index.php');
		exit();

	}
	else if(!empty($contatoCliente))
	{
		// Contato para o Cliente

		Email($email, $assunto, $mensagemContato);

		header('Location: dashboard.php');
		exit();

	}

	if(!empty($_POST['codigo']) && CodigoError($_POST['codigo']) && ConsultarCodigo($_POST['codigo']))
	{
   		// Cadastrar Usuário no Evento
	
		$result = CadastrarVoluntarioNoEvento($codigo, $cpf);

		if($result === false)
		{
			echo "<script type='text/javascript'>document.location.href='sejaVoluntario.php';</script>";
		}
		else
		{
	    	Email($resultCPFExist['email'], $assuntoEvento, $mensagemEvento);
	    	
	    	echo "<script type='text/javascript'>document.location.href='perfil.php';</script>";

    	}
	}
	else
	{
		header('Location: sejaVoluntario.php');
		exit();
	}

	
?>

