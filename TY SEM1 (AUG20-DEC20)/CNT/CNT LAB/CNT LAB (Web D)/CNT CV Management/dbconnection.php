<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentscv";

// create connection 
$connect = new mysqli($servername, $username, $password, $dbname);

// check connection 
if ($connect->connect_error)
    echo "Database connection failed: ";

else
 echo "Database connected successfully!";

 ?>