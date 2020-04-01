<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		
		.margin {
			margin: 50px;
		}

		.margin

		.body {
    		background-color: #EDDEDA;
    	}

    	.btn_roxo {
    		background-color: #EDDEDA;
    	}

	</style>
</head>
<body style="background-color: #352961;">

	<div class="container">
		<br>
		<br>
		<br>
		<br>
		<div class="card card-6 mb-5">
			<div class="margin">
				
				<div class="row">
					<div class="col-12">

						<center><img class="rounded-circle" src="images/perfiImage.jpg"></center>
					</div>
				</div>
				<br/>

				<?php 
				session_start();
				include('databaseSignUpMethods.php');

				include('showMessageError.php');

				$dados = ConsultarSignUpCPF($_SESSION['CPFVoluntarioLogin']);
				
				?>
				<div class="row">
					<div class="col-6">
					    <label for="exampleInputEmail1"><b>Nome</b></label>
					    <input type="text" class="form-control" name="nome" placeholder=<?php echo $dados['nome'] ?> aria-describedby="emailHelp" disabled>
					</div>
					<div class="col-6">
						<label for="exampleInputEmail1"><b>Email</b></label>
					    <input type="email" class="form-control" name="email"placeholder=<?php echo $dados['email'] ?> aria-describedby="emailHelp" disabled>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-4">
					    <label for="exampleInputEmail1"><b>Endereço</b></label>
					    <input type="text" class="form-control"  name="endereco"placeholder=<?php echo $dados['endereco'] ?> aria-describedby="emailHelp" disabled>			
					</div>

					<div class="col-4">
					    <label for="exampleInputEmail1"><b>CPF</b></label>
					    <input type="text" class="form-control"  name="cpf"placeholder=<?php echo $dados['cpf'] ?> aria-describedby="emailHelp" disabled>	
					</div>

					<div class="col-4">
					    <label for="exampleInputEmail1"><b>RG</b></label>
					    <input type="text" class="form-control"  name="rg"placeholder=<?php echo $dados['rg'] ?> aria-describedby="emailHelp" disabled>	
					</div>
				</div>
				<form method="post" action="libPerfilUsuarioExcluir.php">
					<div class="form-group row">
	                  	<div class="col-md-12 mt-4">
	                      <button type="submit" class="btn btn_roxo text-color "><b>Excluir Conta</b></button>
	                	</div>
	                </div>
	                <div class="form-group row">
	                  	<div class="col-md-12 mt-4">
	                      <a href="index.php" class="btn btn_roxo text-color "><b>Voltar</b></a>
	                	</div>
	                </div>
                </form>
				<br>
				<h1>Eventos Cadastrados</h1>

				<table class="table">
		          <thead>
		            <tr>
		              <th scope="col">ID</th>
		              <th scope="col">Codigo</th>
		            </tr>
		          </thead>
		          <tbody>

		            <?php 
		              include('databaseSubmitVoluntierMethods.php');

		              $codigo = ConsultarEventoDoVoluntario($_SESSION['CPFVoluntarioLogin']);

		              
		              while($dado = mysqli_fetch_array($codigo)) 
		              {?>

		              <tr>
		                <td><?php echo $dado['codigo'] ?></td>
		              </tr>

		              <?php 
		            }
		        
		              ?>
		          </tbody>
		        </table>
	
			</div>
		</div>

	</div>

</body>
</html>

					   
