<?php

require_once('config.php');

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql_select = "SELECT * FROM client WHERE username = '$username'";
    if($result = $conn->query($sql_select)) {
        if($result->num_rows == 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['loggato'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("location: ../area-privata.php");
            } else {
                echo "la password non è corretta";
            }
        } else {
            echo "non ci sono account con quello username";
        }
    } else {
        echo "errore durante la fase di login";
    }
    $conn->close();
}

?>