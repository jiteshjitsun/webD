<html>
    <head>

</head>
<body>

<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
    Name: <input type="text" name = "fname" value="">
    <input type="submit" value="submit">
</form>

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST") {
            $name = $_REQUEST['fname'];
            if(empty($name)) {
                echo "Name is empty";
            }
            else{
                echo $name;
            }
        }
    ?>
</body>
</html>