<?php

function loadEnv($path)
{
    if (!file_exists($path)) {
        throw new Exception("Archivo .env no encontrado en: $path");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignorar comentarios
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Separar la clave del valor
        list($key, $value) = explode('=', $line, 2);

        // Eliminar posibles espacios y comillas alrededor del valor
        $key = trim($key);
        $value = trim($value, " \t\n\r\0\x0B\"");

        // Definir la variable de entorno
        putenv("$key=$value");
        $_ENV[$key] = $value; // También almacenar en $_ENV para que esté disponible para getenv()
    }
}

// Cargar las variables de entorno desde el archivo .env
loadEnv(__DIR__ . '/../.env');

// Acceder a las variables de entorno
$baseUrlLocal = getenv('BASE_URL_LOCAL');
$baseUrlProd = getenv('BASE_URL_PROD');
?>
