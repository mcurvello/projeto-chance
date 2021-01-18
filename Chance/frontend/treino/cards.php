
<?php
require '../conn.php';

$stmt = $db->prepare("SELECT * FROM tb_treino ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// <?= $row['titulo'] 
foreach ($linhas as $row) {
    ?>

<div class="col-md-4 mb-5">
                <div class="card-content">
                    <div class="card-img">
                        <img src="../desafio/<?= $row['img_link']?>" alt="">

                    </div>
                    <div class="card-desc mt-0">
                        
                    <form action="../treino/get-treino.php" method="POST">
                    <textarea class="invisible" name="id" type="varchar" class="form-control" id="id_mensagem" placeholder="ID" readonly> <?= $row['id'] ?></textarea>
                    <h3 class="mt-0"><?= $row['titulo']?></h3>
                        <h5>Vagas:  <?= $row['vaga']?></h5><br>
                        
                        <p>Tema:  <?= $row['tema']?></p>
                        <p>Prazo:  <?= $row['data_entrega']?></p>

                            <button type="submit"  class="btn-card">Quero um lugar na equipe!</button>
                    </form>   
                    </div>
                </div>
            </div>

        
    <?php
                } ?>




