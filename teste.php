<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;
$mail->Username = 'suelen.pogalski@unidavi.edu.br';
$mail->Password = 'ssukyurdoidafdzk';
$mail->setFrom('suhtaypog@gmail.com', 'Suelen Pogalski');
$mail->addAddress('auladevtiexemplo2022@gmail.com', 'Aula dev ti');
$mail->Subject = 'Teste de e-mail Aula DEV-TI ['. date('D M j G:i:s T Y') . ']';
$mail->msgHTML(file_get_contents('email.html'), __DIR__);
$mail->AltBody = 'E-mail enviado em HTML';
//$mail->addAttachment('imagens/iphone13.png');
if (!$mail->send()) {
    echo 'Erro ao enviar o e-mail.' . $mail->ErrorInfo;
} else {
    echo 'E-mail enviado com sucesso!';
}
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}