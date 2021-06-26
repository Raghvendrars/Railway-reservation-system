<?php
class dbconnect
{
    function connect()
    {
        $connection=mysqli_connect("localhost","root","","train_details");
				return $connection;
    }
}
?>