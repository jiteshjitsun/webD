<?php

    // simple arrays 
    $numbers = [1,2,3,4];
    $fruits = array('oranges','mangoes','banana');

    // associative arrays
    $arr = array(
                    "raj"=>22,
                    "adi"=>3,
                    "sk"=>49,
                    "vipul"=>55
    );

    $json = [
        [
            "1"=>"jelo",
            "2"=>"mee",
            "3"=>"lol"
        ],
        [
            "4"=>"aosni",
            "5"=>"injsn",
            "6"=>"uikl"
        ]
    ];

    print_r($numbers);
    var_dump(($numbers));
    echo $fruits[1];
    echo $arr["raj"];
    echo $json[1]["4"];
?>