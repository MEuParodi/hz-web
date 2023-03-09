<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$message = $_POST['message'];

$para = 'eugeparodi10@gmail.com';
$titulo = 'Nuevo mensaje del formulario de contacto';
$mensaje_correo = "Nombre: $nombre\nTelefono: $contact\nEmail: $email\nMensaje: $message";


$mail = new PHPMailer;
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sxb1plzcpnl490661.prod.sxb1.secureserver.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@haizeahotel.com';                     // desde donde mando el mail SMTP username
    $mail->Password   = 'haizea';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            // PHPMailer::ENCRYPTION_SMTPS  Enable implicit TLS encryption
    $mail->Port       = 465;                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);   //quien manda
    $mail->addAddress('info@haizeahotel.com');     //destinatario

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail desde el sitio web de Haizea';
    $mail->Body    = "Nombre: $nombre\nTelefono: $contact\nEmail: $email\nMensaje: $message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header('Location: ./gracias.html');







  // mail($para, $titulo, $mensaje_correo);

  // header('Location: home.html');
?>