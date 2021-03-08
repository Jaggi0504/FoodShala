<?php
include ("../connection/connection.php");
session_start();
$id = $_SESSION['uid'];
$qry = "Select email from `customer` where `id` = $id ";
$result = mysqli_query($con, $qry);
if($result == true) {
    $data = mysqli_fetch_assoc($result);
    $email = $data['email'];
}
?>

<!DOCTYPE html>
<html>
    <head> <title> FoodShala </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  text-transform:uppercase;
}
.btnPay {
    color:white;
    background-color:#0390fc;
    padding: 5px 20px;
    border-radius:4px;
}
    </style>
<body>
    <div class="container container-fluid">
    <?php include ("../logo.php");
    echo "<h5 style='text-align:center;color:#0390fc'>Email: $email </h5>"
    ?>
    <h1 class="menuH1"> Your Order Summary </h1> <br>
    <div class="container container-fluid">
    <table class="striped" id="table">
        <thead id="thead">
          <tr>
              <th>Item(s)</th>
          </tr>
          <?php
          $price = $_GET['price'];
          @$quantity = $_GET['quantity'];
          $totaldishes = $_GET['totaldishes'];
          $splittedQuantity = explode(":", $quantity);
          ?>
          <tr>
          <?php
          $splittedDishes = explode(":",$totaldishes);
          foreach($splittedDishes as $value1 ) {
            echo '<td>'.$value1.'</td>';
          }
          ?>
          </tr>
             <th>Corresponding Quantity</th>
             <tr>
             <?php
            foreach($splittedQuantity as $value2) {
                echo '<td>'.$value2.'</td>';
            }
             ?>
             </tr>
             <th>Amount to be Paid (in Rs)</th>
             <?php
             echo "<tr><td>  $price </tr></td>";
             ?>
             <th> Proceed to Pay </th>
             <tr><td>
             <form method="post" action="">
             <input type="submit" value="Pay Now" class="btnPay" name="submit">
             </form>
             </td></tr>
          </div>

        </thead>
      </table>
    </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
    $restname=$_GET['restname'];
    $amount=$_GET['price'];
    for($i=0, $j=0; $i<count($splittedDishes), $j<count($splittedQuantity);$i++, $j++) {
        $qry="Insert into `ordered` (`email`, `restname`, `dishes`, `quantity`) Values
         ('$email', '$restname', '$splittedDishes[$i]', '$splittedQuantity[$j]')";
         $result=mysqli_query($con, $qry);
        }
    if($result==true) {
        ?>
        <script> 
        alert("Items successfully added into the Database!")
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("Some Problem occured!")
        </script>
        <?php
    }

}
?>