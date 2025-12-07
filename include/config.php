<?php
// Detectar si estamos en localhost
$isLocal = ($_SERVER['HTTP_HOST'] === 'localhost');

// Forzar flags de seguridad desde ini_set (funciona en todas las versiones de PHP)
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', $isLocal ? 0 : 1);
ini_set('session.cookie_samesite', 'Strict');

// Compatibilidad para PHP < 7.3 (usa formato clásico)
session_set_cookie_params(
    0, // lifetime
    '/; samesite=Strict', // path + SameSite hack
    $isLocal ? '' : '.porttainobay.com',
    !$isLocal, // secure
    true       // httponly
);

// Iniciar sesión
session_start();

// 🔒 Regenerar la cookie de sesión con flags correctos
if (session_status() === PHP_SESSION_ACTIVE) {
    setcookie(
        session_name(),   // normalmente PHPSESSID
        session_id(),
        [
            'expires'  => 0,
            'path'     => '/',
            'domain'   => $isLocal ? '' : '.porttainobay.com',
            'secure'   => !$isLocal,
            'httponly' => true,
            'samesite' => 'Strict'
        ]
    );
}

header("X-UA-Compatible: IE=edge,chrome=1");

// Config cache
$cache_duration = 60 * 1; // 60 segundos
header("Cache-Control: public, max-age=$cache_duration");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + $cache_duration) . " GMT");

$carpetaRaiz = "/";
$path = 'https://' . $_SERVER['SERVER_NAME'] . $carpetaRaiz;
$page = basename($_SERVER['SCRIPT_NAME']);

// Detectar idioma
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;

    // Guardar cookie "lang" con flags de seguridad
    setcookie("lang", $lang, [
        'expires'  => time() + (3600 * 24 * 30),
        'path'     => '/',
        'domain'   => $isLocal ? '' : '.porttainobay.com',
        'secure'   => !$isLocal,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

} else if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'es';
}

switch ($lang) {
    case 'en':
        $idioma = 'en';
        break;
    case 'es':
        $idioma = 'es';
        break;
    default:
        header("Location: {$path}en/");
        exit;
}

include_once("include/lang/{$idioma}-traduccion.php");
