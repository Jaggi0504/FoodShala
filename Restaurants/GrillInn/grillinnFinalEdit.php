<?php
include "../../connection/connection.php";
if(isset($_POST['update1'])) {
    $id = $_POST['update1'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $qry = "UPDATE `grillinnmenu` SET `item`='$item', `price` = $price, `type`=$type WHERE id=$id ";
    $result = mysqli_query($con, $qry);
    if($result == true) {
        ?>
        <script>
        alert("Item Updated Successfully!");
        header('location:grillinnMenu.php');
        </script>
        <?php
    }

}
?>