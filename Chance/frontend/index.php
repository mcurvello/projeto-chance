<!DOCTYPE html>
<html lang="en">

<head>


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
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles-card.css" rel="stylesheet" />


</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top py-3" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <img src="assets/img/navimg.png" alt="">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">

                </ul>
                <div class="ml-auto my-2 my-lg-0 ">
                    <div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
                        <div class="widget BlogSearch" data-version="2" id="BlogSearch1">
                            <form action="" class="form-inline ">
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginModal">
                                    Login Empresa
                                </button>
                            </form>
                        </div>

                    </div>
                </div>



                <div class="section ml-1" id="b-section-navbar-search-form" name="Navbar: search form">
                    <div class="widget BlogSearch" data-version="2" id="BlogSearch1">
                        <form action="" class="form-inline ">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginEstudante">
                                Login Estudante
                            </button>
                        </form>
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
                    <form action="login/loginCompany.php" method="POST">
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

    </div> <!-- Modal Login Estudante-->
    <div class="modal fade" id="loginEstudante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  " role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Login de usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login/login.php" method="POST">
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
    <!-- Modal Cadastro Empresa-->
    <div class="modal fade" id="cadastroEmpresaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  " role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Bem-Vindo Empresa!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="cadastro/company.php" method="POST">
                        <div class="form-group">
                            <label for="titulo">Novo Login</label>
                            <input name="login" type="text" class="form-control" id="id_nome" aria-describedby="nomePost" placeholder="Digite seu login">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Nova Senha</label>
                            <input name="senha" type="password" class="form-control" id="id_nome" aria-describedby="nomePost" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Nome</label>
                            <input name="nome" type="text" class="form-control" id="id_nome" aria-describedby="nomePost" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Email</label>
                            <input name="email" type="text" class="form-control" id="id_senha" placeholder="example@email.com">
                        </div>

                        <div class="form-group">
                            <label for="categoria">CNPJ</label>
                            <input name="cnpj" type="text" class="form-control" id="id_senha" placeholder="000.000.000.00">
                        </div>
                        <label>Quais são as áreas de atuação dos desafios que pretende propor?</label>

                        <div class="form-group">
                            <label for="categoria">Interesse</label>
                            <input name="interesse1" type="text" class="form-control" id="id_senha" placeholder="example@email.com">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Interesse</label>
                            <input name="interesse2" type="text" class="form-control" id="id_senha" placeholder="example@email.com">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Criar Perfil</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <!-- Modal Cadastro Estudante-->
    <div class="modal fade" id="cadastroEstudanteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  " role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Bem-Vindo Aluno!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="cadastro/user.php" method="POST">
                        <div class="form-group">
                            <label for="titulo">Novo Login</label>
                            <input name="login" type="text" class="form-control" id="id_nome" aria-describedby="nomePost" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Nova Senha</label>
                            <input name="senha" type="password" class="form-control" id="id_nome" aria-describedby="nomePost" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Nome</label>
                            <input name="nome" type="text" class="form-control" id="id_nome" aria-describedby="nomePost" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Email</label>
                            <input name="email" type="text" class="form-control" id="id_senha" placeholder="example@email.com">
                        </div>
                        <label>Escolha 2 áreas do seu interesse</label>

                        <div class="form-group">
                            <label for="categoria">Interesse 1</label>
                            <input name="interesse1" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Interesse 2</label>
                            <input name="interesse2" type="text" class="form-control" placeholder="">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Criar Perfil</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <img src="assets/img/bg.png" class="primary" />
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">A plataforma de resolução de desafios!</br>
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Veja Mais</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-dark" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Entre em uma equipe e resolva um desafio!</h2>
                    <hr class="divider light my-4" />
                    <p class="text-light mb-4">O que a Chance proporciona é que você entenda quais são os desafios reais do mercado
                        </br>Além de dar todo o suporte com parcerias de cursos básicos até os avançados!
                    </p>
                    <button type="button" class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#cadastroEstudanteModal">
                        Cadastre-se Estudante!
                    </button>


                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">Nossos Parceiros</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="far fa-4x fa-building text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Empresas</h3>
                        <p class="text-muted mb-0">Empresas que acreditam em nosso propósito e proporcionam seus desafios REAIS!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="far fa-4x fa-address-card text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Você</h3>
                        <p class="text-muted mb-0">Você mesmo que sempre quis participar de uma equipe e nunca teve a oportunidade </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fab fa-4x fa-leanpub text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Empresas Educacionais</h3>
                        <p class="text-muted mb-0">Nossa plataforma conta com cursos gratuitos patrocinados por empresas de grande nome na área de educação e capacitação </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section id="blog" class="page-section bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Seja um apoiador do propósito Chance!</h2>

            <p>Se você acredita nos nossos sonhos de Educar e Capacitar, entre em contato e seja um Colaborador Chance</p>

            <button type="button" class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#cadastroEmpresaModal">
                Cadastre-se Empresa!
            </button>

        </div>
    </section>


    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Grupo Chance</div>
        </div>
        <div class="container">
            <div class="small text-center text-muted">Hackaton CCR 01/2021 - Grupo 137</div>
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