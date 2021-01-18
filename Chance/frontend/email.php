<?php

require_once('src/PHPMailer.php'); 
require_once('src/SMTP.php'); 
require_once('src/Exception.php'); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();



$meu_email = 'amaralmurilo100@gmail.com';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$corpo = "
    Assunto: "  .$_POST['assunto'].'<br>'."
    Nome: "  .$_POST['nome'].'<br>'."
    Telefone: "  .$_POST['telefone'].'<br>'."
    Email: "  .$_POST['email'].'<br>'."
    Mensagem:"  .$_POST['mensagem'].'<br>'."
";

echo "Nome: ".$nome."<br>";
echo "Email: ".$email."<br>";
echo "Telefone: ".$telefone."<br><br>";
echo "Assunto: ".$assunto."<br>";
echo "Mensagem: ".$mensagem."<br>";





try{
    $mail-> isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'amaralmurilo100@gmail.com';
    $mail->Password = '10.11.97';
    $mail->Port = 587;

    $mail->setFrom('devmuamaral@gmail.com');
    $mail->addAddress('muriloamaral-2@hotmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Teste de email';
    $mail->Body = $corpo;
    $mail->AltBody='Chegou o email teste do Mu Amaral';

    if($mail->send()){
        echo 'Email enviado';
    } else{
        echo 'Falha ao enviar email';
    }

} catch(Exception $e){
echo "Erro ao Enviar mensagem: {$mail->ErrorInfo}";
}
?>