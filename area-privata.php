<?php
session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== TRUE) {
    header("location: login-form.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area-riservata</title>
</head>
<body>

    <h1>area riservata</h1>

    <h4>we ciao scemo</h4>

    <a href="utility/logout.php">Logout</a>

</body>
</html>