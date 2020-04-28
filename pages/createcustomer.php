<?php
include ('../includes/conn.php');

if (isset($_POST['create'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$insert = mysqli_query ($conn,("INSERT INTO `customer`(`name`,`email`,`phone`) VALUES ('$name','$email','$phone') "));

echo "<script>alert('Customer Added'); location.href='../views/createcustomer.php';</script>";
    



}

?>