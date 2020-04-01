<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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

	<div class="container">
	    <div class="card card-6">
	        <div class="form-margin">
				<form style="margin: 40px;" class="" method="post" action="libCadastrar.php">
					<h1>Cadastro Usuário</h1>
					<br/>
				    <div class="form-group">
				     <label for="exampleInputEmail1"><b>Nome</b></label>
				     <input type="text" class="form-control" name="nome" aria-describedby="emailHelp">
				    </div>
				    <div class="form-group">
				     <label for="exampleInputEmail1"><b>Email</b></label>
				     <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
				    </div>
				    <div class="form-group">
				     <label for="exampleInputEmail1"><b>Senha</b></label>
				     <input type="password" class="form-control"  name="senha" aria-describedby="emailHelp">
				    </div>
				    <div class="form-group">
				     <label for="exampleInputEmail1"><b>Endereço</b></label>
				     <input type="text" class="form-control"  name="endereco" aria-describedby="emailHelp">
				    </div>
				    <div class="form-group">
				     <label for="exampleInputEmail1"><b>CPF</b></label>
				     <input type="text" class="form-control"  name="cpf" aria-describedby="emailHelp">
				    </div>
				    <div class="form-group">
				     <label for="exampleInputEmail1"><b>RG</b></label>
				     <input type="text" class="form-control"  name="rg" aria-describedby="emailHelp">
				    </div>
				    <div class="form-group">
				     <label for="exampleInputEmail1"><b>Tipo</b></label>
				     <input type="text" class="form-control"  name="tipo" >
				     <br/>
				     <p><b>V para Voluntário <br/>G para Gerente <br/>A para Administrador</b></p>
				    </div>
					
				    <input type="hidden" class="form-control"  name="dashboard" value="FULL">
				    <input type="hidden" class="form-control"  name="cadastroLogin" value="">
					<button type="submit" class="btn btn_roxo text-color"><b>Cadastrar</b></button>
				    
					<br/>
				</form>
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


