<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilLogin.css">
	<link rel="stylesheet" type="text/css" href="css/mainLogin.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">


				

				<?php 
				include('showMessageError.php');
				include('showMessageSucess.php');
				?>

				<form class="login100-form validate-form flex-sb flex-w" method="post" action="libCadastrar.php">
					<span class="login100-form-title p-b-32">
						Cadastrar
					</span>

					<span class="txt1 p-b-11">
						Nome
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="nome" placeholder="Nome" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="email" placeholder="usuario@example.com" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Senha
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="password" name="senha" placeholder="*********" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Endereço
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="endereco" placeholder="Rua / Avenidade, Numero, Cidade, CEP" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						CPF
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" id="CPF" type="text" name="cpf" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						RG
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="rg" placeholder="00.000.000-00" >
						<span class="focus-input100"></span>
					</div>

					<input class="input100" type="hidden" name="tipo" value="V" >
					<input class="input100" type="hidden" name="cadastroLogin" value="FULL" >
				
					<br/>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">Cadastrar</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/mainLogin.js"></script>

</body>
</html>

<script>
	/*
    $(document).ready(function () { 
        var $seuCampoCpf = $("#CPF");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
    */
</script>



