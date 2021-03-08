<?php
include "../../connection/connection.php";
$id = $_GET['id'];
$qry = "SELECT * FROM `grillinnmenu` WHERE id = $id ";
$result = mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head> <title> FoodShala </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="style.css">
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
<?php include ("../../logo.php") ?>
<h1> Update an Item </h1>
<form method = "post" action = "grillinnFinalEdit.php">
<input type="hidden" value="<?php echo $row['id'] ?>" name = "update1">
<input type="text" placeholder="Enter Name" name="item" value="<?php echo $row['item']?>"/>
<input type="number" placeholder="Enter Price" name="price" value="<?php echo $row['price']?>"/>
<div class="form-group">
            <select name="type" required>
            <option value="1">Veg</option>
            <option value="0">Non Veg</option>
            </select>
            </div>
<input type="submit" value="Edit Details" name="submit" style="font-family:'Merriweather', serif;background-color:#4de866;">
</form>
</div>
</body>
</html>