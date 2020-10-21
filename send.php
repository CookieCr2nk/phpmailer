<?php
include("phpmailer/PHPMailerAutoload.php");

//$emailText = $content = file_get_contents('http://loripsum.net/api');
$emailText = "
Sehr geehrter Herr Joder

Das ist eine ausführliche Nachricht die Täglich versand wird, um die Mail Reputation zu steigern. Bitte beachte Stehts, dass hier keine Fluchwörter drin stehen und dass du die Mails regelmässig liest.
Denn das ist auch wichtig für eine gute Mail reputation.

Ich könnte hier noch mehr Text hinballern, aber das lasse ich jetzt erstmal.

See you later aligator

Noa Joder
";

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
$mail->Username = 'noa@joder.li';
$mail->Password = 'sax4WdqafDZSXPz9';
$mail->SetFrom('noa@joder.li', 'Noa Joder');
$mail->Subject = "Wieso eine gute IP Reputation wichtig ist.";
$mail->Body = $emailText;

$mail->AddAddress("noa.joder@outlook.com");
//$mail->AddAddress("joder.noa@protonmail.ch");


$mail->Send();

?>
