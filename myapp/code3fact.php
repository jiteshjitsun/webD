<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>FActorial of number</title>
</head>
<body>
    
    <?php
        $n =  4;
        $ans = 1;
        for($i=$n; $i>=1; $i--){
            $ans *= $i;
        }
        echo "The factorial of $n is $ans"
    ?>
</body>
</html>