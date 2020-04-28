<?php
include ('../includes/conn.php');

$orderid = $_GET['orderid'];
$ordernumber = $_GET['ordernumber'];
$productid = $_GET['productid'];

$delete = mysqli_query($conn,("DELETE FROM `orders` WHERE `order_id` = '$orderid' "));

if ($delete){
    $restore = mysqli_query($conn,("UPDATE `product` SET `stock` = `stock` + '$ordernumber' WHERE `product_id` ='$productid' "));
    $productorder = mysqli_query($conn,("UPDATE `product` SET `number_of_orders` = `number_of_orders` - '$ordernumber' WHERE `product_id` = '$productid' "));
    if ($restore){
        echo "<script>alert('Order deleted'); location.href='../views/dispatch.php';</script>";
    }

}
else{
    echo "<script>alert('Failed to delete order'); location.href='../views/dispatch.php';</script>";
}

?>