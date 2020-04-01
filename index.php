<?php 
//$_SESSION['VolutarioLogin'] = 'Leonardo';
//include('libLogin.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SEM NOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.php" class="text-uppercase">Amigos da Paz</a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="sejaVoluntario.php" class="nav-link">Seja Voluntário</a></li>
                <li><a href="#process-section" class="nav-link">Doar</a></li>

                <?php 
                session_start();
                if(isset($_SESSION['GerenteLogin']) || isset($_SESSION['AdministradorLogin']))
                {
                ?>
                  <li><a href="dashboard.php" class="nav-link">Dashboard</a></li>                
                <?php  
                }
                ?>

                <?php 
                
                if(isset($_SESSION['VoluntarioLogin']))
                {
                ?>
                  <li><a href="perfil.php" class="nav-link">Perfil</a></li>                
                <?php  
                }
                ?>
                
                
              </ul>
            </nav>
          </div>
            <?php 
            
            if(isset($_SESSION['VoluntarioLogin']) )
            {
              $nome = $_SESSION['VoluntarioLogin'];
            ?>

              <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                    <li><?php echo $nome ?></li>
                    <li class="cta"><a href="logout.php" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Sair</span></a></li>
                    </ul>
                </nav>
                <a href="" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
              </div>
            <?php 
            }
            else if(isset($_SESSION['GerenteLogin']))
            {
              $nome = $_SESSION['GerenteLogin'];
            ?>

              <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                    <li><?php echo $nome ?></li>
                    <li class="cta"><a href="logout.php" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Sair</span></a></li>
                    </ul>
                </nav>
                <a href="" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
              </div>
            <?php 
            }
            else if(isset($_SESSION['AdministradorLogin']) )
            {
              $nome = $_SESSION['AdministradorLogin'];
            ?>

              <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                    <li><?php echo $nome ?></li>
                    <li class="cta"><a href="logout.php" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Sair</span></a></li>
                    </ul>
                </nav>
                <a href="" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
              </div>
            <?php 
            }
            else
            {
            ?>
              <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                  <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                    <li><a href="cadastrar.php" class="nav-link">Cadastrar</a></li>
                    <li class="cta"><a href="login.php" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Login</span></a></li>
                  </ul>
                </nav>
                <a href="" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
              </div>
            <?php 
            }
            ?>

        </div>
      </div>
      
    </header>

    <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto" data-aos="fade-up">

            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">
                <h1>We Do Awesome Things</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="#" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1>Welcome</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="#" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1>High Quality Website Templates</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="#" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
              <div class="slide-text">
                <h1>We do things right.</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                <p><a href="#" target="_blank" class="btn btn-outline-light py-3 px-5">Get Started</a></p>
              </div>
            </div>

          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">
                        
            <div class="owl-carousel slide-one-item-alt">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
              <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    </div>

    <div class="site-section" id="contact-section"  data-aos="fade">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-md-5 order-1 order-md-2 mb-5 mb-md-0">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 mr-auto order-2 order-md-1">
            
            <h2 class="section-title mb-3">Contato</h2>
            <p class="mb-5">Alguma pergunta ? Mande um pergunta para a gente ...</p>
          
            <form method="post" action="sendingEmail.php">
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="assunto" placeholder="Nome e o Assunto">
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

              <input type="hidden" name="emailTeste" value="FULL">

              <div class="form-group row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Enviar mensagem">Enviar mensagem</button>
                </div>
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </div>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
    
  
  </body>
</html>