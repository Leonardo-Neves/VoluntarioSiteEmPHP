<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		
		.form-margin {
			margin: 30px;
		}

		.btn_roxo {
        background-color: #352961;
	    }
	    .text-color {
	      color: white;
	    }


	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="card card-2">
			<div class="form-margin">
				<div class="row">
					<div class="col-6">
						<h3>Excluir Evento</h3>
						<br/>
						<p>Exclua eventos. Copie o código do evento e cole nesse campo.</p>
						<form method="post" action="libDashboardExcluir.php">
			                <div class="form-group row">
				                <div class="col-md-12">
				                    <input type="text" class="form-control" name="codigo" placeholder="Codigo ...">
				                </div>
				            </div>
			                <div class="form-group row">
			                    <div class="col-md-12">
			                        <button type="submit" class="btn btn_roxo text-color "><b>Enviar código</b></button>
			                	</div>
			            	</div>
			            </form>
		            </div>

		            <div class="col-6">
		            	<h3>Alterar Evento</h3>
						<br/>
						<p>Altere informações sobre os eventos que vão acontecer.</p>
			            <form method="post" action="dashboardAlterar.php">
			                <div class="form-group row">
			                    <div class="col-md-12">
			                        <button type="submit" class="btn btn-primary btn_roxo text-color"><b>Alterar</b></button>
			                	</div>
			            	</div>
			            </form>
		        	</div>
	        	</div>
            </div>
		</div>
		<br/>
		<div class="card card-6">
			
			<div class="form-margin">
				<?php 
            if(isset($_SESSION['ErroConsulta']))
            {
              $ErroConsulta = $_SESSION['ErroConsulta'];
          	?>

            <p><?php echo $ErroConsulta ?></p>

            <?php 
              }
            ?>
				<h3>Eventos</h3>
				<br/>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Título</th>
				      <th scope="col">Data</th>
				      <th scope="col">Endereço</th>
				      <th scope="col">Código</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php 
			  		session_start();
		  			include('databaseEventMethods.php');

		  			$result = Consultar();
			  		
				  	while($dado = mysqli_fetch_array($result)) 
				  	{?>

				    <tr>
				      <th scope="row"><?php echo $dado['id_voluntario'] ?></th>
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

	<script type="text/javascript">
		
		$('#btn_alterar').click(function() {
      $.ajax({ 
        url: 'dashboardAlterar.php',
        method: "get",
        success: function(data) {
          $('#acoes').html(data);
        }
      })
    });
	</script>

</body>
</html>
