<?php
    $user = "root";
    $pass = "";
    $db = "db";

    // connection stablishment 
    $con = mysqli_connect('localhost',$user,$pass,$db) or 
            die("connection failed" . mysqli_connect_error());
        
    echo "connection successfully";

    $sql = "select * from login";
    $res = mysqli_query($con,$sql);

    if($res>0){
        while(mysqli_fetch_assoc($res));
    }
    else{
        echo "now row";
    }