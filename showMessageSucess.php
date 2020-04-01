<?php 
if(isset($_SESSION['SucessoCadastro']))
{
	$result = $_SESSION['SucessoCadastro'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SucessoCadastro']);
?>

<?php 
if(isset($_SESSION['ErroCadastro']))
{
	$result = $_SESSION['ErroCadastro'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroCadastro']);
?>

<?php 
if(isset($_SESSION['SucessoExcluir']))
{
	$result = $_SESSION['SucessoExcluir'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SucessoExcluir']);
?>

<?php 
if(isset($_SESSION['ErroExcluir']))
{
	$result = $_SESSION['ErroExcluir'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroExcluir']);
?>

<?php 
if(isset($_SESSION['SucessoAlterar']))
{
	$result = $_SESSION['SucessoAlterar'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SucessoAlterar']);
?>

<?php 
if(isset($_SESSION['ErroAlterar']))
{
	$result = $_SESSION['ErroAlterar'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroAlterar']);
?>

<?php 
if(isset($_SESSION['SucessoConsultar']))
{
	$result = $_SESSION['SucessoConsultar'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SucessoConsultar']);
?>

<?php 
if(isset($_SESSION['ErroConsultar']))
{
	$result = $_SESSION['ErroConsultar'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroConsultar']);
?>