<?php
require '../conn.php';

$stmt = $db->prepare("SELECT * FROM tb_promo ");

$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);




