<?php

    if(isset($_POST['submit'])){
        echo $_POST['name'];
        echo $_POST['age'];
    }
    else{
        echo $_GET['name'];
        echo $_GET['age'];
    }
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


    <form action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="name" id="">
        <input type="text" name="age" id="">
        <input type="submit" name="submit" value="submit" id="">
    </form>
</body>
</html>