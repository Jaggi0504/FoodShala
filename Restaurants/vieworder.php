<?php
$restname=$_GET['restname'];
?>
<!DOCTYPE html>
<html>
<head> <title> FoodShala </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
             <style>
                 h1 {
                    font-family: 'Merriweather', serif;
                    text-align:center;
                    align-items:center;
                 }
                 select {
                     display:block;
                 }
                 </style>
</head>
<body>
<div class="container container-fluid">
<?php include ("../logo.php") ?>
<h1 style="text-transform:uppercase;"> <?php echo $restname ?> </h1>
<table class="striped" id="table">
        <thead id="thead">
          <tr>
              <th>Email</th>
              <th>Dishes</th>
              <th>Quantity</th>
          </tr>
        </thead>
        <?php
        @include "../connection/connection.php";
        $restname=$_GET['restname'];
        $qry = "SELECT * FROM `ordered` WHERE `restname` = '$restname' ";
        $result = mysqli_query($con,$qry);
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tbody id="tbody">
            <tr>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['dishes']?></td>
            <td><?php echo $row['quantity']?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
      </table>
</div>
</body>
</html>