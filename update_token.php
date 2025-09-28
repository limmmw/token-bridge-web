<?php
if (!isset($_GET['token']) || empty($_GET['token'])) {
    http_response_code(400);
    echo "Token required.";
    exit;
}

$token = $_GET['token'];
unset($_GET['token']);

$params = http_build_query($_GET);
$url = "https://blynk.cloud/external/api/update?token=$token&$params";

$response = @file_get_contents($url);

if ($response === FALSE) {
    http_response_code(500);
    echo "Failed to update Blynk.";
} else {
    echo "OK";
}
?>
