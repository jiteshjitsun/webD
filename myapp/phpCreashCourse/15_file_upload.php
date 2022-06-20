<?php
    if(isset($_POST['submit'])){
        if(!empty($_FILES['upload']['name'])){
            print_r($_FILES);
        }
        else{
            $message = '<p style="color: red;"> please file daal do bsdk </p>';
        }
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
    <?php echo $message ?? null; ?>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        select image to upload:
        <input type="file" name="upload">
        <input type="submit" name="submit" value="submit" id="">
    </form>
</body>
</html>