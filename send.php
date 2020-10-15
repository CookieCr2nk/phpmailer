<?php
include("phpmailer/PHPMailerAutoload.php");

//$emailText = $content = file_get_contents('http://loripsum.net/api');
$emailText = "
Mit Dual Stack bezeichnet man den Parallelbetrieb von IPv4 und IPv6. Da keine direkte Umstellung von IPv4 auf IPv6 möglich und auch nicht sinnvoll ist, sieht eine Transition Strategy vor, dass alle Netzknoten sowohl IPv4 als auch IPv6 beherrschen. Längerfristig würde man dann auf IPv4 verzichten können. Ausgenommen da, wo bereits heute kein IPv4 mehr möglich ist, weil keine öffentliche IPv4-Adressen mehr verfügbar sind. Hier fährt man bereits IPv6-only.

Dual-Stack

Die Migration zu Dual Stack ist vergleichsweise einfach. Viele Betriebssysteme können mit Dual Stack, also IPv4 und IPv6 gleichzeitig, umgehen. Alle bestehenden Dienste sind weiterhin unter ihrer gewohnten IPv4-Adresse erreichbar. Nach und nach kann man bestehende Dienste per IPv6 erreichbar machen.
Der Schritt zu IPv6 und damit Dual Stack, wird nur häufig deshalb nicht vollzogen, weil während des Parallelbetriebs der doppelte Administrationsaufwand anfällt. Beispielsweise müssen statische IP-Konfigurationen und das Routing, Filterregeln und Access Control Lists doppelt geführt werden. Und das bedeutet auch, es gibt die doppelte Anzahl an Fehlerquellen.
Erschwerend kommt hinzu, dass man es in der Regel mit Mitarbeitern, Dienstleistern und Experten zu tun hat, die vor Jahren oder Jahrzehnten IPv4 gelernt und verinnerlicht haben. Die müssen IPv6 völlig neu lernen. Denn IPv4 und IPv6 sind in vielen Dingen vergleichbar, aber nicht identisch.
Das Problem der Adressknappheit bei IPv4 löst man aber nicht dadurch, dass man IPv6 ignoriert. Irgendwann kommt man an den Punkt, an dem neue Dienste per IPv6 erreichbar sein müssen, weil die Kunden nur noch eine eingeschränkte oder gar keine IPv4-Connectivity mehr haben.

Alle Lösungswege im Hinblick auf die aktuellen Probleme mit IPv4/IPv6 sollten in Richtung IPv6-only führen. Egal welche Erfahrungen der eine oder andere gemacht hat oder noch machen wird. An IPv6 führt kein Weg vorbei. Auf dem Weg Richtung IPv6-only wird Dual Stack, also der Parallelbetrieb von IPv4 und IPv6, der Normalfall sein. Auf Jahrzehnte gesehen. Wie genau das Dual Stack aussieht, hängt aber vom Provider ab.
";

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 4;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->Host = 'mail.joder.li';
$mail->Port = '587';
$mail->isHTML();
$mail->Username = 'noa@joder.li';
$mail->Password = 'sax4WdqafDZSXPz9';
$mail->SetFrom('noa@joder.li', 'Noa Joder');
$mail->Subject = "Noa Joder - Road to IP Reputation IPv4 Stack";
$mail->Body = $emailText;

$mail->AddAddress("noa.joder@outlook.com", "joder.noa@protonmail.ch");

$mail->Send();

?>
