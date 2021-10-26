
<?php
require_once('dbconnection.php');

$grno = $_POST['grno'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$mob = $_POST['mob'];
$add = $_POST['address'];

if (isset($_POST['insert'])) {
    $query = "INSERT INTO users(grno,name,dob,mob,address)
                VALUES('$grno', '$name', '$dob', '$mob', '$add')";
    mysqli_query($connect, $query);
} 
else {
    $id = $_POST['update'];
    $upd = "UPDATE users SET grno='$grno',name='$name',dob='$dob',mob='$mob',address='$address' WHERE id='$id'";
    mysqli_query($connect, $upd);
}
header('location: index.php');
?>
