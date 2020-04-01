<?php 

	function ErroComum()
	{
		$_SESSION['ErroComum'] = "Ocorreu um erro!";
	}

	function SucessoCadastro()
	{
		$_SESSION['SucessoCadastro'] = "Cadastrado com Sucesso!";
	}


	function MinLength($value)
	{
		$_SESSION['MinLength'] = "Informe um valor igual ou maior a 3!";
	}

	function MaxLength()
	{
		$_SESSION['MaxLength'] = "Informe um valor menor ou igual a 30!";
	}


	function NomeError($nome)
	{
		if(strlen($nome) === 0 || strlen($nome) < 0)
		{
			$_SESSION['NomeErrorZero'] = "Informe um nome maior que 0!";
			return false;
		}
		else if(empty($nome) || is_null($nome))
		{
			$_SESSION['NomeErrorNull'] = "Informe um nome!";
			return false;
		}
		else if(strlen($nome) > 30)
		{
			$_SESSION['NomeErrorMaxLength'] = "Informe um nome menor que 30 carecters!";
			return false;
		
		}
		else
		{
			return true;
		}
	}

	function SenhaError($senha)
	{
		if(strlen($senha) === 0 || strlen($senha) < 0)
		{
			$_SESSION['SenhaErrorZero'] = "Informe uma senha maior que 0!";
			return false;
		
		}
		else if(empty($senha) || is_null($senha))
		{
			$_SESSION['SenhaErrorNull'] = "Informe uma senha!";
			return false;
		}
		else if(strlen($senha) > 32)
		{
			$_SESSION['SenhaErrorMaxLength'] = "Informe uma senha menor que 30 carecters!";
			return false;
		
		}
		else
		{
			return true;
		}
	}

	function EnderecoError($endereco)
	{
		if(strlen($endereco) === 0 || strlen($endereco) < 0)
		{
			$_SESSION['EnderecoErrorZero'] = "Informe um endereco maior que 0!";
			return false;
		
		}
		else if(empty($endereco) || is_null($endereco))
		{
			$_SESSION['EnderecoErrorNull'] = "Informe um endereco!";
			return false;
		}
		else if(strlen($endereco) > 30)
		{
			$_SESSION['EnderecoErrorMaxLength'] = "Informe um endereco menor que 30 carecters!";
			return false;
		
		}
		else
		{
			return true;
		}
	}

	function EmailError($email)
	{
		include('conexao.php');

		$query = "select email from voluntarioevento where email = '$email'";

		if(!empty($conexao2->query($query)))
		{
			$_SESSION['EmailErrorExist'] = "Email já existe cadastrado!";
			return false;
		}
		else if(strlen($email) === 0 || strlen($email) < 0)
		{
			$_SESSION['EmailErrorZero'] = "Informe um email maior que 0!";
			return false;
		
		}
		else if(empty($email) || is_null($email))
		{
			$_SESSION['EmailErrorNull'] = "Informe um email!";
			return false;
		}
		else if(strlen($email) > 30)
		{
			$_SESSION['EmailErrorMaxLength'] = "Informe um email menor que 30 carecters!";
			return false;
		
		}
		else
		{
			return true;
		}
	}


	
	function CPFError($cpf)
	{
		if(strlen($cpf) === 0 || strlen($cpf) < 0)
		{
			$_SESSION['CPFErrorZero'] = "Informe um CPF Maior que 0!";
			return false;
		}		
		else if (empty($cpf) || is_null($cpf))
		{
			$_SESSION['CPFErrorNull'] = "Informe um cpf!";
			return false;
		}
		else if(strlen($cpf) > 11)
		{
			$_SESSION['CPFErrorMaxLength'] = "Informe um CPF menor que 11";
			return false;
		}
		else if(strlen($cpf) < 11)
		{
			$_SESSION['CPFErrorMinLength'] = "Informe um CPF igual a 11 digitos";
			return false;
		}
		else
		{
			return true;
		}
	}

	function CPFExistente()
	{
		$_SESSION['CPFExistente'] = "CPF já cadastrado!";
	}

	function ErroCPF()
	{
		$_SESSION['ErroCPF'] = "CPF Inválido!";
	}

	function RGError($rg)
	{
		include('conexao.php');

		$query = "select rg from voluntarioevento where rg = '$rg'";

		if(!empty($conexao2->query($query)))
		{
			$_SESSION['RGErrorExist'] = "RG já existe cadastrado!";
			return false;
		}
		else if(strlen($rg) === 0 || strlen($rg) < 0)
		{
			$_SESSION['RGErrorZero'] = "Informe um RG maior que 0 caracteres";
			return false;
		}
		else if(empty($rg) || is_null($rg))
		{
			$_SESSION['RGErrorNull'] = "Informe um RG!";
			return false;
		}
		else if(strlen($rg) > 9)
		{
			$_SESSION['RGErrorMaxLength'] = "Informe um RG menor que 9 digitos";
			return false;
		
		}
		else if(strlen($rg) < 9)
		{
			$_SESSION['RGErrorMinLength'] = "Informe um RG igual a 9 digitos";
			return false;
		}
		else if(strlen($rg) === 9)
		{
			return true;
		}
	}

	function TipoError($tipo)
	{
		if(($tipo != 'V' || $tipo != 'G' || $tipo != 'A'))
		{
			return true;
		}
		else if($tipo != 'V' || $tipo != 'G' || $tipo != 'A')
		{
			$_SESSION['TipoError'] = "Tipo Invalido!";
			return false;
		}
		else if(empty($tipo) || is_null($tipo))
		{
			$_SESSION['TipoErrorNull'] = "Informe um tipo!";
			return false;
		}
		else if(strlen($tipo) < 0 || strlen($tipo) === 0)
		{
			$_SESSION['TipoErrorZero'] = "Informe um Tipo maior que 0 carecteres!";
			return false;
		}
		else if(strlen($tipo) > 1)
		{
			$_SESSION['TipoErrorMaxLength'] = "Informe somente uma letra";
			return false;
		}
		else 
		{
			return true;
		}
	}

	// Table Evento

	function CodigoError($codigo)
	{
		if(strlen($codigo) === 0 || strlen($codigo) < 0)
		{
			$_SESSION['CodigoErrorZero'] = "Informe um codigo maior que 0 caracteres";
			return false;
		}
		else if(empty($codigo) || is_null($codigo))
		{
			$_SESSION['CodigoErrorNull'] = "Informe um codigo!";
			return false;
		}
		else if(strlen($codigo) > 5)
		{
			$_SESSION['CodigoErrorMaxLength'] = "Informe um codigo menor que 5 digitos";
			return false;
		}
		else
		{
			return true;
		}
	}

	// Table VoluntarioEvento

	function TituloError($titulo)
	{
		if(strlen($titulo) === 0 || strlen($titulo) < 0)
		{
			$_SESSION['TituloErrorZero'] = "Informe um titulo maior que 0 caracteres";
			return false;
		}
		else if(empty($titulo) || is_null($titulo))
		{
			$_SESSION['TituloErrorNull'] = "Informe um titulo!";
			return false;
		}
		else if(strlen($titulo) > 40)
		{
			$_SESSION['TituloErrorMaxLength'] = "Informe um titulo menor que 9 digitos";
			return false;
		}
		else
		{
			return true;
		}
	}

	function DataError($data)
	{
		if(strlen($data) === 0 || strlen($data) < 0)
		{
			$_SESSION['DataErrorZero'] = "Informe uma data tem que ser maior que 0 caracteres";
			return false;
		}
		else if(empty($data) || is_null($data))
		{
			$_SESSION['DataErrorNull'] = "Informe uma data!";
			return false;
		}
		else
		{
			return true;
		}
	}

	function DescricaoError($descricao)
	{
		if(strlen($descricao) === 0 || strlen($descricao) < 0)
		{
			$_SESSION['DescricaoError'] = "Informe uma descricao tem que ser maior que 0 caracteres";
			return false;
		}
		else if(empty($descricao) || is_null($descricao))
		{
			$_SESSION['DescricaoErrorNull'] = "Informe uma descricao!";
			return false;
		}
		else
		{
			return true;
		}
	}


?>