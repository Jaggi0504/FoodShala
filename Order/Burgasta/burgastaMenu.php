<?php
session_start();
?>
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
.loginFirst, .logoutFirst {
  font-size:20px;
  float:right;
}
.finalAmount {
  margin-top:20px;
  text-align:center;
  align-items:center;
}
.btnFinalAmount {
  background-color:#0390fc;
  color:white;
}
.btn {
  padding: 10px 25px;
}
.btnminus {
 padding: 8px 25px;
}
.btn, .btnminus {
  background-color:#0390fc;
  color:white;
  border-radius:15px;
}
    </style>
<body>
    <div class="container container-fluid">
    <?php include ("../../logo.php") ?>
    <?php
    if(@$_SESSION['uid']) {echo '<a class = "logoutFirst" href="../../customer/logout.php"> Logout </a>';}
    else {echo '<a class = "loginFirst" href="../../customer/custLogin.php"> Login </a>';}
    ?>
    <h1 class="menuH1"> Burgasta </h1>
    <div class="container container-fluid">
    <table class="striped" id="table">
        <thead id="thead">
          <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Type</th>
              <th>Quantity</th>
          </tr>
        </thead>
        <?php
        include("../../connection/connection.php");
        $qry = "SELECT * FROM `burgastamenu` ";
        $result = mysqli_query($con, $qry);
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tbody id="tbody">
            <tr>
            <td class="dishname"><?php echo $row['item']?></td>
            <td class="price"><?php echo $row['price']?></td>
            <td><?php echo $row['type']==0?"Non Veg":"Veg"?></td>
            <td>
            <input class="demoInput" type=number value="0" min=0 max=50>
            <button class="btn"> + </button>
            <button class="btnminus"> - </button>
            </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
      </table>
      <div class="finalAmount">
      <button type="button" id="addtocart" class="btnFinalAmount">Check Final Amount</button>
      </div>
    </div>
    <div style="display:none" id="lastprice" class="finalAmount"><h3>Total Price: Rs <span id="overallprice"></span> 
    <button type="button" id="ordernow" class="btnFinalAmount" >Order</button></h3></div>
      </div>
</body>
<script>

      const btnselection = document.getElementsByClassName("btn");

      for(let i=0;i<btnselection.length;i++){
        btnselection[i].addEventListener('click',(e) =>{
        const prevalue = parseInt(e.target.previousElementSibling.value) + 1;
        e.target.previousElementSibling.value = prevalue;
      })
      }

      const btnminus= document.getElementsByClassName("btnminus");
      for(let i=0;i<btnminus.length;i++){
        btnminus[i].addEventListener('click',(e) =>{
        if(parseInt(e.target.previousElementSibling.previousElementSibling.value)!=0){
        const prevalue = parseInt(e.target.previousElementSibling.previousElementSibling.value) - 1;
        e.target.previousElementSibling.previousElementSibling.value = prevalue;
        }
      })
      }

       document.getElementById("addtocart").addEventListener("click",()=>{
        const qty = document.getElementsByClassName("demoInput");
        const price = document.getElementsByClassName("price");
        const dishname = document.getElementsByClassName("dishname");
        let totalprice=0;
        let str="";
        let str1="";
        let quantity = 0;
        let quantity1 = 0;
      for(let i=0;i<qty.length;i++){
        totalprice = totalprice + parseInt(qty[i].value) * parseInt(price[i].innerText)
        if(qty[i].value!=0){
        str = str + dishname[i].innerText+":"
        quantity = quantity + parseInt(qty[i].value)+":"
         str1= str.slice(0, str.length-1);
          quantity1 = quantity.slice(0,quantity.length-1);
        }

      }
      if(totalprice != "0"){
        document.getElementById("lastprice").style.display="block";
        document.getElementById("overallprice").innerHTML = totalprice;
      }else{
        alert("Please add something to the Cart!")
      }

      document.getElementById("ordernow").addEventListener('click',()=>{
          <?php 
          if(@$_SESSION['uid']) {
            ?>
            window.location.href="../ordernow.php?price="+totalprice+"&quantity="+quantity1+"&totaldishes="+str1+"&restname=Burgasta";
            <?php
          } else {
            ?>
            window.alert("Please Login First.");
            <?php
          }  
          ?>
       })
       })




</script>
</html>