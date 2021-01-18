    <?php
    require 'conn.php';

    $stmt = $db->prepare("SELECT * FROM tb_blog ");

    $stmt->execute();
    $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($linhas as $row) {
        ?>

            <form action="delete-blog.php" class="d-flex justify-content-end" method="POST">
            <textarea name="id" class="invisible" cols="30" rows="1"><?= $row['id'] ?></textarea>

            <button class="btn btn-outline-danger" type="submit">Excluir Publicação </button>
            </form>
            <h1 class="card-title "><?= $row['titulo'] ?></h1>

            <div id="<?= $row['titulo'] ?>" class="card mb-4 mt-4">
                
            

            
                <img class="card-img-top" src="<?= $row['img_link'] ?>" alt="Card image cap">
                <div class="card-body">
                    <form action="set-blog-image.php" method="POST" enctype="multipart/form-data">
                    <input type="file"  name="img_link">
                    <textarea name="id" class="invisible" readonly ><?= $row['id'] ?></textarea> 
                    <button type="submit">Salvar</button>   

                    </form>
                    <h3 class="card-title"><?= $row['categoria'] ?></h3>
                    <p class="card-text"><?= $row['mensagem'] ?></p>
                </div>
                <div class="card-footer text-muted">
                    <p>Postado em: <?= $row['post_data'] ?> </p>

                    <!-- EDIT Modal -->

                    <button type="button" class="btn btn-primary item-align-right mt-1 visible" data-toggle="modal" data-target="#editPostModal">
                        Edit
                    </button>


                    <div class="modal fade-in" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  " role="document">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="set-blog.php" method="POST" enctype="multipart/form-data">
                                    
                                    
                                        <div class="form-group">
                                    
                                        <label for="id">ID</label>
                                            <textarea name="id" type="text" class="form-control block" readonly = "true" id="id_link" placeholder="Id"><?= $row['id'] ?></textarea>
                                    
                                            <label for="titulo">Título</label>
                                            <textarea name="titulo" type="text" class="form-control" id="id_titulo" placeholder="Titulo do Post"><?= $row['titulo'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoria">Categoria</label>
                                            <textarea name="categoria" type="text" class="form-control" id="id_categoria" placeholder="Categoria do Post..."><?= $row['categoria'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="mensagem">Mensagem</label>
                                            <textarea name="mensagem" type="varchar" class="form-control" id="id_mensagem" placeholder="Escreva aqui a sua mensagem..."> <?= $row['mensagem'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="img_link">Link da Imagem</label>
                                            <input name="img_link" type="file" class="form-control" id="id_link" placeholder="Insira o link da sua imagem..." >
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="divider my-5" />

            <?php
                    } ?>


