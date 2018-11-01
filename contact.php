<?php
//$to = "zertekes@gmail.com";
$name = $_POST['sendername'] ;
$sendermail = $_POST['sendermail'];
//$subject = $_POST['New mail'];
$website = $_POST['website'];
//$txt = $_POST['smessage'];
//$headers = "From: contact@nazoweb.com" . "\r\n" . "CC: zertekes@nazoweb.com";
//$headers .= "Content-type:text/html;charset=iso-8859-2" . "\r\n";

$to="zertekes@nazoweb.com, zertekes@gmail.com";

$subject='New mail';

$message=$_POST['smessage']

        ." name: $name "
        ." website: $website ";

$servername="ftp.nazoweb.com";

$parameters="From: contact@nazoweb.com\r\n"

    ."Reply-To: $sendermail \r\n"

    ."sendmail:/usr/sbin/sendmail/";


mail ($to, $subject, $message, $parameters );
//mail("zertekes@gmail.com", "ok", "GZa" . "\r\n" . "\r\n" . "xy@gmail.hu" . "\r\n" . "\r\n" . "szöveg", "From: contact@nazoweb.com");

$respond_subject = "Thank you for contacting Nazo Webdesign!";

/* Prepare autoresponder message */

$respond_message = "Hi,

Thank you for your interest in Nazo Webdesign!


My name is Zoltan and I would be happy to help you to decide if I am a good fit for your project.

I will contact you shortly to learn more and answer any questions you might have.

I am looking forward to talking to you soon.

Kind regards,
Zoltan
www.nazoweb.com

";

mail($sendermail, $respond_subject, $respond_message);


header("Location: index.html");
?> 



