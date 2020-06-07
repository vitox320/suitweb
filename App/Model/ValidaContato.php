<?php
date_default_timezone_set('America/Sao_Paulo'); //São Paulo devido ao horário de verão
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//isset = Tratamento para caso o usuário não digitar, não dar erro no PHP
//Uso de operador ternário. ? = IF, : = ELSE
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : 'Não informado';
$email = isset($_POST['email']) ? trim($_POST['email']) : 'Não informado';
$assunto = isset($_POST['assunto']) ? trim($_POST['assunto']) : 'Não informado';
$mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : 'Não informado';
$data = date('d/m/Y H:i:s');


//Validação se os campos chegaram via POST
if($nome && $email && $assunto && $mensagem){
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'suitup320@gmail.com';
    $mail->Password = '#suitweb123';

    $mail->setFrom('suitup320@gmail.com'); //Originário
    $mail->addAddress('suitup320@gmail.com'); //Destinatário

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "Nome: {$nome}<br>
                       E-mail: {$email}<br>
                       Assunto: {$assunto}<br>
                       Mensagem: {$mensagem}<br>
                       Data/Hora: {$data}";

    //A partir da versão 5.6 do PHP, foi implementado um comportamento SSL mais robusto, então precisa desse array para a conexão SMTP ser bem sucedida.
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if($mail->send()){
       header("Location:../View/contato.php?status=enviado");
    }else{
        header("Location:../View/contato.php?status=error");
    }
}else{
    header("Location:../View/contato.php?status=error2");
}
?>