<?php
header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

$directory = isset($_GET['directory']) ? $_GET['directory'] : 'butt';
$jsonFiles = [];

if (is_dir($directory)) {
    $files = scandir($directory);
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
            $jsonFiles[] = $file;
        }
    }
}

echo json_encode($jsonFiles);
?>