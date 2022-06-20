<?php
    //  they are build in variables used in all scopes

    // $_GET => contains info about the variables passed through the url or a form 
    // $_POST => contains info about the variables passed through a form
    // $_COOKIE => contains info about the varibles passed through a cookies
    // $_SESSION => conatains info about the variables passed through a session
    // $_SERVER => contains info about the server environment
    // $_ENV => conatins info about the environment varibales
    // $_FILES => Contains info about the files uploaded to the script
    // $_REQUESTS => Contains info about variables passed through the form of the url

    // var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?= $_SERVER['HTTP_HOST'] ?></li>
        <li>Host: <?= $_SERVER['SERVER_NAME'] ?></li>
        <li>Host: <?= $_SERVER['SERVER_PORT'] ?></li>
        <li>Host: <?= $_SERVER['PHP_SELF'] ?></li>
        <li>Host: <?= $_SERVER['REMOTE_PORT'] ?></li>
        <li>Host: <?= $_SERVER['REMOTE_ADDR'] ?></li>
    </ul>
</body>
</html>