<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'include/loadEnv.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Cargar variables de entorno
    loadEnv(__DIR__ . '/.env');
    $smtpUser = getenv('SMTP_USER');
    $smtpPass = getenv('SMTP_PASS');
    $smtpHost = getenv('SMTP_HOST');
    $smtpPort = getenv('SMTP_PORT');
    $smtpEncryption = getenv('SMTP_ENCRYPTION');
    // $fromEmail = getenv('FROM_EMAIL');
    // $fromName = getenv('FROM_NAME');
} catch (Exception $e) {
    die("Error al cargar configuración: " . $e->getMessage());
}

try {
    $mail = new PHPMailer(true);

    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = $smtpEncryption ?: PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort ?: 587;

    // Destinatarios
    // $mail->setFrom($fromEmail, $fromName);
    // $mail->addAddress('destinatario@example.com', 'Nombre Destinatario');
    $mail->setFrom('tu_correo@example.com', 'Tu Nombre');
    $mail->addAddress('destinatario@example.com', 'Nombre Destinatario');

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Asunto del correo';
    $mail->Body    = '<p>Este es el cuerpo del correo en <b>HTML</b>.</p>';
    $mail->AltBody = 'Este es el cuerpo del correo en texto plano.';

    // Enviar correo
    $mail->send();
    echo 'Correo enviado correctamente.';
} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}
