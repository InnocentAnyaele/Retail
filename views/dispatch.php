<?php
$title = "Dispatch";
$process = "Dispatch";
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

$order = mysqli_query($conn,("SELECT customer.name AS customername, customer.customer_id AS customerid, customer.email AS customeremail, customer.phone AS customerphone, product.name AS productname, product.location AS productlocation, product.product_id AS productid, orders.number AS ordernumber, orders.order_id AS orderid,  orders.date AS orderdate FROM customer, product, orders WHERE orders.customer_id = customer.customer_id AND orders.product_id = product.product_id ORDER BY orders.date ASC"));


while ($row = mysqli_fetch_assoc($order)){

?>

<div class="jumbotron text-left shadow p-3 mb-3 rounded" style="margin-top: 20px; margin-left:10px; width: 900px;">
    <h4 style="color: red;"><?php echo $row['customername'];  ?></h4><br>
    <h6>Order -  <?php echo $row['productname'];  ?></h6>
    <h6>Number -  <?php echo $row['ordernumber'];  ?></h6>
    <h6>Location - <?php echo $row['productlocation']; ?></h6>
    <h6>Date -  <?php echo $row['orderdate'];  ?></h6><br>

    <ul>
        <li>   Email - <?php echo $row['customeremail']; ?> </li>
        <li> Phone - <?php echo $row['customerphone']; ?> </li>
    </ul>


<a style="margin-right: 1-px;" href="admin.php"><-back</a> 
<div class="container text-right">
<a href="../pages/completeorder.php?orderid=<?php echo $row['orderid']; ?>&customerid=<?php echo $row['customerid']; ?>&productid=<?php echo $row['productid'] ?>&ordernumber=<?php echo $row['ordernumber'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-check"></i></a>
<a href="../pages/deleteorder.php?orderid=<?php echo $row['orderid']; ?>&ordernumber=<?php echo $row['ordernumber'] ?>&productid=<?php echo $row['productid'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
</div>
 
</div> <button class="btn btn-"></button>

<?php
}
?>
</div>
</body>
</html>