
<?php
require '../conn.php';

$stmt = $db->prepare("SELECT * FROM tb_desafios ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// <?= $row['titulo'] 
foreach ($linhas as $row) {
    ?>

<div class="col-md-4 mb-5">
                <div class="card-content">
                    <div class="card-img">
                        <img src="../desafio/<?= $row['img_link']?>" alt="">
                        <span><h4><?= $row['post_data']?></h4></span>

                    </div>
                    <div class="card-desc mt-0">
                        
                    <form action="get-desafio.php" method="POST">
                    <textarea class="invisible" name="id" type="varchar" class="form-control" id="id_mensagem" placeholder="ID" readonly> <?= $row['id'] ?></textarea>
                    <h3 class="mt-0"><?= $row['titulo']?></h3>
                        <h5>Vagas:  <?= $row['vaga1'].', '.$row['vaga2'].', '.$row['vaga3'].', '.$row['vaga4'].', '.$row['vaga5']?></h5><br>
                        
                        <p>Tema:  <?= $row['tema']?></p>
                        <p>Prazo:  <?= $row['data_entrega']?></p>

                            <button type="submit"  class="btn-card">Quero um lugar na equipe!</button>
                    </form>   
                    </div>
                </div>
            </div>

        
    <?php
                } ?>




