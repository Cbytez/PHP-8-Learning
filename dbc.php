<?php

$servername = "localhost";
$username = "Fatality";
$password = "Yennefer0974";
$dbname = "Learning_PHP_8";

$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";

$conn->close();