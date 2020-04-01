<?php 	
	function Cadastrar($titulo, $data, $endereco, $codigo, $descricao)
	{

		include('conexao.php');

		$queryCadastrar =  "INSERT into voluntarioevento (titulo, data, endereco, codigo, descricao) VALUES ('$titulo', '$data', '$endereco', '$codigo', '$descricao')";

		$result = $conexao2->query($queryCadastrar);

		if (!empty($result)) 
		{
		  // Sucesso
		  header("Location: dashboard.php");
		  exit();
		} 
		else 
		{
		  // Erro
		  header("Location: dashboard.php");
		  exit();
		}
		$conexao2->close();
	}

	function Excluir($codigo)
	{
		include('conexao.php');
		include('messagesErrors.php');

		$queryDeletar = "DELETE FROM voluntarioevento WHERE codigo = '$codigo'";
		$result = $conexao2->query($queryDeletar);

		if (!empty($result)) 
		{
		  // Sucesso

		  header("Location: dashboard.php");
		  exit();
		} 
		else 
		{
		  // Erro
		  header("Location: index.php");
		  exit();
		}
		
		$conexao2->close();
	}

	function Consultar()
	{
		include('conexao.php');
		include('messagesErrors.php');

		$queryConsultar = "select * from voluntarioevento";
		$dado = $conexao2->query($queryConsultar);
		
		if(!empty($dado))
		{
			return $dado;
		}
		else
		{
			// exception
		}

		$conexao2->close();
	}

	function ConsultarCodigo($codigo)
	{
		include('conexao.php');


		$queryConsultar = "select * from voluntarioevento where codigo = '$codigo'";
		$dado = mysqli_fetch_array($conexao2->query($queryConsultar));
		
		if(!empty($dado))
		{
			return $dado;
		}
		else
		{
			// exception
		}

		$conexao2->close();
	}


?>