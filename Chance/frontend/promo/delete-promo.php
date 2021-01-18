<?php

require '../conn.php';


$id = $_POST['id'];

$stmt = $db->prepare("DELETE FROM tb_blog WHERE id='$id'");

$a = $stmt->execute();

var_dump($a);
// header('Location: ../blog-admin.php');
    




?>