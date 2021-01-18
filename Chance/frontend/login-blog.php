<?php

include 'conn.php';

session_start();


$usuario = $_POST['login'];
$senha = $_POST['senha'];



$stmt = $db->prepare("SELECT * FROM tb_usuario WHERE usuario = '$usuario' and senha = '$senha'");

$stmt->execute();

$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($linhas as $row){
    $log_user = $row['usuario'];
    $log_pass = $row['senha'];

}

if(empty($usuario) || empty($senha)){
    header('Location: index.php');

    
}
else{

//Não logou
if (!$log_user == $usuario || !$log_pass == $senha){

   
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('Location: index.php');
    
    
//    exit();
}

//logou
else{
    $_SESSION['login'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('Location: blog-admin.php');
//exit();
}
}