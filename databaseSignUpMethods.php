<?php 
	
	function CadastrarPublica($nome, $email, $senha, $endereco, $cpf, $rg, $tipo)
	{

		include('conexao.php');
		include('cpf.php');
		include('messagesErrors.php');
		include('passwordValidator.php');

		if(CPF($cpf))
		{
		  $queryCPF = "select cpf from usuario where cpf = '$cpf'";

		  if (!empty($conexao->query($queryCPF))) 
		  {
		  	if(NomeError($nome))
		  	{
			    if(EnderecoError($endereco))
			    {
			    	if(SenhaError($senha))
			    	{
			    		if(CPFError($cpf))
			    		{
			    			if(RGError($rg))
			    			{
		    					if(EmailError($email))
		    					{
		    						$senhaCriptografada = EncryptPasswordValidatorMD5($senha);

			    					$query = "INSERT into usuario (nome, email, senha, endereco, cpf, rg, tipo) VALUES ('$nome', '$email', '$senhaCriptografada', '$endereco', '$cpf', '$rg', '$tipo')";

								    if ($conexao->query($query) === TRUE) 
								    {
								      	SucessoCadastro();
								      	header('Location: index.php');
								      	exit();
								    } 
								    else 
								    {
								      	ErroComum();
								      	header('Location: cadastrar.php');
								      	exit();
								    }
								}
								else
								{
									header('Location: cadastrar.php');
									exit();
								}
			    			}
			    			else
			    			{
			    				header('Location: cadastrar.php');
			    				exit();
			    			}
			    		}
			    		else
			    		{
			    			header('Location: cadastrar.php');
			    			exit();
			    		}
			    	}
			    	else
			    	{
			    		header('Location: cadastrar.php');
			    		exit();
			    	}
			    }
			    else
			    {
			    	header('Location: cadastrar.php');
			    	exit();
			    }
			}
			else
			{
				header('Location: cadastrar.php');
			    exit();
			}	
		  }
		  else
		  {
		    CPFExistente();
		    header("Location: cadastrar.php ");
		    exit();
		  }
		}
		else
		{
		  ErroCPF();
		  header("Location: cadastrar.php");
		  exit();
		}

		$conexao->close();
	}

	function CadastrarPrivado($nome, $email, $senha, $endereco, $cpf, $rg, $tipo)
	{
		include('conexao.php');
		include('cpf.php');
		include('messagesErrors.php');
		include('passwordValidator.php');

		if(isset($_SESSION['Logado']))
	    {
	        if(isset($_SESSION['GerenteLogin']))
	        {
			    if(CPF($cpf))
				{
				  $queryCPF = "select cpf from usuario where cpf = '$cpf'";

				  if (!empty($conexao->query($queryCPF))) 
				  {
				  	if(NomeError($nome))
				  	{
					    if(EnderecoError($endereco))
					    {
					    	if(SenhaError($senha))
					    	{
					    		if(CPFError($cpf))
					    		{
					    			if(RGError($rg))
					    			{
					    				if(TipoError($tipo))
					    				{
					    					if(EmailError($email))
					    					{

					    						$senhaCriptografada = EncryptPasswordValidatorMD5($senha);

						    					$query = "INSERT into usuario (nome, email, senha, endereco, cpf, rg, tipo) VALUES ('$nome', '$email', '$senhaCriptografada', '$endereco', '$cpf', '$rg', '$tipo')";

											    if ($conexao->query($query) === TRUE) 
											    {
											        SucessoCadastro();
											      	header('Location: dashboard.php');
											      	exit();
											    } 
											    else 
											    {
											      	ErroComum();
											      	header('Location: dashboard.php');
											      	exit();
											    }
											}
											else
											{
												header('Location: dashboard.php');
												exit();
											}
					    				}
					    				else
					    				{
					    					header('Location: dashboard.php');
					    					exit();
					    				}
					    			}
					    			else
					    			{
					    				header('Location: dashboard.php');
					    				exit();
					    			}
					    		}
					    		else
					    		{
					    			header('Location: dashboard.php');
					    			exit();
					    		}
					    	}
					    	else
					    	{
					    		header('Location: dashboard.php');
					    		exit();
					    	}
					    }
					    else
					    {
					    	header('Location: dashboard.php');
					    	exit();
					    }
					}
					else
					{
						header('Location: dashboard.php');
					    exit();
					}	
				  }
				  else
				  {
				    CPFExistente();
				    header("Location: dashboard.php ");
				    exit();
				  }
				}
				else
				{
				  ErroCPF();
				  header("Location: dashboard.php");
				  exit();
				}
	        }
	        else
	        {
	        	header('Location: dashboard.php');
	        	exit();
	        }
	    }
	    else
	    {
	      header("Location: login.php");
	      exit();
	    }
		

	    $conexao->close();
	}

	function ExcluirSignUp($cpf)
	{
		include('conexao.php');
		include('messagesErrors.php');

		$queryDeletar = "DELETE FROM usuario WHERE cpf = '$cpf'";
		$result = $conexao->query($queryDeletar);

		if (!empty($result)) 
		{
		  // Sucesso

			if(CPFError($cpf))
			{
				SucessoExcluir();
				header("Location: dashboard.php");
				exit();
			}
			else
			{
				header('Location: dashboard.php');
				exit();
			}
		} 
		else 
		{
		  // Erro
			ErroComum();

		    header("Location: dashboard.php");
		    exit();
		}
		$conexao->close();
	}

	function ConsultarSignUp()
	{
		include('conexao.php');
		include('messagesErrors.php');


		$queryConsultar = "select * from usuario";
		$dado = $conexao->query($queryConsultar);
		
		if(!empty($dado))
		{
			return $dado;
		}
		else
		{
			ErroComum();
		}

		$conexao->close();
	}

	function ConsultarSignUpCPF($cpf)
	{
		include('conexao.php');

		$queryConsultar = "select * from usuario where cpf = '$cpf'";
		$dado = mysqli_fetch_array($conexao->query($queryConsultar));
		
		if(!empty($dado))
		{
			return $dado;
		}
		else
		{	
			// exception
		}

		$conexao->close();
	}

?>