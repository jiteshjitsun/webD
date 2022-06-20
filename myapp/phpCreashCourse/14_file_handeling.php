<?php
    // it is the ability to read and write file on the server
    // php has built in function for writing and reading files.

    $file = 'extras/users.txt';

    if(file_exists($file)){
        // echo readfile($file);

        $handle = fopen($file,'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
        
    }

    else{
        $handle = fopen($file,'w');
        $contents = 'Brad' . PHP_EOL . 'Sara';
        fwrite($handle,$contents);
        fclose($handle);
    }

?>