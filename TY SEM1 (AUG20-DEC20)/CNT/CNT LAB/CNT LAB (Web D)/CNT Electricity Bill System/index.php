<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3695790714.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon-16x16.png">

    <title>Welcome to MSEDCL</title>

    <style>
        body {
            font-family: Montserrat;
        }

        .top {
            display: flex;
            justify-content: space-between;
            padding: 4px;
            height: 10%;
            margin: 0 10px 0 10px;
        }

        .item {
            font-size: 90%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            padding: 2px;
        }

        .item p,
        h4 {
            color: red;
            font-weight: bold;
        }

        .item h3 {
            font-weight: bold;
        }

        .item p {
            float: right;
        }

        ul li {
            padding: 0 4px 0 4px;
        }

        ul li a {
            font-size: 20px;
            color: white;
        }
        ul li a:hover{
            color: red;
        }

    </style>
</head>

<body>

    <div class="top sticky-top">
        <div class="item">
            <img src="./Images/logo_main.jpg" alt="logo">
        </div>

        <div class="item">
            <h3>Maharashtra State Electricity Distribution Co. Ltd.</h3>
        </div>
        <div class="item">
            <h4>National Toll Free</h4>
            <i class="fas fa-phone-alt" aria-hidden="true">&nbsp;&nbsp;<p>1912 / 19120</p></i>

        </div>
        <div class="item">
            <h4>MSEDCL Toll Free</h4>

            <i class="fas fa-phone-alt" aria-hidden="true">&nbsp;&nbsp;<p>1800-102-3435 &nbsp;
                    &nbsp;1800-233-3435</p></i>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <a class="navbar-brand text-light" href="#" style="margin-left: 25px; font-size:20px;">MSEDCL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Complaints</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Policies</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>