<?php
$servername = "gdgmumbai.in";
$username = "raktdaanAdmin2";
$password = "raktdaanAdmin2";
$dbname = "raktdaan1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>