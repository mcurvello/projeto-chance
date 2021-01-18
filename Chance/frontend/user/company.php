<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chance</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">
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
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <img src="../assets/img/navimg.png" alt="">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../user/index.php">BEM VINDO <?= strtoupper($_SESSION['login'])?>!</a></li>
            
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
                


    <!-- Page Content -->
    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary item-align-right mt-5 visible" data-toggle="modal" data-target="#newPostModal">
            +New Post
        </button>



        <!-- Post Modal -->
        <div class="modal fade-in" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  " role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Nova Postagem</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../desafio/post.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input name="titulo" type="text" class="form-control" id="id_titulo" aria-describedby="tituloPost" placeholder="título da postagem">
                            </div>
                            <div class="form-group">
                                <label for="categoria">Tema</label>
                                <input name="tema" type="text" class="form-control" id="id_telefone" placeholder="Tema do desafio">
                            </div>
                            <div class="form-group">
                                <label for="">Descrição do desafio</label>
                                <textarea name="descricao" type="text-area" class="form-control" id="id_mensagem" placeholder="Escreva aqui a sua mensagem..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Vaga 1</label>
                                <textarea name="vaga1" type="" class="form-control" id="id_mensagem" placeholder="Escreva aqui as vagas aqui"></textarea>
                            </div><div class="form-group">
                                <label for="mensagem">Vaga 2</label>
                                <textarea name="vaga2" type="" class="form-control" id="id_mensagem" placeholder="Escreva aqui as vagas aqui"></textarea>
                            </div><div class="form-group">
                                <label for="mensagem">Vaga3</label>
                                <textarea name="vaga3" type="" class="form-control" id="id_mensagem" placeholder="Escreva aqui as vagas aqui"></textarea>
                            </div><div class="form-group">
                                <label for="mensagem">Vagas 4</label>
                                <textarea name="vaga4" type="" class="form-control" id="id_mensagem" placeholder="Escreva aqui as vagas aqui"></textarea>
                            </div><div class="form-group">
                                <label for="mensagem">Vaga 5</label>
                                <textarea name="vaga5" type="" class="form-control" id="id_mensagem" placeholder="Escreva aqui as vagas aqui"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Data de entrega</label>
                                <textarea name="data_entrega" type="text-area" class="form-control" id="id_mensagem" placeholder="Escreva aqui a sua mensagem..."></textarea>
                            </div>
                                <label for="mensagem">Link da Imagem</label>
                                <input name="img_link" type="file" class="" id="id_link" placeholder="Insira o link da sua imagem..." >
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Postar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
 
 
        <!-- Promo Modal -->
        <div class="modal fade-in" id="newPromoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  " role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Nova Promoção</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="promo/post-promo.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input name="titulo" type="text" class="form-control" id="id_titulo" aria-describedby="tituloPost" placeholder="título da postagem">
                            </div>
                            <div class="form-group">
                                <label for="categoria">Descrição</label>
                                <input name="descricao" type="text" class="form-control" id="id_descricao" placeholder="Assunto do post">
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Whatsapp Link da promoção</label>
                                <textarea name="wpp_link" type="text" class="form-control" id="id_mensagem" placeholder="Escreva aqui a sua mensagem..."></textarea>
                            </div>
                            
                            <label for="mensagem">Link da Imagem</label>
                                <input name="img_link" type="file" class="" id="id_link" placeholder="Insira o link da sua imagem..." >
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Postar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8 mt-4">

                <h1 class="my-4 mb-5">Bem-Vindo ao nosso Blog <br>
                    <small>Aqui você acompanha Swell de pertinho</small>
                </h1>

                <!-- Blog Post -->
                <!-- Carrega os posts para o admin -->
               
               <?php

                require '../conn.php';
                require '../desafio/getAll.php';

                ?>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">← Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer →</a>
                    </li>
                </ul>

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
            <div class="col-4">

                <!-- Search Widget -->

                <!-- Categories Widget -->
                <div class="card my-3 mt-5 invisible ">
                    <h5 class="card-header">Categorias</h5>
                    <div class="card-body align-items-center justify-content-sm-center">
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <ul class="list-unstyled mb-0 ">
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                  <!-- PROPAGANDAS AQUI Widget -->
                  <div class="card my-6 invisible">
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
          <!-- fim -->

            </div>



                </div>



                <!-- Bootstrap core JavaScript -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>