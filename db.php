<?php
$host = "localhost";
$username = "user123";
$password = "123";
$database = "uc_bot";
$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>