<?php
$title = "Priority";
$process = "Priority Re-Ordering";
include ('../includes/tags.php');
include ('../includes/nav.php');
if (!isset($_SESSION['position'])){
header ('location: ../index.php');
}
?>

<body>
<div class="container">
<!-- <div class="container text-center">
    <h3>Stock are in decreasing number of priority based on their number of orders</h3>
</div> -->

<?php
include ('../includes/conn.php');

// $order = mysqli_query($conn,("SELECT product.name AS productname, product.stock AS productstock, product.product_id AS productid, COUNT(orders.order_id) AS number_of_orders FROM  product, orders"));
$order = mysqli_query($conn,("SELECT * FROM product ORDER BY  stock ASC "));


while ($row = mysqli_fetch_assoc($order)){

?>

<div class="jumbotron text-left shadow p-3 mb-3 rounded" style="margin-top: 20px; margin-left:10px; width: 900px;">
    <h4 style="color: red;"><?php echo $row['name'];  ?></h4><br>
    <h6>Location -  <?php echo $row['location'];  ?></h6>
    <h6>Stock - <?php echo $row['stock'];  ?></h6>
    <h6>Orders - <?php echo $row['number_of_orders']; ?></h6><br>
   <small><i>Products are arranged in lower stock levels first with the number of orders next to them. Products with outstanding level orders are considered <b><span style="color:red;">priority</span></b></i></small><br><br>

<a style="margin-right: 1-px;" href="admin.php"><-back</a> 
<div class="container text-right">
    <form method="post" action="">
        <input type="text" value="<?php echo $row['name']; ?>" name="productname" hidden>
        <input type="text" value="<?php echo $row['product_id']; ?>" name="product_id" hidden>
<button class="btn btn-sm btn-primary" name="requeststock" ><i class="fas fa-plus"></i></button>
</form>
</div>
 
 
</div> <button class="btn btn-"></button>

<?php
}
?>

<?php

if (isset($_POST['requeststock'])){
    $productname = $_POST['productname'];
    $product_id = $_POST['product_id'];
?>

<div id="restock" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <form class="form-group" action="../pages/restock.php" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="col-12 modal-title text-center">Restock <?php echo $productname; ?></h4>
      </div>
      <div class="modal-body">
          <input type="number" name="product_id" value="<?php echo $product_id ?>" hidden>
      <input class="form-control" type="number" placeholder="Quantity" name="quantity" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
        <button class="btn btn-primary" name="stock"><i class="fas fa-plus"></i> Stock</button>
      </div>
    </div>
    </form>

  </div>
</div>

<?php
echo "<script type='text/javascript'>
$(document).ready(function(){
$('#restock').modal('show');
 });
 </script>";
}
?>
</div>
</body>
</html>