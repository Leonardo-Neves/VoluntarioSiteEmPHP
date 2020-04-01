<?php 
	session_start();

	function Cadastrar($titulo, $data, $endereco, $descricao)
	{

		include('conexao.php');

		$queryCadastrar =  "INSERT into doar (titulo, data, endereco, descricao) VALUES ('$titulo', '$data', '$endereco', '$descricao')";

		$result = $conexao2->query($queryCadastrar);

		if (!empty($result)) 
		{
		  // Sucesso
		  $_SESSION['CadastroEventoSucesso'] = "Evento Cadastrado com sucesso !";
		  header("Location: dashboard.php");
		  exit();
		} 
		else 
		{
		  // Erro
		  $_SESSION['CadastroEventoErro'] = "Erro no cadastro do Evento !";
		  header("Location: dashboard.php");
		  exit();
		}
		$conexao2->close();
	}

	function Excluir($id)
	{
		include('conexao.php');

		$queryDeletar = "DELETE FROM voluntarioevento WHERE id = '$id'";
		$result = $conexao2->query($queryDeletar);

		if (!empty($result)) 
		{
		  // Sucesso
		  $_SESSION['ExcluirEventoSucesso'] = "Evento Excluido com sucesso !";
		  header("Location: dashboard.php");
		  exit();
		} 
		else 
		{
		  // Erro
		  $_SESSION['ExcluirEventoErro'] = "Erro na exclusão do Evento !";
		  header("Location: dashboard.php");
		  exit();
		}
		$conexao2->close();
	}
?>