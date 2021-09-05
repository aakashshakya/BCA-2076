<?php 
    if($_GET){
        echo "This is from GET request <br/>";
        echo "Thank you ".$_GET['full_name']." from ".$_GET['country']." for registering to our website.
     Your login email address is ".$_GET['email_address'];
    } else if($_POST) {
        echo "This is from POST request <br/>";
        echo "Thank you ".$_POST['full_name']." from ".$_POST['country']." for registering to our website.
     Your login email address is ".$_POST['email_address'];
    }

    if($_FILES) {
        echo "<br />Yes profile picture is added.";
    }
    
?>