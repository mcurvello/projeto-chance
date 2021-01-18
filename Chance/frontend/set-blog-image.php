<?php

require 'conn.php';


$file = $_FILES["img_link"];
$id = $_POST['id'];




$dirUploads = "upload-blog";

if(!is_dir($dirUploads)){
    mkdir($dirUploads);
}
    $extensao = strtolower(substr($_FILES['img_link']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "upload-blog/";
    $file_path =  $diretorio.$novo_nome;
    move_uploaded_file($_FILES['img_link']['tmp_name'], $file_path);


    $img_link = $file_path;

    $stmt = $db->prepare("UPDATE tb_blog SET img_link = '$img_link' WHERE id = '$id'"); 

    $stmt->execute();

    var_dump($stmt->execute());

    // header('Location: blog-admin.php')
?>