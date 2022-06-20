<?php
    for($x=0; $x<10; $x++){
        echo 'number' . $x . '<br>';
    }

    $arr = [1,2,3,4];

    echo count($arr);

    // associative array
    echo '<br>';
    $a = [
        '1'=>"jiwbn",
        '2'=>"pkpo",
        '3'=>"sojdn"
    ];


    foreach($a as $key => $value){
        echo "$key - $value<br>";
    }
?>