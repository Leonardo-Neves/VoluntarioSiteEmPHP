<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seja Voluntário</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css">

    	.section 
    	{
    		height: 800px;
    	}

    	.marginTable {
    		margin-bottom: 100px;
    	}

    	.contentMain 
    	{
    		margin-top: 50px;
    		text-align: center;
    	}
    	.btn_roxo {
    		background-color: #352961;
    	}
    	.text {
    		text-decoration: white;
    	}
    	.form-margin {
    		margin: 50px;
    	}
    	tr {
    		padding-top: 20px;
    		padding-bottom: 20px;
    	}
    	.background {
    		background-color: #EDDEDA;
    	}

    </style>

</head>
<body class="background">

    <header class="masthead text-center text-white shadow-lg">
        <div class="">
            <div class="container">

            	<h1 class="masthead-heading mb-0">Seja Voluntário</h1>
                <h3 class="">Nós sempre estamos precisando de ajuda, se inscreva e venha conosco fazer esse trabalho lindo.</h3>
                <br>
                <br>
                <br>
                <br>
                <img class="img-fluid rounded-pill" src="images/13089.jpg" alt="">
         

                
            </div>
        </div>
    </header>

    <div class="container">
    	<?php 
    	session_start();
    	if(isset($_SESSION['VoluntarioLogin']))
    	{?>
    		<br>
    		<br>

    		<?php

            include('showMessageError.php');

            ?>

    		<div class="card card-2 shadow-lg">

    			
				<div class="form-margin">
					<div class="row">
						<div class="col-6">
							<h3>Voluntariar-se</h3>
							<br/>
							<p>Insira o código do evento para se voluntáriar ...<br><br>Após o cadastro, você receberá um e-mail com as informações da vaga.</p>
							<form method="post" action="sendingEmail.php">
				                <div class="form-group row">
					                <div class="col-md-12">
					                    <input type="text" class="form-control" name="codigo" placeholder="Codigo ...">
					                </div>
					            </div>
					            <input type="hidden" name="cadastrandoUsuarioNoEvento" value="FULL">
				                <div class="form-group row">
				                    <div class="col-md-6">
				                        <button type="submit" class="btn btn-primary ">Enviar</button>
				                	</div>

                   
				            	</div>
				            </form>
				        </div>    
			        </div>
	        	</div>
            </div>
		
    		<br>
    		<div class="section">
	    		<div class="card card-6 shadow-lg ">
				
					<div class="form-margin">				
						<h3>Eventos</h3>
						<br/>
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Título do Evento</th>
						      <th scope="col">Data do Evento</th>
						      <th scope="col">Endereço do Evento</th>
						      <th scope="col">Código do Evento</th>
						    </tr>
						  </thead>
						  <tbody>

						  	<?php 
					  		
				  			include('databaseEventMethods.php');

				  			$result = Consultar();
					  		
						  	while($dado = mysqli_fetch_array($result)) 
						  	{?>

						    <tr>
						      <td><?php echo $dado['titulo'] ?></td>
						      <td><?php echo $dado['data'] ?></td>
						      <td><?php echo $dado['endereco'] ?></td>
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
			
    	<?php  
    	}

    	if(!isset($_SESSION['VoluntarioLogin']) || isset($_SESSION['GerenteLogin']) || isset($_SESSION['AdministradorLogin'])) 
    	{?>
    		<div class="section">
		    	<div class="contentMain">
			    	<h2>A ajuda de todos é bem vinda, temos diversas oportunidades de voluntariado, que se abrange por varias areas e serviços.</h2>
			    	<br>
			    	<img class="img-fluid rounded-pill" src="images/volun.jpg" alt="">
			    	<br>
			    	<br>
			    	<h2>O Objetivo de nossos voluntário é ajuda nosso asilo a dar uma melhor qualidade de vida para nossas pessoas da boa idade que já ofereceram muito durante sua vida, e hoje precisam de nossos cuidados mais do que especias. </h2>
			    	<br>
			    	<a class="btn btn_roxo" href="login.php">Faça parte !</a><br>
			    	<br>
			    	<small>Se caso não tenha se cadastro ainda e nosso sistema, faça o cadastro e junte-se a nós ...</small>
			    	<br>
			    	<br>
			    	<br>
			    	<br>
		    	</div>
			</div>

    	<?php  
    	}?>
   	</div>
   
</body>
</html>