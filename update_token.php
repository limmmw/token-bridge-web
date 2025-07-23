<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    file_put_contents("token.txt", $token);
    echo "Token updated: $token";
} else {
    echo "No token received";
}
?>
