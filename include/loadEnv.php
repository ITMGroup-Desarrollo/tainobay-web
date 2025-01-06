<?php
function loadEnv($filePath)
{
  if (!file_exists($filePath)) {
    throw new Exception("El archivo .env no existe");
  }

  $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
    if (strpos(trim($line), '#') === 0) {
      continue; // Ignorar comentarios
    }

    $keyValue = explode('=', $line, 2);
    if (count($keyValue) === 2) {
      $key = trim($keyValue[0]);
      $value = trim($keyValue[1]);
      putenv("$key=$value"); // Cargar como variable de entorno
    }
  }
}
