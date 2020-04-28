<?php
include ('../includes/conn.php');

$orderid = $_GET['orderid'];
$customerid = $_GET['customerid'];
$new = 1;
$productid = $_GET['productid'];
$ordernumber = $_GET['ordernumber'];

$complete = mysqli_query($conn,("DELETE FROM `orders` WHERE `order_id` = '$orderid' "));

if ($complete){
    $purchase = mysqli_query($conn,("UPDATE `customer` SET `credit_worthiness` = `credit_worthiness` + '$new' WHERE `customer_id` = '$customerid' "));
    $productorder = mysqli_query($conn,("UPDATE `product` SET `number_of_orders` = `number_of_orders` - '$ordernumber' WHERE `product_id` = '$productid' "));
    if ($purchase){
        echo "<script>alert('Order Completed'); location.href='../views/dispatch.php';</script>";
    }   
}
else{
    echo "<script>alert('Failed to complete order'); location.href='../views/dispatch.php';</script>";
}

?>