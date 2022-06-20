<?php

// setting cookies
setcookie('name','jits',time()+86400*30);
setcookie('age','22',time()+86400*30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
    echo '<br>';
    echo $_COOKIE['age'];
}

// to unset cookies 

setcookie('name','sj',time()-86400);
    
?>