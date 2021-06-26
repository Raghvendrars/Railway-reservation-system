<?php
    require("connection.php");
    extract($_POST);

    if(isset($btnInsert)){
        $username = $txtname;
        $phone = $txtph;
        $email = $txtemail;
        $password = $txtpass;
        
        // print_r($_POST);
        // exit();

        $q = "INSERT INTO users(username,phone,email,password) VALUES('$username','$phone','$email',
        '$password')";
        // print_r($q);
        // exit();

        $data = mysqli_query($con,$q);
        // print_r($data);
        // exit();
        if($data == true){
        
            header("Location:users.php");
        }
    }
?>