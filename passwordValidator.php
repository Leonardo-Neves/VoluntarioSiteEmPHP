<?php 
	function EncryptPasswordValidatorMD5($senha)
	{
		return md5($senha);
	}

	function DecryptPasswordValidatorMD5($senha)
	{
		return md5($senha);
	}

	function EncryptPasswordValidatorSHA1($senha)
	{
		return sha1($senha);
	}

	function DecryptPasswordValidatorSHA1($senha)
	{
		return sha1($senha);
	}

	function EncryptPasswordValidatorBase64($senha)
	{
		return base64_encode($senha);
	}

	function DecryptPasswordValidatorBase64($senha)
	{
		return base64_decode($senha);
	}
?>