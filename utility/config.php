<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crypto";

$conn = new mysqli($servername, $username, $password);

if ($conn == FALSE) {
    echo "<script>alert('Error ' . $conn->connect_error);</script>";
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === FALSE) {
    echo "<script>alert('Error creating database: ' . $conn->error);</script>";
}

mysqli_select_db($conn, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS client (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP
)";
if ($conn->query($sql) === false) {
    echo "<script>alert('Error creating table: ' . $conn->error);</script>";
}

?>
