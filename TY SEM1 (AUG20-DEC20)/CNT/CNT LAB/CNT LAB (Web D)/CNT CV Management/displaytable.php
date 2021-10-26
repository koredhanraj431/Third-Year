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
            <form action="index.php" method="POST">
            <th> <button type="submit" class="btn btn-primary" name="edit" value="<?php echo $rows["id"];?>">Edit</button>
            </th>
            <th> <button type="submit" class="btn btn-danger" name="delete" value="<?php echo $rows["id"];?>">Delete</button>
            </th></form>
        </tr>
    <?php
    }
    
    ?>
</table>