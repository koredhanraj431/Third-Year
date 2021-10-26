<?php 
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3695790714.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon-16x16.png">

    <title>Ebill Calculator</title>

    <style>
        body{
            background-color: burlywood;
        }
        .container {
            width: 50%;
            margin: auto;
        }
    </style>

</head>

<body>

<h3 class="text-center" style="margin-top: 25px;">Welcome to EBill Calculator</h3>

    <div class="container" style="margin-top: 50px;">
        <h3>View/Pay Bill</h3><br>
        <form action="insert.php" class="form-horizontal" role="form" method="POST">
            <div class="form-group">
                <label class="col-md-3 control-label">Consumer No :</label>
                <div class="col-md-8">
                    <input class="form-control" name="con_no" type="number" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Consumer Name :</label>
                <div class="col-md-8">
                    <input class="form-control" name="con_name" type="text" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Consumer Address :</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="con_add" id="birth-date" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Meter Number : </label>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="meter_no" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Previous Date : </label>
                <div class="col-md-8">
                    <input class="form-control" name="pdate" placeholder="dd/mm/yyyy" type="date">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Previous Reading : </label>
                <div class="col-md-8">
                    <input class="form-control" name="preading" type="number">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Current Date : </label>
                <div class="col-md-8">
                    <input class="form-control" placeholder="dd/mm/yyyy" name="cdate" type="date">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Current Reading : </label>
                <div class="col-md-8">
                    <input class="form-control" name="creading" type="number">
                </div>
            </div>

            <div class="text-center" style="margin: 20px;">
                <button type="submit" class="btn btn-primary">Check Bill</button>
            </div>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>