<?php  

	function CadastrarVoluntarioNoEvento($codigo, $cpf)
	{
		
		include('conexao.php');

		$queryEvento = "select cpf from evento where cpf = '$cpf'";
		$result = mysqli_fetch_assoc($conexao3->query($queryEvento));


		if(!isset($result['cpf']))
		{
			$queryCadastro = "INSERT into evento (codigo, cpf) VALUES ('$codigo', '$cpf')";
			$conexao3->query($queryCadastro);	
		}
		else 
		{
			return false;
		}

	}
	
	function ConsultarEventoDoVoluntario($cpf)
	{
		include('conexao.php');

		$queryEvento = "select codigo from evento where cpf = '$cpf'";
		$result = $conexao3->query($queryEvento);
		
		if(!empty($result))
		{
			return $result;
		}


	}



?>