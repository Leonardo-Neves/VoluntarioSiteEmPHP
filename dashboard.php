<?php 
  session_start();

  if(!isset($_SESSION['Logado']))
  {
    header("Location: index.php");
    exit();
    session_destroy();  
  }

  if(isset($_SESSION['LogadoVoluntario']))
  {
    header("Location: index.php");
    exit();
    session_destroy();  
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <link href="vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style type="text/css">
      .btn_roxo {
        background-color: #352961;
      }
      .text-color {
        color: white;
        text-decoration: bold;
      }



  </style>
</head>

<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav btn_roxo sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        
        <div class="sidebar-brand-text mx-3">Dashboard</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Gerencimento
      </div>

      <!-- Cadastro Voluntario -->
      <?php  
      if(isset($_SESSION['GerenteLogin']))
      {?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#"  aria-expanded="true" aria-controls="collapseTwo" id="btn_cadastrar">
          <i class="fas fa-fw fa-cog"></i>
          <span><b>Cadastrar Usuários</b></span>
        </a>
      </li>
      <?php 
      }?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#"  aria-expanded="true" aria-controls="collapseTwo" id="btn_consultar">
          <i class="fas fa-fw fa-cog"></i>
          <span><b>Usuários</b></span>
        </a>
      </li>

      <!-- Seja Voluntario -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#"  aria-expanded="true" aria-controls="collapseTwo" id="btn_voluntarioCadastrar">
          <i class="fas fa-fw fa-cog"></i>
          <span><b>Cadastrar Eventos</b></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#"  aria-expanded="true" aria-controls="collapseTwo" id="btn_voluntarioEventos">
          <i class="fas fa-fw fa-cog"></i>
          <span><b>Eventos</b></span>
        </a>
      </li>

      <!-- Contato Voluntário -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#"  aria-expanded="true" aria-controls="collapseTwo" id="btn_contatoVoluntario">
          <i class="fas fa-fw fa-cog"></i>
          <span><b>Contato Voluntário</b></span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <!-- HEADER DA PAGINA -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <a style="padding: 0px 20px -10px 20px; margin: 10px;" class="btn btn_roxo text-color" href="logout.php" role="button"><b>Sair</b></a>

            <div class="topbar-divider d-none d-sm-block"></div>
            
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" style="margin-right: 5px; margin-left: 5px;" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php 
                if(isset($_SESSION['GerenteLogin']))
                {
                  $nome = $_SESSION['GerenteLogin'];
                }
                else if(isset($_SESSION['AdministradorLogin']))
                {
                  $nome = $_SESSION['AdministradorLogin'];
                }
                  

                ?> <b style="font-size: 20px;"><?php echo $nome ?></b></span>
                
              </a>
              
            </li>

          </ul>

        </nav>

        <!-- Conteudo Principal -->

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row">
            <div class="col col-12">
              <?php 
                include('showMessageError.php');
              ?>
            </div>
          </div>

          <?php 
            if(isset($_SESSION['SessaoInvalida']))
            {
              $SessaoInvalida = $_SESSION['SessaoInvalida'];
          ?>

              <p><?php echo $SessaoInvalida ?></p>

          <?php 
            unset( $_SESSION['SessaoInvalida'] );
            }
          ?>

          <?php 
            if(isset($_SESSION['GerenteRestricao']))
            {
              $GerenteRestricao = $_SESSION['GerenteRestricao'];
          ?>

              <p><?php echo $GerenteRestricao ?></p>

          <?php 
            unset( $_SESSION['GerenteRestricao'] );
            }
          ?>

          <div class=""></div>
            <div class="acoes" id="acoes"></div>          
          </div>
          


      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor2/jquery/jquery.min.js"></script>
  <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>

  <script type="text/javascript">
    $('#btn_cadastrar').click(function() {
      $.ajax({ 
        url: 'dashboardCadastrar.php',
        method: "get",
        success: function(data) {
          $('#acoes').html(data);
        }
      })
    });

    $('#btn_consultar').click(function() {
      $.ajax({ 
        url: 'dashboardConsultar.php',
        method: "get",
        success: function(data) {
          $('#acoes').html(data);
        }
      })
    });

    $('#btn_voluntarioCadastrar').click(function() {
      $.ajax({ 
        url: 'dashboardVoluntarioCadastrar.php',
        method: "get",
        success: function(data) {
          $('#acoes').html(data);
        }
      })
    });

    $('#btn_voluntarioEventos').click(function() {
      $.ajax({ 
        url: 'dashboardEventos.php',
        method: "get",
        success: function(data) {
          $('#acoes').html(data);
        }
      })
    });

    $('#btn_contatoVoluntario').click(function() {
      $.ajax({ 
        url: 'dashboardContatoVoluntario.php',
        method: "get",
        success: function(data) {
          $('#acoes').html(data);
        }
      })
    });

  </script>

</body>

</html>
