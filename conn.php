<?php
    $conn = new mysqli('localhost', 'root', '', 'adminpass');

    if ($conn->connect_errno) {
        die("Connection Error: " . $conn->connect_error);
    }
?>
