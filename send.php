<?php
include("phpmailer/PHPMailerAutoload.php");

//https://stackoverflow.com/questions/8676183/echoing-out-a-random-variable
//Define different content that fetch from API
$content1 = file_get_contents('http://loripsum.net/api');
$content2 = file_get_contents('https://baconipsum.com/api/?type=meat-and-filler&paras=5&format=text');
$content3 = file_get_contents('https://api.jokes.one/jod?category=animal');
$content4 = file_get_contents('https://api.jokes.one/jod?category=blonde');
$content5 = file_get_contents('https://api.jokes.one/jod');

//Define Array with content(x)
$array = array($content1, $content2, $content3, $content4, $content5);

$emailText = $array[rand(0, count($array) - 1)];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 4;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->CharSet = 'UTF-8';
//$mail->Encoding = 'base64';
$mail->Host = 'mail.your-server.net';
$mail->Port = '587';
$mail->isHTML();
$mail->Username = 'no-reply@your-server.net';
$mail->Password = 'pYj87T9nWvQotq8y';
$mail->SetFrom('nor-reply', 'noreply Your-Server');
$mail->Subject = "Notification";
$mail->Body = $emailText;

$mail->AddAddress("receiver@your-server.net");
$mail->AddAddress("receiver2@your-server.net");


$mail->Send();

?>
