<?php
    session_start();
    if(isset($_POST['submit'])){
        // $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

        // other way 
        $username = filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if($username == 'khon' && $password == 'password'){
            $_SESSION['username'] = $username;
            header('Location: php-crash/extras/dashboard.php');
        }
    }
    echo $name;
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
    
    <a href="<?php $_SERVER['PHP_SELF']; ?>?name=jits&age=22">CLICK</a>


    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <input type="submit" name="submit" value="submit" id="">
    </form>
</body>
</html>