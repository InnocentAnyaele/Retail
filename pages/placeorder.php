<?php
include ('../includes/conn.php');

if (isset($_POST['order'])){

$product_id = $_POST['product'];
$customer_id = $_POST['customer'];
$number_of_orders = $_POST['number'];

$select = mysqli_query($conn,("SELECT * FROM `product` WHERE `product_id` = '$product_id' AND `stock`>'$number_of_orders' "));

if (mysqli_num_rows($select)>0){
    $insert = mysqli_query($conn,("INSERT INTO `orders`(`customer_id`,`product_id`,`number`) VALUES ('$customer_id','$product_id','$number_of_orders') "));
    $decrease = mysqli_query($conn,("UPDATE `product` SET `stock` = `stock` - $number_of_orders WHERE `product_id` = '$product_id' "));
    $productorder = mysqli_query($conn,("UPDATE `product` SET `number_of_orders` = `number_of_orders` + '$number_of_orders' WHERE `product_id` = '$product_id' "));
    echo "<script>alert('Order Placed'); location.href='../views/placeorder.php';</script>";
}

else {
    echo "<script>alert('Insufficient Stock for this Order'); location.href='../views/placeorder.php';</script>";
}


    



}

?>