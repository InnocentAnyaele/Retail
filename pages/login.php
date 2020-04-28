<?php
include ('../includes/conn.php');
session_start();

if (isset($_POST['login'])){
    $position = $_POST['position'];
    $password = $_POST['password'];

$select = mysqli_query($conn,("SELECT * FROM `staff` WHERE `name` = '$position' AND `password` = '$password' "));
 if (mysqli_num_rows($select)>0){
     $_SESSION['position'] = $position;
header ('location: ../views/admin.php');
 }

 else {
    echo "<script>alert('Invalid Credentials'); location.href='../index.php';</script>";
 }

}



?>