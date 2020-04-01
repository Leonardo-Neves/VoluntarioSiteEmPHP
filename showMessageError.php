<?php 
if(isset($_SESSION['SucessoEventoVoluntarioCadastro']))
{
	$result = $_SESSION['SucessoEventoVoluntarioCadastro'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SucessoEventoVoluntarioCadastro']);
?>

<?php  
if(isset($_SESSION['ErroEventoVoluntarioCadastro']))
{
	$result = $_SESSION['ErroEventoVoluntarioCadastro'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroEventoVoluntarioCadastro']);
?>

<?php  
if(isset($_SESSION['ErroComum']))
{
	$result = $_SESSION['ErroComum'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroComum']);
?>

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
if(isset($_SESSION['NomeErrorZero']))
{
	$result = $_SESSION['NomeErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NomeErrorZero']);
?>

<?php 
if(isset($_SESSION['NomeErrorMaxLength']))
{
	$result = $_SESSION['NomeErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NomeErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['NomeErrorNull']))
{
	$result = $_SESSION['NomeErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NomeErrorNull']);
?>

<?php 
if(isset($_SESSION['SenhaErrorZero']))
{
	$result = $_SESSION['SenhaErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SenhaErrorZero']);
?>

<?php 
if(isset($_SESSION['SenhaErrorNull']))
{
	$result = $_SESSION['SenhaErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SenhaErrorNull']);
?>

<?php 
if(isset($_SESSION['SenhaErrorMaxLength']))
{
	$result = $_SESSION['SenhaErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['SenhaErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['EnderecoErrorZero']))
{
	$result = $_SESSION['EnderecoErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EnderecoErrorZero']);
?>

<?php 
if(isset($_SESSION['EnderecoErrorNull']))
{
	$result = $_SESSION['EnderecoErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EnderecoErrorNull']);
?>

<?php 
if(isset($_SESSION['EnderecoErrorMaxLength']))
{
	$result = $_SESSION['EnderecoErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EnderecoErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['EmailErrorZero']))
{
	$result = $_SESSION['EmailErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorZero']);
?>

<?php 
if(isset($_SESSION['EmailErrorNull']))
{
	$result = $_SESSION['EmailErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorNull']);
?>

<?php 
if(isset($_SESSION['EmailErrorMaxLength']))
{
	$result = $_SESSION['EmailErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['EmailErrorExist']))
{
	$result = $_SESSION['EmailErrorExist'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorExist']);
?>

<?php 
if(isset($_SESSION['CPFErrorZero']))
{
	$result = $_SESSION['CPFErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CPFErrorZero']);
?>

<?php 
if(isset($_SESSION['CPFErrorNull']))
{
	$result = $_SESSION['CPFErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CPFErrorNull']);
?>

<?php 
if(isset($_SESSION['CPFErrorMaxLength']))
{
	$result = $_SESSION['CPFErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CPFErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['CPFErrorMinLength']))
{
	$result = $_SESSION['CPFErrorMinLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CPFErrorMinLength']);
?>

<?php 
if(isset($_SESSION['CPFExistente']))
{
	$result = $_SESSION['CPFExistente'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CPFExistente']);
?>

<?php 
if(isset($_SESSION['ErroCPF']))
{
	$result = $_SESSION['ErroCPF'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroCPF']);
?>

<?php 
if(isset($_SESSION['RGErrorZero']))
{
	$result = $_SESSION['RGErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['RGErrorZero']);
?>

<?php 
if(isset($_SESSION['RGErrorNull']))
{
	$result = $_SESSION['RGErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['RGErrorNull']);
?>

<?php 
if(isset($_SESSION['RGErrorMaxLength']))
{
	$result = $_SESSION['RGErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['RGErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['RGErrorMinLength']))
{
	$result = $_SESSION['RGErrorMinLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['RGErrorMinLength']);
?>

<?php 
if(isset($_SESSION['RGErrorExist']))
{
	$result = $_SESSION['RGErrorExist'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['RGErrorExist']);
?>

<?php 
if(isset($_SESSION['TipoError']))
{
	$result = $_SESSION['TipoError'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TipoError']);
?>

<?php 
if(isset($_SESSION['TipoErrorNull']))
{
	$result = $_SESSION['TipoErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TipoErrorNull']);
?>

<?php 
if(isset($_SESSION['TipoErrorZero']))
{
	$result = $_SESSION['TipoErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TipoErrorZero']);
?>

<?php 
if(isset($_SESSION['TipoErrorMaxLength']))
{
	$result = $_SESSION['TipoErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TipoErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['CodigoErrorZero']))
{
	$result = $_SESSION['CodigoErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CodigoErrorZero']);
?>

<?php 
if(isset($_SESSION['CodigoErrorNull']))
{
	$result = $_SESSION['CodigoErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CodigoErrorNull']);
?>

<?php 
if(isset($_SESSION['CodigoErrorMaxLength']))
{
	$result = $_SESSION['CodigoErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CodigoErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['TituloErrorZero']))
{
	$result = $_SESSION['TituloErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TituloErrorZero']);
?>

<?php 
if(isset($_SESSION['TituloErrorNull']))
{
	$result = $_SESSION['TituloErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TituloErrorNull']);
?>

<?php 
if(isset($_SESSION['TituloErrorMaxLength']))
{
	$result = $_SESSION['TituloErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TituloErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['DataErrorZero']))
{
	$result = $_SESSION['DataErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['DataErrorZero']);
?>

<?php 
if(isset($_SESSION['DataErrorNull']))
{
	$result = $_SESSION['DataErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['DataErrorNull']);
?>
<?php 
if(isset($_SESSION['DescricaoError']))
{
	$result = $_SESSION['DescricaoError'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}?>

<?php 
if(isset($_SESSION['DescricaoErrorNull']))
{
	$result = $_SESSION['DescricaoErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}?>

<?php 