<?php
include ('../includes/conn.php');

if (isset($_POST['stock'])){
    $productid = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    $stock= mysqli_query($conn,("UPDATE `product` SET `stock` = `stock` + '$quantity' WHERE `product_id` = '$productid' "));

    if ($stock) {
        echo "<script>alert('Item stocked'); location.href='../views/priority.php';</script>";
    }
    else {
        echo "<script>alert('Failed'); location.href='../views/priority.php';</script>";
    }
}



?>