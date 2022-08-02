<?php

/**
 * Prevent issue for browser requests to favicon
 */
if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
    http_response_code(404);
    exit;
}

/**
 * Fetch client IPv4
 */
if (!empty($remoteAddr = $_SERVER['REMOTE_ADDR'])) {
    $file = fopen(__DIR__ . '/logs/access.log', 'a+');
    fwrite($file,  date('Y-m-d H:i:s') . ': ' . $remoteAddr . "\n");
    fclose($file);
}

$stream = file_get_contents($imageFile = __DIR__ . '/image.gif');

header_remove('X-Powered-By');
header('age: 640924');
header('cache-control: max-age=2628000');
header('content-type: image/gif');
header('date: Tue, 26 Jul 2022 10:51:12 GMT');
header('accept-ranges: bytes');
header('content-length:' . filesize($imageFile));

echo $stream;