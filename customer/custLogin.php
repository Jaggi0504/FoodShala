<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> <title> FoodShala </title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <style>
            .country { 
            background-color:#0390fc;
            color: white; 
            padding: 8px;
            border-radius:15px;
            margin-top:20px; 
            }
            img {
              height:350px;
              width:400px;
              border-radius:40px;
            }
            a {
              text-decoration:none;
            }
            </style>

</head>
<body>
        <?php include ("../logo.php")  ?>
<div class="container container-fluid">
            <form method="post" action="">
            <h1 style="text-align:center; margin:20px;" class="country"><b>  Please Enter Your Login Details </b> </h1> <br>
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <label><b> Email </b> </label>
            <input class="form-control" type="text" placeholder="Enter Email" name="email" required/> <br> <br>
            </div>
            <div class="form-group">
            <label> <b> Password:  </b> </label>
            <input class="form-control" type="password" placeholder="Enter Password" name="pass" required/> <br> <br>
            </div>
            <input type="submit" class="btn btn-primary" value="Login" name="submit"/>
            <span> New Member? <a href="custRegistration.php"> Register </a> </span>
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
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $qry = "Select * from `customer`where email = '$email' AND password = '$password' ";
  $result = mysqli_query($con, $qry);
  $row = mysqli_num_rows($result);
  if($row<1)
  {
    ?>
    <script>
    alert('Username or Password did not match');
    window.open('custLogin.php','_self');
    </script>
    <?php
  }
  else{
    $data = mysqli_fetch_assoc($result);
    $id = $data['id'];
    $email1 = $data['email'];
    $_SESSION['uid'] = $id;
    $_SESSION['uemail'] = $email1;
    header('location:../Order/restaurants.php');
  }
}
?>