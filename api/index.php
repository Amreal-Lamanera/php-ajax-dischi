<?php
include __DIR__ . '/albums.php';

$data = [
    'success' => true,
    'response' => $albums
];

header('Content-Type: application/json');

echo json_encode($data);
