<!DOCTYPE html>
<html lang="en">

<head>
<?php

 session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['login'];

?>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="tail.select-bootstrap4.css" rel="stylesheet" />


    <title>Chance</title>

    <!-- links para css dos cards do blog -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/styles-card.css" rel="stylesheet" />


</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top py-3" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <img src="../assets/img/navimg.png" alt="">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">BEM VINDO <?= strtoupper($_SESSION['login'])?>!</a></li>
               
                </ul>
                <div class="ml-auto my-2 my-lg-0 ">
                    <div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
                        <div class="widget BlogSearch" data-version="2" id="BlogSearch1">
                            <form action="logout.php"  class="form-inline ">
                                <button type="submit" class="btn btn-dark" >
                                    Logout
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
              
          


            </div>
        </div>
    </nav>


 
 
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                   <img src="../assets/img/bg.png" class="primary"/>
                   <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">A plataforma de resolução de desafios!</br>
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Veja os desafios!</a>
                </div>
            </div>
        </div>
    </header>
 
 
    <!-- BLOG SECTION -->
    <section id="blog" class="page-section bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Treine com os nossos desafios iniciais da sua área!</h2>

            <p>Aqui você encontra desafios propostos pela platforma para que você se familiarize conosco</p>

        </div>
    </section>

    <div class="container" id="blog">
        <section>

            <div class="container  ">
                <div class="row ">
                    <?php

                    require '../treino/cards.php';

                    ?>

        </section>
        <hr class="divider my-4" />

    </div>
    <!-- Contact-->
    <section id="blog" class="page-section bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Veja os desafios REAIS propostos pelas empresas!</h2>

            <p>Monte o seu grupo e aventure-se em nossos desafios</p>

        </div>
    </section>

    <div class="container" id="blog">
        <section>

            <div class="container  ">
                <div class="row ">
                    <?php

                    require '../desafio/cards.php';

                    ?>

        </section>
        <hr class="divider my-4" />

    </div>

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Desenvolvido por Murilo Amaral</div>
        </div>
        <div class="container">
            <div class="small text-center text-muted">devmuamaral@gmail.com</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->


    <script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- scrips do card blog -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>