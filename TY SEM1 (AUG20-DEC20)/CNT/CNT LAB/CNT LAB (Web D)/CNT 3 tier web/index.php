<?php 
require_once('dbconnection.php');
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

  <title>CNT 3 Tier Web</title>

</head>

<body>
 

  <div class="container" style="margin-top: 100px;">

    <div class="row">
      
      <div class="col-md-9 personal-info">

        <h3>CNT 3 TIER WEB</h3><br>

        <form action="insertrecord.php" class="form-horizontal" role="form" method="POST">
        <div class="form-group">
            <label class="col-md-3 control-label">GR NO :</label>
            <div class="col-md-8">
              <input class="form-control" name="grno" type="text"required>
            </div>
          </div>  

          <div class="form-group">
            <label class="col-md-3 control-label">Name  :</label>
            <div class="col-md-8">
              <input class="form-control" name="name" type="text"required>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Date of Birth :</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="dob" placeholder="dd/mm/yyyy" id="birth-date" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Mobile Number : </label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="mob" id="phone-number" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Your Address : </label>
            <div class="col-md-8">
              <input class="form-control" name="address" name="address" type="text">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        


      </div>
    </div>
  
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