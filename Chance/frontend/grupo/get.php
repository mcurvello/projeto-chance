<?php
require '../conn.php';

$stmt = $db->prepare("SELECT * FROM tb_grupo ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);



