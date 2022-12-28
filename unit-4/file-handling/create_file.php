<?php
    $myfile = fopen("web.txt", "w")
     or die("Unable to open file!");
    $txt = "Hello students";
    //Writing into a file
    fwrite($myfile, $txt);
    //Closing file
    fclose($myfile);
?>