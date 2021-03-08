<!DOCTYPE html>
<html>
    <head> <title> FoodShala </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../style.css">
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
  border-bottom: 1px solid #ddd;
}
    </style>
<body>
    <?php include ("../../logo.php") ?>
    <h1 class="menuH1"> Grill-Inn </h1>
    <div class="container container-fluid">
    <table class="striped" id="table">
        <thead id="thead">
          <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Type</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php
        include("../../connection/connection.php");
        $qry = "SELECT * FROM `grillinnmenu` ";
        $result = mysqli_query($con, $qry);
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tbody id="tbody">
            <tr>
            <td><?php echo $row['item']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['type']==0?"Non Veg":"Veg"?></td>
            <td><a href="grillinnEdit.php?id=<?php echo $row['id']?>">Edit</a></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
      </table>
    </div>
    <div class="addItem">
    <h4 class="addItem"> Wish to add any item? <a href="grillinnAdd.php"> Add </a>  </h4>
    <h4 class="addItem">  <a href="../vieworder.php?restname=grillinn"> View Orders </a>  </h4>
    </div>
</body>
</html>