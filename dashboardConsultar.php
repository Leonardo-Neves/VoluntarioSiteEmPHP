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
            <h3>Excluir Usuários</h3>
            <br/>
            <p>Exclua usuários. Copie o cpf do usuário e cole nesse campo.</p>
            <form method="post" action="libDashboardUsuarioExcluir.php">
                      <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="cpf" placeholder="CPF ...">
                        </div>
                    </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn_roxo text-color "><b>Enviar o CPF</b></button>
                        </div>
                    </div>
                  </form>
                </div>

                <div class="col-6">
                  <h3>Alterar Evento</h3>
            <br/>
            <p>Altere informações sobre os usuários que vão acontecer.</p>
                  <form method="post" action="dashboardAlterar.php">
                      <div class="form-group row">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn_roxo text-color "><b>Alterar</b></button>
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
        <h3>Usuários</h3> 
        <br/>
        <h5>G - Gerente | A - Administrador | V - Voluntário</h5>
        <br/>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Senha</th>
              <th scope="col">Endereço</th>
              <th scope="col">CPF</th>
              <th scope="col">RG</th>
              <th scope="col">Tipo</th>
              
            </tr>
          </thead>
          <tbody>

            <?php 
              include('databaseSignUpMethods.php');

              $result = ConsultarSignUp();
              
              while($dado = mysqli_fetch_array($result)) 
              {?>

              <tr>
                <th scope="row"><?php echo $dado['id_usuario'] ?></th>
                <td><?php echo $dado['nome'] ?></td>
                <td><?php echo $dado['email'] ?></td>
                <td><?php echo $dado['senha'] ?></td>
                <td><?php echo $dado['endereco'] ?></td>
                <td><?php echo $dado['cpf'] ?></td>
                <td><?php echo $dado['rg'] ?></td>
                <td><?php echo $dado['tipo'] ?></td>
             
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
