
<?php
require_once('config.php');

$cno = $_POST['con_no'];
$cname = $_POST['con_name'];
$cadd = $_POST['con_add'];
$mno = $_POST['meter_no'];
$prdate = $_POST['pdate'];
$pread = $_POST['preading'];
$cread = $_POST['creading'];
$cdate = $_POST['cdate'];

$query = "INSERT INTO users
  			  VALUES('$cno', '$cname', '$cadd', '$mno', '$prdate','$pread','$cdate','$cread')";

mysqli_query($connect,$query);

if (mysqli_error($connect))
    echo " record insertion error!";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bill</title>

<style>
    a{
        float: right;
        margin-right: 25px;
        text-decoration: none;
        background-color: black;
        color: white;
        padding: 4px;
        border-radius: 3px;
        font-weight: bold;
    }
    .container {
            width: 50%;
            margin: auto;
        }

</style>
</head>
<body>

<a href="index.php">Go Back</a>

<div class="container">
    <h3>Consumer No : <?php echo $cno; ?></h3>

    <h3>Consumption Value Per Unit : Rs 10/-</h3>

    <h3>Your Consumption is : <?php echo ($cread-$pread); ?> Units</h3>

    <h3>Your total Bill is : <?php echo ($cread-$pread)*10; ?>/- </h3>

    </div>
</body>
</html>
