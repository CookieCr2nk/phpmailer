<?php
include("phpmailer/PHPMailerAutoload.php");

//$content1 = file_get_contents('http://loripsum.net/api');
$content2 = file_get_contents('https://baconipsum.com/api/?type=meat-and-filler&paras=5&format=text');

$emailText = $content2

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 4;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->CharSet = 'UTF-8';
//$mail->Encoding = 'base64';
$mail->Host = 'mail.joder.li';
$mail->Port = '587';
$mail->isHTML();
$mail->Username = 'support@joder.li';
$mail->Password = 'pYj87T9nWvQotq8y';
$mail->SetFrom('support@joder.li', 'Support - Joder.li');
$mail->Subject = "System Notifications";
$mail->Body = $emailText;

$mail->AddAddress("noa.joder@outlook.com");
//$mail->AddAddress("joder.noa@protonmail.ch");


$mail->Send();

?>
