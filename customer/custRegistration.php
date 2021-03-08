<!DOCTYPE html>
<html>
<head> <title> FoodShala </title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <style>
            .country { 
            background-color:#0390fc;
            color: white;
            font-size:40px; 
            padding: 5px;
            border-radius:15px;
            margin-top:20px; 
            }
            img {
              height:450px;
              width:500px;
              border-radius:40px;
            }
            a {
              text-decoration:none;
            }
            </style>

</head>
<body>
<?php  include ("../logo.php") ?>
</div>
<div class="container container-fluid">
            <form method="post" action="">
            <h1 style="text-align:center; margin:20px" class="country"><b>  Please Enter Your Correct Details </b> </h1> <br>
            <div class="row">
            <div class="col-md-6">

            <div class="form-group">
            <label><b> Name </b> </label>
            <input class="form-control" type="text" placeholder="Enter Name" name="name" required/> <br> <br>
            </div>

            <div class="form-group">
            <label><b> Email </b> </label>
            <input class="form-control" type="text" placeholder="Enter Email" name="email" required/> <br> <br>
            </div>

            <div class="form-group">
            <label> <b> Password:  </b> </label>
            <input class="form-control" type="password" placeholder="Enter Password" name="password" required/> <br> <br>
            </div>

            <div class="form-group">
            <label for="type"> <b> Your type: </b> </label>
            <select name="type" required>
            <option value="1">Veg</option>
            <option value="0">Non Veg</option>
            </select>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Register" name="submit"/>
            <span> Existing Member? <a href="custLogin.php"> Login </a> </span>
            </div>
            <div class="col-md-6"> 
            <img src="https://images.unsplash.com/photo-1592776361282-932899430ada?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDh8fGVhdGluZ3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
            alt="cust_image" class="img-responsive"
            >
            </div>
            </div>
            </form>
</div>
            </body>
</html>

<?php
include ("../connection/connection.php");
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $qry = "Insert into `customer` (`name`, `email`, `password`, `type`) Values ('$name', '$email', '$password', $type)";
    $result = mysqli_query($con, $qry);
    if($result == true) {
        ?>
        <script>
        alert("Registration Successful! Please Login to Continue");
        header('location:custLogin.php');
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("Something went wrong");
        header('location:custRegistration.php');
        </script>
        <?php
    }
}
?>