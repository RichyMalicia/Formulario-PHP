<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuración inicial de nuestro servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'jorgeserviciosinmobiliarios@gmail.com';
    $phpmailer->Password = 'yphvdqcwjalrqxar';

    //  Añadiendo destinatarios
    $phpmailer->setFrom($email, $name);
    $phpmailer->addAddress($email, $name); 

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar el correo
    $phpmailer->send();
    
}

?>