<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('VOLUNTARIOEVENTO', 'root');
define('EVENTO', 'root');
define('SENHA', '');
define('BD', 'voluntario');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não Conectou!!');
$conexao2 = mysqli_connect(HOST, VOLUNTARIOEVENTO, SENHA, BD) or die ('Não Conectou!!');
$conexao3 = mysqli_connect(HOST, EVENTO, SENHA, BD) or die ('Não Conectou!!');
?>