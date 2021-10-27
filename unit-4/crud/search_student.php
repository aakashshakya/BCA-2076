<?php 
ini_set ('display_errors', 1);
error_reporting (E_ALL | E_STRICT);
    include "database_configuration.php";
    if($_POST){ 
        $searched_field = $_POST["searched_field"];
        $sql = "SELECT * FROM students WHERE full_name LIKE '%".$searched_field."%';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $students[$i] = array(
                    "id" => $row['id'],
                    "full_name" => $row['full_name'],
                    "email" => $row['email'],
                    "address" => $row['address'],
                    "mobile_number" => $row['mobile_number'],
                    "user_info" => $row['user_info'],
                  );
                  $i++;
            }
            echo "<pre>";
            print_r($students);
        }
    }