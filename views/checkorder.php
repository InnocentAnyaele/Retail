<?php
$title = "Check Order";
$process = "Check Order";
include ('../includes/tags.php');
include ('../includes/nav.php');
if (!isset($_SESSION['position'])){
header ('location: ../index.php');
}

?>

<body>

<div class="container">
<?php
include ('../includes/conn.php');

$order = mysqli_query($conn,("SELECT customer.name AS customername, product.name AS productname, orders.number AS ordernumber, orders.date AS orderdate FROM customer, product, orders WHERE orders.customer_id = customer.customer_id AND orders.product_id = product.product_id"));


while ($row = mysqli_fetch_assoc($order)){

?>

<div class="jumbotron shadow p-3 mb-3 rounded" style="margin-top: 20px; margin-left:10px; width: 900px;">
    <h4 style="color: red;"><?php echo $row['customername'];  ?></h4>
    <h6>Order -  <?php echo $row['productname'];  ?></h6>
    <h6>Number -  <?php echo $row['ordernumber'];  ?></h6>
    <h6>Date -  <?php echo $row['orderdate'];  ?></h6><br>
    <a style="margin-right: 1-px;" href="admin.php"><-back</a>
</div>

<?php
}
?>
</div>
</body>
</html>