<?php
include ("../connection/connection.php");
session_start();
@$id = $_SESSION['uid'];
$qry = "Select email from `customer` where `id` = $id ";
$result = mysqli_query($con, $qry);
if($result == true) {
    $data = mysqli_fetch_assoc($result);
    $email = $data['email'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> FoodShala </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin-bottom:35px;
        }
        h1 {
            margin-top: 10px;
            text-align: center;
            color: #0390fc;
            font-size:55px;
        }
        .checked {
        color: orange;
        }
        .rating {
            margin:auto;
            padding:auto;
        }

        img {
            width: 300px;
            height: 300px;
            margin-top: 50px;
            border-radius: 50px;
            margin-left: auto;
        }

        a:link,
        a:visited {
            color: #0390fc;
            margin-top:5px;
            font-size:20px;
            text-align:center;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            border-radius:25px;
            display: inline-block;
        }
        .styled-image:hover {
            transform: scale(1.1);
            transition: 0.5s all ease-in-out;`
        }
        .loginFirst, .logoutFirst {
            margin-right:auto;
            padding:auto;
            float:right;
        }
    </style>
</head>

<body>
    <div class="container container-fluid">
    <h1> FoodShala </h1>
    <?php
    if(@$_SESSION['uid']) {echo '<a class = "logoutFirst" href="../customer/logout.php"> Logout </a>';;}
    else {echo '<a class = "loginFirst" href="../customer/custLogin.php"> Login </a>';}
    ?>
    <?php include ("../logo.php")   ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1508424757105-b6d5ad9329d0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTZ8fHJlc3RhdXJhbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive styled-image"
                >
                <div class="rating">
                <a href="GrillInn/grillinnMenu.php"> Grill-Inn </a>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1555992336-03a23c7b20ee?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTh8fHJlc3RhdXJhbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive styled-image"
                >
                <div class="rating">
                <a href="CakeHouse/cakeHouseMenu.php"> Cake House </a>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span>
                <span class="fa fa-star"></span>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1579764578151-25a817b0bf06?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTQwfHxyZXN0YXVyYW50fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive styled-image"
                >
                <div class="rating">
                <a href="Burgasta/burgastaMenu.php"> Burgasta </a>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1584362066939-5982187ab049?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjEzfHxyZXN0YXVyYW50fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive styled-image"
                >
                <div class="rating">
                <a href="Boston/bostonMenu.php"> Boston </a>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>