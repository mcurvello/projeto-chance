<?php
require '../conn.php';

$idPost = $_POST['id'];

$stmt = $db->prepare("SELECT * FROM tb_treino where id = '$idPost'  ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);


session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$logado = $_SESSION['login'];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!------ Include the above in your HEAD tag ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../user/index.php">BEM VINDO <?= strtoupper($_SESSION['login']) ?>!</a></li>

                </ul>
                <div class="ml-auto my-2 my-lg-0 ">
                    <div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
                        <div class="widget BlogSearch" data-version="2" id="BlogSearch1">
                            <form action="logout.php" class="form-inline ">

                                <button type="submit" class="btn btn-dark">
                                    Logout
                                </button>

                            </form>

                        </div>

                    </div>
                </div>




            </div>
        </div>
    </nav>





    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8 mt-4">

                <h1 class="my-4 mb-5"><br>
                    <small></small>
                </h1>

                <!-- Blog Post -->


                <?php
                foreach ($linhas as $row) {
                ?>
                    <h1 class="card-title "><?= $row['titulo'] ?></h1>

                    <div id="<?= $row['titulo'] ?>" class="card mb-4 mt-4">




                        <img class="card-img-top" src="../desafio/<?= $row['img_link'] ?>" alt="Card image cap">
                        <div class="card-body">

                            <h3 class="card-title"><?= $row['tema'] ?></h3>
                            <p class="card-text"><?= $row['descricao'] ?></p>
                        </div>

                        <div class="card-footer text-muted">
                            <h5 class="card-title">Vaga: <?= $row['vaga'] ?></h5>

                            <p>Prazo para: <?= $row['data_entrega'] ?> </p>




                        </div>
                    </div>



                    <section class="page-section bg-primary br-6" id="about">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <h2 class="text-white mt-0">Inicie o seu desafio</h2>
                                    <hr class="divider light my-2" />
                                    <p class="text-light mb-4">Se preferir, realize um dos cursos patrocinados da plataforma
                                        </br>
                                        A plataforma tem diversos parceiros, por isso você nunca fica desamparado quando o assunto é CONTEÚDO
                                    </p>
                                    <a class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#modalExemplo" href="#criar">INICIAR DESAFIO</a>
                                </div>
                            </div>
                        </div>
                    </section>


<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Parabéns! </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      O desafio foi colocado na sua lista de desafios
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
                   
                <?php
                } ?>

                <!-- FOOTER -->
                <footer class="bg-light py-5">
                    <div class="container">
                        <div class="small text-center text-muted">Desenvolvido por Murilo Amaral</div>
                    </div>
                    <div class="container">
                        <div class="small text-center text-muted">devmuamaral@gmail.com</div>
                    </div>
                </footer>
            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->

                <!-- Categories Widget -->
                <div class="card my-3 mt-5 invisible">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body align-items-center justify-content-sm-center">
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <ul class="list-unstyled mb-0 ">
                                    <?php

                                    require '../conn.php';


                                    $stmt = $db->prepare("SELECT 8 FROM FROM tb_grupo");

                                    $stmt->execute();

                                    $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($linhas as $row) {


                                    ?>


                                        <li>
                                            <a href="<?= "#" . $row['titulo'] ?>"><?= $row['nome'] ?> </a>

                                        </li>
                                    <?php }  ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- PROPAGANDAS AQUI Widget -->
                <!-- PROPAGANDAS AQUI Widget -->
                <div class="card my-6">
                    <h4 class="card-header">Cursos recomendados para este desafio</h4>
                    <?php

                    require '../conn.php';


                    $stmt = $db->prepare("SELECT * FROM tb_cursos");

                    $stmt->execute();

                    $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($linhas as $row) {


                    ?>


                        <div class="card-body">



                            <h4><?= $row['titulo'] ?></h4>
                            <p>Parceria: <?= $row['parceiro'] ?></p>

                            <img class="card-img-top" src="<?= $row['img_link'] ?>" alt="Card image cap">
                            <p><?= $row['descricao'] ?></p>
                        </div>

                    <?php
                    } ?>

                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>