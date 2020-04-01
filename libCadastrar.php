<?php

  include('conexao.php');
  include('databaseSignUpMethods.php');
  session_start();

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $endereco = $_POST['endereco'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $tipo = $_POST['tipo'];
  $dashboard = $_POST['dashboard'];
  $cadastroLogin = $_POST['cadastroLogin'];

  // Pagina de Cadastro - Publica

  if(empty($dashboard) && !empty($cadastroLogin))
  {
    CadastrarPublica($nome, $email, $senha, $endereco, $cpf, $rg, $tipo);
  }

  // Pagina de Cadastro Dashboard - Privada 

  if(empty($cadastroLogin) && !empty($dashboard))
  {
    CadastrarPrivado($nome, $email, $senha, $endereco, $cpf, $rg, $tipo); 
  }

?>