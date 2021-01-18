<?php

require 'conn.php';

$file = $_FILES["img_link"];




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



    
$id = $_POST['id'];
$title = $_POST['titulo'];
$categorie = $_POST['categoria'];
$mensage = $_POST['mensagem'];
$post_data = date('d/m/Y H:i:s');

$messagem = mysqli_real_escape_string($mysqli, $mensage);
$titulo = mysqli_real_escape_string($mysqli, $title);
$categoria = mysqli_real_escape_string($mysqli, $categorie);


$stmt = $db->prepare("UPDATE tb_blog SET  titulo ='$titulo', categoria ='$categoria', mensagem ='$messagem', img_link = '$img_link', post_data ='$post_data' WHERE id ='$id'"); 

    $stmt->execute();
header('Location: blog-admin.php');


// var_dump($id);
// var_dump($titulo);
// var_dump($categoria);
// var_dump($mensagem);
// var_dump($post_data);



// header('Location: blog-admin.php');


//var_dump($stmt->execute());
/*
if($stmt->execute()){
var_dump($stmt);}
else{
    echo 'deu merrda';  
}
*/
//header('Location: blog-admin.php');









/*
$stmt = $db->prepare("SELECT * FROM tb_usuario WHERE usuario = '$usuario' and senha = '$senha'");

$stmt->execute();

$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);






if ($linhas > 0){
    $_SESSION['login'] = $usuario;
    header('Location: blog-admin.php');
//    exit();
}
else{
$_SESSION['nao_autenticado'] = $true;
header('Location: blog.php');
//exit();
}

*/
?>
