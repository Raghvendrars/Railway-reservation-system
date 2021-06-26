<?php
    require("connection.php");
    extract($_POST);

    if(isset($btnInsert)){
        $train_num = $txtnum;
        $train_name= $txtname;
        $source = $txtsrc;
        $destination= $txtdest;
        $jdate = implode(',',$_POST["dt"]);
        $class = implode(',',$_POST["cl"]);
        // print_r($_POST);
        // exit();

        $q = "INSERT INTO train_schedule(train_num,train_name,source,destination,jdate,class) VALUES('$train_num','$train_name','$source', '$destination','$jdate','$class')";
        // print_r($q);
        // exit();

        $data = mysqli_query($con,$q);
        // print_r($data);
        // exit();
        if($data == true){
        
            header("Location:simple_datatables.php");
        }
    }
?>