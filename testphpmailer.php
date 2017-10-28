<html>
<head>
<title>PHPMailer - Mail() basic test</title>
</head>
<body>

<?php

require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = 'test envoie de mail';

$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->SetFrom('name@yourdomain.com', 'First Last');

$address = "boiselet.jeremy@gmail.com";
$mail->AddAddress($address, "John Doe");

$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";

$mail->MsgHTML($body);


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>
