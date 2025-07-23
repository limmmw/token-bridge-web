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
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

$response = curl_exec($ch);

if ($response === false) {
    http_response_code(500);
    echo "cURL Error: " . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);

?>
