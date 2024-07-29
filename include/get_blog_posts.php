<?php
header('Content-Type: application/json');

// Leer el archivo JSON
$data = file_get_contents(__DIR__ . '/data.json');
$all_posts = json_decode($data, true)['posts'];

// Obtener el título del post desde el parámetro de la URL
$title = isset($_GET['title']) ? urldecode($_GET['title']) : '';

// Filtrar posts por título
$posts = array_values(array_filter($all_posts, function ($post) use ($title) {
    return stripos($post['title'], $title) !== false;
}));

// Obtener el índice del post actual
$currentIndex = array_search($posts[0], $all_posts);

// Determinar si hay posts anterior y siguiente
$has_prev_post = $currentIndex > 0;
$has_next_post = $currentIndex < count($all_posts) - 1;

// Devolver los posts como JSON
echo json_encode([
    'posts' => $posts,
    'has_prev_post' => $has_prev_post,
    'has_next_post' => $has_next_post,
    'prev_post_title' => $has_prev_post ? $all_posts[$currentIndex - 1]['title'] : '',
    'next_post_title' => $has_next_post ? $all_posts[$currentIndex + 1]['title'] : ''
]);
