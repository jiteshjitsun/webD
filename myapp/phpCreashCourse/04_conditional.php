<?php
    $t = date("H");

    if($t < 12){
        echo "Good Morining";
    }
    else if($t<17){
        echo "Good afternoon";
    }
    else{
        echo "Good evening";
    }
    // echo $t;

    $posts = ['first posts'];

    if(!empty($posts)){
        echo $posts[0];
    }


    // switch case 

    $fav = "blue";

    switch($fav){
        case 'red':
            echo "our fav color is red";
            break;
        case 'blue':
            echo "our fav color is blue";
            break;
        default:
            echo "our fav color is red";
            break;
    }
?>