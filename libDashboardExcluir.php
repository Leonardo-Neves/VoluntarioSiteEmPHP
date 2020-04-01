<?php  

	include('databaseEventMethods.php');

	$codigo = $_POST['codigo'];

	if(!empty($_POST['codigo']))
	{
		Excluir($codigo);
	}

?>