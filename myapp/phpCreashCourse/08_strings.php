<?php
    $string = "Hello world";

    echo strlen($string);
    echo "<br>";
    // find position of first occurence
    echo strpos($string, 'o');
    echo "<br>";

    // find pos of last of letter in a string
    echo strrpos($string, 'o');
    echo "<br>";

    // reverse a string 
    echo strrev($string);
    echo "<br>";

    // to uppercase
    echo strtoupper($string);
    echo "<br>";

    // to lower case
    echo strtolower($string);
    echo "<br>";

    // uppercase the first letter of the word
    echo ucwords($string);
    echo "<br>";

    // replace word in a string 
    echo str_replace('world','jitesh',$string);
    echo "<br>";

    // substring 
    echo substr($string,0,5);
    echo "<br>";

    echo substr($string,5);
    echo "<br>";

    // if string starts with the word
    if(str_starts_with($string,'Hello')){
        echo "Yes";
    }
    echo "<br>";

    // if string ends with the word
    if(str_ends_with($string,'world')){
        echo "Yes";
    }

    echo "<br>";
    
    $string2 = "<script>alert('hello')</script>";

    // echo $string2;
    echo "<br>";
    echo htmlspecialchars($string2);
    echo "<br>";

    printf("%s is doing B.Tech from Geu","jitesh");

    



?>