<?php

require '../conn.php';

$logado = $_POST['login'];

$stmt = $db->prepare("SELECT * FROM tb_alunos where login == '$logado' ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Location: profile.php ')

?>