<?php
require '../conn.php';


$file = $_FILES["img_link"];


    $stmt = $db->prepare("INSERT INTO tb_desafios(titulo, tema, descricao, vaga1, vaga2, vaga3, vaga4, vaga5, data_entrega, img_link, post_data) VALUES(:TITULO, :TEMA, :DESCRICAO, :VAGA1, :VAGA2, :VAGA3, :VAGA4, :VAGA5, :PRAZO, :IMGLINK, :POSTDATA)");
    
    $dirUploads = "upload";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }
        $extensao = strtolower(substr($_FILES['img_link']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "upload". DIRECTORY_SEPARATOR;
        $file_path =  $diretorio.$novo_nome;
        move_uploaded_file($_FILES['img_link']['tmp_name'], $file_path);


    
        
    $titulo = $_POST['titulo'];
    $tema = $_POST['tema'];
    $descricao = $_POST['descricao'];
    $vaga1 = $_POST['vaga1'];
    $vaga2 = $_POST['vaga2'];
    $vaga3 = $_POST['vaga3'];
    $vaga4 = $_POST['vaga4'];
    $vaga5 = $_POST['vaga5'];
    $data_entrega = $_POST['data_entrega'];
    $img_link = $file_path;
    $post_data = date('d/m/Y');

    $stmt-> bindParam(":TITULO", $titulo);
    $stmt-> bindParam(":TEMA", $tema);
    $stmt-> bindParam(":DESCRICAO", $descricao);
    $stmt-> bindParam(":VAGA1", $vaga1);
    $stmt-> bindParam(":VAGA2", $vaga2);
    $stmt-> bindParam(":VAGA3", $vaga3);
    $stmt-> bindParam(":VAGA4", $vaga4);
    $stmt-> bindParam(":VAGA5", $vaga5);
    $stmt-> bindParam(":PRAZO", $data_entrega);
    $stmt-> bindParam(":IMGLINK", $img_link);
    $stmt-> bindParam(":POSTDATA", $post_data);
        
    $stmt->execute();



   header('Location: ../user/company.php');

    







?>
