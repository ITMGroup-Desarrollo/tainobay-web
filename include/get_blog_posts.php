<?php 
header('Content-Type: application/json');

// Definir el archivo JSON según el idioma
$idioma = isset($_GET['idioma']) ? $_GET['idioma'] : 'en';
$json_file = __DIR__ . ($idioma === 'en' ? '/data.json' : '/es-data.json');

// Verificar si el archivo existe
if (!file_exists($json_file)) {
    echo json_encode(['error' => 'Archivo JSON no encontrado.']);
    exit;
}

$data = file_get_contents($json_file);
if ($data === false) {
    echo json_encode(['error' => 'Error al leer el archivo JSON.']);
    exit;
}

$all_posts = json_decode($data, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['error' => 'Error al decodificar el JSON: ' . json_last_error_msg()]);
    exit;
}

if (!isset($all_posts['posts'])) {
    echo json_encode(['error' => 'Formato de JSON incorrecto.']);
    exit;
}

$all_posts = $all_posts['posts'];

if (isset($_GET['title'])) {
    $title = urldecode($_GET['title']);
    $posts = array_values(array_filter($all_posts, function ($post) use ($title) {
        return stripos($post['title'], $title) !== false;
    }));

    if (empty($posts)) {
        echo json_encode(['error' => 'No se encontraron posts con el título especificado.']);
        exit;
    }

    $currentIndex = array_search($posts[0], $all_posts);

    if ($currentIndex === false) {
        echo json_encode(['error' => 'Error al encontrar el índice del post.']);
        exit;
    }

    $has_prev_post = $currentIndex > 0;
    $has_next_post = $currentIndex < count($all_posts) - 1;

    echo json_encode([
        'posts' => $posts,
        'has_prev_post' => $has_prev_post,
        'has_next_post' => $has_next_post,
        'prev_post_title' => $has_prev_post ? $all_posts[$currentIndex - 1]['title'] : '',
        'next_post_title' => $has_next_post ? $all_posts[$currentIndex + 1]['title'] : ''
    ]);

} else if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
    $perPage = 4;
    $totalPosts = count($all_posts);
    $totalPages = ceil($totalPosts / $perPage);

    if ($page < 1 || $page > $totalPages) {
        echo json_encode(['error' => 'Número de página inválido.']);
        exit;
    }

    $startIndex = ($page - 1) * $perPage;
    $posts = array_slice($all_posts, $startIndex, $perPage);

    echo json_encode([
        'posts' => $posts,
        'total_pages' => $totalPages,
        'current_page' => $page
    ]);

} else {
    echo json_encode(['error' => 'Parámetro no válido.']);
}
?>
