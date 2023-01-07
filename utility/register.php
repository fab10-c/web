<?php

require_once('config.php');

$name = $conn->real_escape_string($_POST['name']);
$surname = $conn->real_escape_string($_POST['surname']);
$phone = $conn->real_escape_string($_POST['phone']);
$user = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$pwd = $conn->real_escape_string($_POST['password']);

$hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO client (name, surname, phone, username, email, password) VALUES ('$name', '$surname', '$phone', '$user', '$email', '$hashed_password')";
if($conn->query($sql) === TRUE) {
    echo "<script>alert('Registrazione effettuata con successo');</script>";
    header('location: ../index.html');
} else {
    echo "<script>alert('Errore durante registrazione utente $sql . ' . $conn->error);</script>";
}

?>