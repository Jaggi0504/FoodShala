<!DOCTYPE html>
<html>

<head>
    <title> FoodShala </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        .newRegistration {
            text-align:center;
            align-items:center;
            font-size:20px;
        }
    </style>
</head>

<body>
    <h1> FoodShala </h1>
    <?php include ("../logo.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1508424757105-b6d5ad9329d0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTZ8fHJlc3RhdXJhbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive"
                >
                <a href="GrillInn/grillInnLogin.php"> Grill-Inn </a>
            </div>
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1555992336-03a23c7b20ee?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTh8fHJlc3RhdXJhbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive"
                >
                <a href="CakeHouse/cakeHouseLogin.php"> Cake House </a>
            </div>
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1579764578151-25a817b0bf06?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTQwfHxyZXN0YXVyYW50fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive"
                >
                <a href="Burgasta/burgastaLogin.php"> Burgasta </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1584362066939-5982187ab049?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjEzfHxyZXN0YXVyYW50fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="R1" class="img-responsive"
                >
                <a href="Boston/bostonLogin.php"> Boston </a>
            </div>
        </div>
        <div class="newRegistration">
        <span>New Member? <a href="restRegistration.php"> Register </a> </span>
        </div>
    </div>
</body>

</html>