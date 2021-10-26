<?php
include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/3695790714.js" crossorigin="anonymous"></script>
  <link rel="icon" href="images/favicon-16x16.png">

  <title>Students CV Management</title>

</head>

<body>

  <?php
  if (isset($_POST['edit'])) {
    $id = $_POST['edit'];
    $qr = "SELECT * FROM users WHERE id='$id'";
    $result = $connect->query($qr);
    $rows = $result->fetch_assoc();
  }

  if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $del = "DELETE FROM users WHERE id='$id'";
    mysqli_query($connect, $del);
    echo "<script type = \"text/javascript\">
											alert(\"Record deleted Succesfully...\");
											window.location = (\"index.php\")
											</script>";
  }

  ?>
  <div class="container" style="margin-top: 100px;">

    <div class="row">

      <div class="col-md-9 personal-info">

        <h3>Students CV Management</h3><br>

        <form action="insertrecord.php" class="form-horizontal" role="form" method="POST">
          <div class="form-group">
            <label class="col-md-3 control-label">GR NO :</label>
            <div class="col-md-8">
              <input class="form-control" name="grno" value="<?php if (isset($_POST['edit'])) echo $rows["grno"]; ?>" type="text" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Name :</label>
            <div class="col-md-8">
              <input class="form-control" name="name" value="<?php if (isset($_POST['edit'])) echo $rows["name"]; ?>" type="text" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Date of Birth :</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="dob" value="<?php if (isset($_POST['edit'])) echo $rows["dob"]; ?>" placeholder="dd/mm/yyyy" id="birth-date" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Mobile Number : </label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="mob" value="<?php if (isset($_POST['edit'])) echo $rows["mob"]; ?>" id="phone-number" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Your Address : </label>
            <div class="col-md-8">
              <input class="form-control" name="address" value="<?php if (isset($_POST['edit'])) echo $rows["address"]; ?>" name="address" type="text">
            </div>
          </div>
          <?php if (isset($_POST['edit'])) {
          ?>
            <button type="submit" name="update" value="<?php echo $rows["id"];?>" class="btn btn-primary">Modify Record</button>

          <?php } else {
          ?>
            <button type="submit" name="insert" class="btn btn-primary">Submit</button>
          <?php
          } ?>

        </form>
      </div>
    </div>

    </table>
    <?php
    require_once('displaytable.php');
    ?>
  </div>






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>

<!-- CREATE TABLE `studentscv`.`users` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `grno` INT(8) NOT NULL , `name` VARCHAR(20) NOT NULL , `dob` VARCHAR(10) NOT NULL , `mob` VARCHAR(12) NOT NULL , `address` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; -->