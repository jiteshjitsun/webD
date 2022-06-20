<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
        $age = array("peter"=>"35","ben"=>"12","joe"=>"21");
        ksort($age);
        foreach($age as $x=> $x_value){
            echo "key=".$x.", value=".$x_value;
            echo "<br>";
        }
    ?>
    
</body>
</html>