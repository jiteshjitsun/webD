<?php
    $fruits = ['apple','orange','pear'];
    // echo count($fruits);
    array_push($fruits,'blueberry','strawberry');
    array_unshift($fruits, "mango");
    array_shift($fruits);
    array_pop($fruits);
    // unset($fruits[2]);
    $chunked_array = array_chunk($fruits,2);
    // print_r($fruits);
    
    // var_dump(in_array('apple',$fruits));


    $arr1 = [1,2,3,4];
    $arr2 = [5,6,7,8];

    $arr3 = array_merge($arr1,$arr2);

    // print_r($arr3);

    $arr4 = array_combine($arr1,$arr2);

    // print_r($arr4);

    $arr5  = array_flip($arr4);

    // print_r($arr5);

    $arr6 = range(0,10);

    // print_r($arr6);


    $newNumbers = array_map(function($arr6){
        return "Number ${arr6}";
    }, $arr6);

    $lessThan5 = array_filter($arr6, fn($arr6)=>
    $arr6<=5);

    // print_r($newNumbers);

    $sum = array_reduce($arr6, fn($carry, $arr6)=>
    $carry + $arr6);

    var_dump($sum);
?> 