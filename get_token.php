<?php
if (!isset($_GET['token']) || empty($_GET['token'])) {
    http_response_code(400);
    echo "Token required.";
    exit;
}

$token = $_GET['token'];
unset($_GET['token']);

// Ambil pin (misalnya V1)
$pin = array_keys($_GET)[0] ?? '';
if (empty($pin)) {
    http_response_code(400);
    echo "Pin required.";
    exit;
}

$url = "https://blynk.cloud/external/api/get?token=$token&$pin";

// Ambil data dari Blynk
$response = @file_get_contents($url);

if ($response === FALSE) {
    http_response_code(500);
    echo "Failed to get value.";
} else {
    echo $response; // akan 0 atau 1
}
?>
