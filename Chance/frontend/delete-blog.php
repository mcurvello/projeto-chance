<?php

require 'conn.php';


$id = $_POST['id'];

$stmt = $db->prepare("DELETE FROM tb_blog WHERE id='$id'");

$stmt->execute();
header('Location: blog-admin.php');
    




?>