<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../include/loadEnv.php';
require '../vendor/autoload.php';

// Cargar variables de entorno
loadEnv('../.env');

$idioma = $_SESSION['lang'] ?? 'es'; // Idioma por defecto
include_once("../include/lang/{$idioma}-contact-form.php");

// Validar método de solicitud
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405); // Método no permitido
  echo "Método no permitido.";
  exit;
}

// Función para validar el reCAPTCHA
function validarRecaptcha($response, $secretKey)
{
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = [
    'secret' => $secretKey,
    'response' => $response,
  ];

  $options = [
    'http' => [
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data),
    ],
  ];

  $context = stream_context_create($options);
  $response = file_get_contents($url, false, $context);

  if ($response === false) {
    return false;
  }

  $result = json_decode($response, true);
  return $result['success'] ?? false;
}

// Clave secreta de reCAPTCHA
$secretKey = getenv('RECAPTCHA_SECRET_KEY');

// Verificar reCAPTCHA
if (!isset($_POST['g-recaptcha-response']) || !validarRecaptcha($_POST['g-recaptcha-response'], $secretKey)) {
  echo 'Error: No se pudo validar el captcha.';
  exit;
}

// Validar y sanitizar datos del formulario
$name = htmlspecialchars($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$naviera = htmlspecialchars($_POST['naviera'] ?? '');
$arrival = htmlspecialchars($_POST['arrival'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

// Validar campos obligatorios
if (empty($name) || empty($email) || empty($message)) {
  echo 'Error: Todos los campos obligatorios deben ser completados.';
  exit;
}

// Configuración de PHPMailer
try {
  $mail = new PHPMailer(true);

  // Configuración del servidor SMTP
  $mail->isSMTP();
  $mail->Host = getenv('SMTP_HOST');
  $mail->SMTPAuth = true;
  $mail->Username = getenv('SMTP_USER');
  $mail->Password = getenv('SMTP_PASS');
  $mail->SMTPSecure = getenv('SMTP_ENCRYPTION') ?: PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = getenv('SMTP_PORT') ?: 587;

  $mail->CharSet = 'UTF-8';

  // Remitente y destinatarios
  $mail->setFrom('formulariocpppi@porttainobay.com', 'Contacto porttainobay.com');
  $mail->addAddress('info@porttainobay.com');
  $mail->addAddress('sales.rd@tickettofun.travel');

  $mail->addBCC('hoxte@itmgroup.mx');

  // Contenido del correo
  $mail->isHTML(true);
  $mail->Subject = 'Contacto desde porttainobay.com';
  $mail->Body = "
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
