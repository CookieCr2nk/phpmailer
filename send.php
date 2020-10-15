<?php
include("phpmailer/PHPMailerAutoload.php");

$emailText = $content = file_get_contents('http://loripsum.net/api');
//$emailText = "text";

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 4;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->Host = 'mail.joder.li';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'noa@joder.li';
$mail->Password = 'fD1z82I#sK';
$mail->SetFrom('noa@joder.li', 'Noa Joder');
$mail->Subject = "Noa Joder - Road to IP Reputation";
$mail->Body = $emailText;

$mail->AddAddress("noa@joder.li");

$mail->Send();

?>
