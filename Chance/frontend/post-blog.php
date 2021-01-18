<?php
require './conn.php';


$file = $_FILES["img_link"];


    $stmt = $db->prepare("INSERT INTO tb_blog(titulo, categoria, mensagem, img_link, post_data) VALUES(:TITULO, :CATEGORIA, :MENSAGEM, :IMGLINK, :POSTDATA)");
    
    $dirUploads = "upload-blog";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }
        $extensao = strtolower(substr($_FILES['img_link']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "upload-blog". DIRECTORY_SEPARATOR;
        $file_path =  $diretorio.$novo_nome;
        move_uploaded_file($_FILES['img_link']['tmp_name'], $file_path);


    
        
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $mensagem = $_POST['mensagem'];
    $img_link = $file_path;
    $post_data = date('d/m/Y');

    $stmt-> bindParam(":TITULO", $titulo);
    $stmt-> bindParam(":CATEGORIA", $categoria);
    $stmt-> bindParam(":MENSAGEM", $mensagem);
    $stmt-> bindParam(":IMGLINK", $img_link);
    $stmt-> bindParam(":POSTDATA", $post_data);
        
    $stmt->execute();

   header('Location: user/company.php');

    







?>
