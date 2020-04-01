<?php 

include('conexao.php');
include('databaseEventMethods.php');

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$eventocadastro = $_POST['eventocadastro'];


if(!empty($eventocadastro))
{
	Cadastrar($titulo, $data, $endereco, $codigo, $descricao);
}




?>