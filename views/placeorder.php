<?php
$title = "Place Order";
$process = "Place Order";
include ('../includes/tags.php');
include ('../includes/conn.php');
include ('../includes/nav.php');
if (!isset($_SESSION['position'])){
header ('location: ../index.php');
}
?>

<body>

<style>
	body{
		background-image: url('../assets/img/bg10.jpg');
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>

<!-- 
<style>
	body{
		background-image: url('../assets/img/bg7.jpg');
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style> -->

<div class="container " style="width: 400px; margin-top:100px;  backdrop-filter: blur(5px); ">
		<form method="post" action="../pages/placeorder.php">
			<h4 class="text-center"><a class="fas fa-cart-plus"></a>  Place Order</h4><br/><br/>
			<div class="text-center">

			<div class="form-group">
<select name="product" class="form-control custom-select" style="border-radius: 50px;" required>
<option selected="selected" value="" disabled>Select Product</option>
    <?php
$product = mysqli_query($conn,("SELECT * FROM `product`"));
while ($productrow = mysqli_fetch_assoc($product)){
    ?>
	<option value="<?php echo $productrow['product_id']; ?> "><?php echo $productrow['name']; ?></option>
    <?php
}
?>
</select>
</div> 
         
            <div class="form-group">
<select name="customer" class="form-control custom-select"  style="border-radius: 50px;" required>
<option selected="selected" value="" disabled>Select Customer</option>
    <?php

$customer = mysqli_query($conn,("SELECT * FROM `customer`"));

while ($customerrow = mysqli_fetch_assoc($customer)){
    ?>
	<option value="<?php echo $customerrow['customer_id']; ?> "><?php echo $customerrow['name']; ?></option>
    <?php
}
?>
</select>
            </div>
            
<div class="form-group">
<input type="number" class="form-control" name="number"  style="border-radius: 50px;" placeholder="Number of orders" required>
  </div>
</div>
  <div class="text-center">
  <button type="submit" name="order" class="btn btn-primary btn-md btn-block"  style="border-radius: 50px;">Order</button>
		</div>
        </form><br>
        <a href="admin.php">back</a>
	</div>
</body>
</html>