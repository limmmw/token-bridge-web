<?php
if (file_exists("token.txt")) {
    echo file_get_contents("token.txt");
} else {
    echo "";
}
?>
