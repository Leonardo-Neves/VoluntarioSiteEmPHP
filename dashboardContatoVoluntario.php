<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		
		.form {
			margin: 40px;
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
	<div class="container">
		<div class="card card-6">
			<div class="form">
				<h1>Contato Voluntário</h1>
				<br/>
				<form method="post" action="sendingEmail.php">
	              <div class="form-group row">
	                <div class="col-md-12">
	                  <input type="text" class="form-control" name="assunto" placeholder="Assunto">
	                </div>
	              </div>

	              <div class="form-group row">
	                <div class="col-md-12">
	                  <input type="email" class="form-control" name="email" placeholder="Email">
	                </div>
	              </div>
	              <div class="form-group row">
	                <div class="col-md-12">
	                  <textarea class="form-control" id="" cols="30" rows="10" name="mensagem" placeholder="Escreva sua mensagem ..."></textarea>
	                </div>
	              </div>

	              <input type="hidden" name="contatoCliente" value="FULL">

	              <div class="form-group row">
	                <div class="col-md-6">
	                  <button type="submit" class="btn btn_roxo text-color py-3 px-5 btn-block" value="Enviar mensagem"><b>Enviar mensagem</b></button>
	                </div>
	              </div>

	            </form>
            </div>
		</div>
	</div>
</body>
</html>