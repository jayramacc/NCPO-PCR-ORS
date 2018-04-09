<?php

use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "pcrncponaga@gmail.com";
$mail->Password = "1234567890Jr";
$mail->setFrom('pcrncponaga@gmail.com', 'Do not reply');
$mail->addReplyTo('do_not_reply@gmail.com', 'Do not reply');
$mail->addAddress($_GET["client_email"], $_GET["client_name"]);
$mail->Subject = 'NCPO - Verify your Private key.';
$mail->msgHTML(file_get_contents('http://' .$_SERVER['SERVER_NAME'].'/class/email_template.php?pk='.$_GET["pk"]), __DIR__);
$mail->send();
header("location: ../index.php");