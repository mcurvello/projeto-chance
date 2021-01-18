
<?php

require 'conn.php';

$stmt = $db->prepare("SELECT * FROM tb_blog ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// <?= $row['titulo'] 
foreach ($linhas as $row) {
    ?>

<div class="col-md-4 mb-5">
                <div class="card-content">
                    <div class="card-img">
                        <img src="<?= $row['img_link']?>" alt="">
                        <span><h4> <?= $row['post_data']?></h4></span>
                    </div>
                    <div class="card-desc">
                        
                    <form action="get-blog.php" method="POST">
                    <textarea class="invisible" name="id" type="varchar" class="form-control" id="id_mensagem" placeholder="ID" readonly> <?= $row['id'] ?></textarea>
                    <h3><?= $row['titulo']?></h3>
                        <p>Categoria <?= $row['categoria']?></p>

                            <button type="submit"  class="btn-card">Ler Post</button>
                    </form>   
                    </div>
                </div>
            </div>

        
    <?php
                } ?>




