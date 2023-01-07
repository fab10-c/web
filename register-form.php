<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="more.css">
    <link rel="stylesheet" href="register-form.css">
    <title>Login</title>
</head>

<body>
    <?php

    echo file_get_contents('header.html');

    echo file_get_contents('register-form.html');

    echo file_get_contents('footer.html');
    
    ?>

</body>

</html>