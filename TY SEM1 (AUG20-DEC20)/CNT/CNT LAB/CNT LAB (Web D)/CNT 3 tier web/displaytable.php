<?php
require_once('dbconnection.php');
$sql = "select * from users";
$result = $connect->query($sql);
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Gr No</th>
            <th>Name</th>
            <th>Date-Of-Birth</th>
            <th>Mobile Number</th>
            <th>Address</th>
        </tr>
        </thead>
        <?php
        while ($rows = $result->fetch_assoc()) {
        ?>
            <tr>
                <th><?php echo $rows["grno"]; ?></th>
                <th><?php echo $rows["name"]; ?></th>
                <th><?php echo $rows["dob"]; ?></th>
                <th><?php echo $rows["mob"]; ?></th>
                <th><?php echo $rows["address"]; ?></th>
            </tr>
        <?php
        }
        ?>
</table>
