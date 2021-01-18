<?php
require '../conn.php';




    $stmt = $db->prepare("INSERT INTO tb_alunos(login, senha, nome, email, interesse1, interesse2) VALUES(:LOGIN, :SENHA, :NOME, :EMAIL, :INTERESSE1, :INTERESSE2)");
    
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $interesse1 = $_POST['interesse1'];
    $interesse2 = $_POST['interesse2'];


    $stmt-> bindParam(":LOGIN", $login);
    $stmt-> bindParam(":SENHA", $senha);
    $stmt-> bindParam(":NOME", $nome);
    $stmt-> bindParam(":EMAIL", $email);
    $stmt-> bindParam(":INTERESSE1", $interesse1);
    $stmt-> bindParam(":INTERESSE2", $interesse2);
    
    $stmt->execute();

   header('Location: ../index.php');

    







?>
