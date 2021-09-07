<!-- <pre> -->
<?php
    // print_r($_POST);
    if($_POST) {
        echo "Thank you for registering. <br />";
        echo "Your name is ".$_POST['first_name']." ".$_POST['middle_name']." ".$_POST['last_name'];
        echo "<br />Your date of birth is ".$_POST['date_of_birth'];
        $gender = "";
        if($_POST['gender'] == "male") {
            $gender = "son";
        } else {
            $gender = "daughter";
        }
        echo "<br />Your are ".$gender." of ".$_POST['father_name']." and ".$_POST['mother_name'];
    }
?>
<!-- </pre> -->