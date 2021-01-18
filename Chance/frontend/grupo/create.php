<?php
require '../conn.php';




    $stmt = $db->prepare("INSERT INTO tb_grupo(nome, desafio, participante1, participante2, participante3, participante4, participante5) VALUES(:NOME, :DESAFIO, :PARTICIPANTE1, :PARTICIPANTE2, :PARTICIPANTE3, :PARTICIPANTE4, :PARTICIPANTE5)");
    
    
    $nome = $_POST['nome'];
    $desafio = $_POST['desafio'];
    $participante1 = $_POST['participante1'];
    $participante2 = $_POST['participante2'];
    $participante3 = $_POST['participante3'];
    $participante4 = $_POST['participante4'];
    $participante5 = $_POST['participante5'];


    $stmt-> bindParam(":NOME", $nome);
    $stmt-> bindParam(":DESAFIO", $desafio);
    $stmt-> bindParam(":PARTICIPANTE1", $participante1);
    $stmt-> bindParam(":PARTICIPANTE2", $participante2);
    $stmt-> bindParam(":PARTICIPANTE3", $participante3);
    $stmt-> bindParam(":PARTICIPANTE4", $participante4);
    $stmt-> bindParam(":PARTICIPANTE5", $participante5);
    
    $stmt->execute();

   header('Location: ../user/index.php');

    







?>
