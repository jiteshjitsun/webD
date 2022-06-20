<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $arr = array(1,2,3,4,5,6);
        $len = count($arr);
        for($i=0; $i<$len; $i++){
            if($arr[$i]%2==0){
                echo "even <br>";
            }
            else
                echo "odd <br>";
        }
    ?>
</body>
</html>