
<?php
require_once('dbconnection.php');

$grno = $_POST['grno'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$mob = $_POST['mob'];
$add = $_POST['address'];

$query = "INSERT INTO users
  			  VALUES('$grno', '$name', '$dob', '$mob', '$add')";

mysqli_query($connect,$query);

if (mysqli_error($connect))
    echo " record insertion error!";
else
    echo "record added successfully!";
    
header('location:index.php');
 
?>
