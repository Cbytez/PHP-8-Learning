<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($localhost, $Fatality, $Yennefer0974, $Learning_PHP_8);


if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$conn->close();