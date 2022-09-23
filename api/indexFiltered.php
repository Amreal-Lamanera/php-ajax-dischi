<?php
include __DIR__ . '/albums.php';

$genre = isset($_GET['genre']) ? $_GET['genre'] : null;

if ($genre) {
    $albums = array_filter($albums, function ($album) use ($genre) {
        return $genre == $album['genre'];
    });
}

$data = [
    'success' => true,
    'response' => array_values($albums)
];

header('Content-Type: application/json');

echo json_encode($data);
