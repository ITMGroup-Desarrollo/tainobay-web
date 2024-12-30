<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../include/loadEnv.php';

$idioma = $_SESSION['lang'];

include_once("../include/lang/{$idioma}-contact-form.php");

require '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtén los datos del formulario
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $naviera = htmlspecialchars($_POST['naviera']);
  $arrival = htmlspecialchars($_POST['arrival']);
  $message = htmlspecialchars($_POST['message']);

  try {
    // Cargar variables de entorno
    loadEnv('../.env');
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

  // Envía el correo
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
    $mail->setFrom('formulariobrokers@itmdesarrolladores.com', 'Contacto porttainobay.com');
    $mail->addAddress('hafido1403@gmail.com', 'hoxte@itmgroup.mx');

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje de contacto';
    $mail->Body    = "
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Naviera:</strong> $naviera</p>
        <p><strong>Fecha de llegada:</strong> $arrival</p>
        <p><strong>Mensaje:</strong></p>
        <p>$message</p>";
    $mail->AltBody = "Nombre: $name\nEmail: $email\nNaviera: $naviera\nFecha de llegada: $arrival\nMensaje:\n$message";

    // Enviar correo
    $mail->send();
    echo 'Correo enviado correctamente.';
  } catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
  }
} else {
  echo "Método no permitido.";
}
