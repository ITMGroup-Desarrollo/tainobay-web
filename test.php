<?php
$to = "hafido1403@gmail.com";
$subject = "Contacto desde el sitio web";
$message = "Este es el cuerpo del correo.";
$headers = "From: remitente@example.com\r\n" .
    "Reply-To: remitente@example.com\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
