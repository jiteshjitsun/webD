<?php

    if(isset($_POST['submit'])){
        // $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

        // other way 
        // $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);

        $name = $_POST['name'];
        $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
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
        <input type="text" name="name" id="">
        <input type="text" name="age" id="">
        <input type="submit" name="submit" value="submit" id="">
    </form>
</body>
</html>