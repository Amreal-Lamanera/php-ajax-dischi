<?php
include __DIR__ . '/albums.php';

header('Content-Type: application/json');

echo json_encode($albums);
