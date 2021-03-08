<!DOCTYPE HTML>
<html>
<head> <title> FoodShala </title>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../style.css">
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
<div class="container">
<?php include ("../../logo.php")?>
<h1> Add an Item </h1>
<form method="post" action="">
<input type="text" placeholder="Enter Name" name="name" required/>
<input type="number" placeholder="Enter Amount" name="price" required/>
<div class="form-group">
            <select name="type" required>
            <option value="1">Veg</option>
            <option value="0">Non Veg</option>
            </select>
            </div> <br>
<input type="submit" value="Add Item" name="submit" style="background-color:#0390fc;color:white;font-size:20px;">
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    include("../../connection/connection.php");
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $qry = "INSERT INTO `grillinnmenu` (`item`, `price`, `type`) VALUES ('$name', $price, $type)";
    $result = mysqli_query($con, $qry);
    if($result == true) {
        ?>
        <script>
        alert("Item added successfully!");
        header('location:grillinnMenu.php');
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("Something went wrong");
        header('location:grillinnAdd.php');
        </script>
        <?php
    }
}
?>