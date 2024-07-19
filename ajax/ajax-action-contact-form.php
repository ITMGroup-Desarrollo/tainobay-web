<?php
session_start();

$idioma = $_SESSION['lang'];

include_once("../include/lang/{$idioma}-contact-form.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtén los datos del formulario
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  // Configura los detalles del correo
  $to = 'hafido1403@gmail.com';
  $email_subject = "Taino Bay Contacto: $subject";
  $email_body = "Has recibido un nuevo mensaje de contacto.\n\n" .
    "Nombre: $name\n" .
    "Email: $email\n" .
    "Mensaje:\n$message";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n"; // Opcional: establece el contenido y el tipo de caracteres

  // Envía el correo
  if (mail($to, $email_subject, $email_body, $headers)) {
    echo SUCCESS;
  } else {
    echo ERROR;
  }
} else {
  echo "Método no permitido.";
}
