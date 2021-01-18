<?php
require 'conn.php';

$idPost = $_POST['id'];

$stmt = $db->prepare("SELECT FROM tb_blog where id = '$idPost'  ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWELL BLOG</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <style></style>
</head>

<body>
    <div class="section" id="b-section-header" name="Header">
        <div class="widget Header" data-version="2" id="Header1">
            <div class="header image-placement-behind no-image mb-5">
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">SWELLCOMPANY</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfólio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contato</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#blog">Blog Swell</a></li>
                </ul>
                <div class="ml-auto my-2 my-lg-0 ">
                    <div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
                        <div class="widget BlogSearch" data-version="2" id="BlogSearch1">
                            <form action="login.php" class="form-inline ">
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#loginModal">
                                    Login 
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>


 <!-- Modal Login -->
 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  " role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Login de usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="login-blog.php" method="POST">
                            <div class="form-group">
                                <label for="titulo">Login</label>
                                <input name="login" type="text" class="form-control" id="id_login" aria-describedby="loginPost" placeholder="Digite seu login">
                            </div>
                            <div class="form-group">
                                <label for="categoria">senha</label>
                                <input name="senha" type="password" class="form-control" id="id_senha" placeholder="Digite sua senha">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
       


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8 mt-4">

                <h1 class="my-4 mb-5">Bem-Vindo ao nosso Blog <br>
                    <small>Aqui você acompanha Swell de pertinho</small>
                </h1>

                <!-- Blog Post -->


<?php
foreach ($linhas as $row) {
    ?>
        <h1 class="card-title "><?= $row['titulo'] ?></h1>

        <div id="<?= $row['titulo'] ?>" class="card mb-4 mt-4">
            
        

        
            <img class="card-img-top" src="<?= $row['img_link'] ?>" alt="Card image cap">
            <div class="card-body">
              
                <h3 class="card-title"><?= $row['categoria'] ?></h3>
                <p class="card-text"><?= $row['mensagem'] ?></p>
            </div>
            <div class="card-footer text-muted">
                <p>Postado em: <?= $row['post_data'] ?> </p>

                <!-- EDIT Modal -->

            
               

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
                <div class="card my-3 mt-5 ">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body align-items-center justify-content-sm-center">
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <ul class="list-unstyled mb-0 ">
                                    <?php

                                    require 'conn.php';


                                    $stmt = $db->prepare("SELECT DISTINCT titulo FROM tb_blog");

                                    $stmt->execute();

                                    $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($linhas as $row) {


                                    ?>


                                        <li>
                                            <a href="<?= "#" . $row['titulo'] ?>"><?= $row['titulo'] ?> </a>

                                        </li>
                                    <?php }  ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- PROPAGANDAS AQUI Widget -->
         <!-- PROPAGANDAS AQUI Widget -->
         <div class="card my-4">
            <h4 class="card-header">PROMOÇÃO</h4>
           <?php

            require'./promo/get-promo.php';
        foreach ($linhas as $row) {
            ?>
            
            <div class="card-body">
            
        
    
        <h4><?=$row['titulo']?></h4>
            <p><?=$row['descricao']?></p>
            
            <img     class="card-img-top" src="promo/<?=$row['img_link']?>" alt="Card image cap">
            <a href="<?=$row['wpp_link']?>" target="_blank">link do whatsapp para a promoção</a>
            </div>

            <?php
                } ?>

          </div>       </div>



                <!-- Bootstrap core JavaScript -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>


