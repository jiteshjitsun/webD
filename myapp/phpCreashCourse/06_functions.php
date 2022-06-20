<?php
    $x = 10;
    function callMe($arg){
        global $x;
        echo $x;
        echo $arg . "chal raha hu";
    }

    function add($a,$b){
        return $a+$b;
    }

    $number =  add(1,2);
    echo $number;
    

    callMe("jites mai ");
?>