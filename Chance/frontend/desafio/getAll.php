<?php
    require '../conn.php';

    $stmt = $db->prepare("SELECT * FROM tb_desafios ");

    $stmt->execute();
    $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($linhas as $row) {
        ?>

            <form action="delete-blog.php" class="d-flex justify-content-end" method="POST">
            <textarea name="id" class="invisible" cols="30" rows="1"><?= $row['id'] ?></textarea>

            </form>
            <h1 class="card-title "><?= $row['titulo'] ?></h1>

            <div id="<?= $row['titulo'] ?>" class="card mb-4 mt-4">
                
            

            
                <img class="card-img-top" src="../desafio/<?= $row['img_link']?>" alt="Card image cap">
                <div class="card-body">
                 
                    <h3 class   ="card-title"><?= $row['tema'] ?></h3>
                    <h4 class="card-title">Prazo para entrega: <?= $row['data_entrega'] ?></h4>
                    <p class="card-text"><?= $row['descricao'] ?></p>
                </div>
                <div class="card-footer text-muted">
                <p>Vagas para equipes: <?= $row['vaga1'].', '.$row['vaga2'].', '.$row['vaga3'].', '.$row['vaga4'].', '.$row['vaga5']  ?> </p>

                    <p>Postado em: <?= $row['post_data'] ?> </p>



                </div>
            </div>
            <hr class="divider my-5" />

            <?php
                    } ?>


