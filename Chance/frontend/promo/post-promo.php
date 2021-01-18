<?php
require '../conn.php';


$file = $_FILES["img_link"];


    $stmt = $db->prepare("INSERT INTO tb_promo(titulo, descricao, img_link, wpp_link) VALUES(:TITULO, :DESCRICAO, :IMGLINK, :WPPLINK)");
    
    $dirUploads = "../upload-promo";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }
        $extensao = strtolower(substr($_FILES['img_link']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "upload-promo". DIRECTORY_SEPARATOR;
        $file_path =  $diretorio.$novo_nome;
        move_uploaded_file($_FILES['img_link']['tmp_name'], $file_path);


    
        
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $img_link = $file_path;
    
    $wpp_link = $_POST['wpp_link'];
    
    $stmt-> bindParam(":TITULO", $titulo);
    $stmt-> bindParam(":DESCRICAO", $descricao);
    $stmt-> bindParam(":IMGLINK", $img_link);
    $stmt-> bindParam(":WPPLINK", $wpp_link);
        
    $stmt->execute();

   header('Location: ../blog-admin.php');

    







?>
