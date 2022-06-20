<?php
    $x = 5;
    $y = 8;


    function myTest(){
        global $x,$y;
        echo "<p>VAriable x inside function is: $x</>";

        $GLOBALS['x'] = $GLOBALS['x']+ $GLOBALS['y'];
    }

    myTest();
    echo "<p>VAriable x inside function is: $x</>";

?>