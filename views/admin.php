<?php
$title = "Admin";
include ('../includes/tags.php');

session_start();
if (!isset($_SESSION['position'])){
header ('location: ../index.php');
}

?>

<body>
<style>
	body{
		background-image: url('../assets/img/retail5.jpg');
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>
<?php
if (isset($_SESSION['position'])){
        $position = $_SESSION['position'];
}

switch ($position){
    case "admin":
        ?>
<div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px;">
		<form method="post">
			<h2 class="text-center">Admin <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>
        </form>
        <a href="../pages/logout.php">Logout</a>
	</div>

    <?php
break;
case "Dispatcher":
    
    ?>
<div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px; ">
		<form method="post">
			<h2 class="text-center">Dispatcher <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>
        </form>
        <a href="../pages/logout.php">Logout</a>
	</div>
    <?php

break;
case "Stock Clerk":
    ?>

<div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px; ">
		<form method="post">
			<h2 class="text-center">Stock Clerk <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>
        </form>
        <a href="../pages/logout.php">Logout</a>
	</div>
    <?php
    break;
    case "Sales Supervisor":
        ?>
<div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px; ">
		<form method="post">
			<h2 class="text-center">Sales Supervisor <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block "  style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block"  style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block "  style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block " style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block"  style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block"  style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>

</form>
        <a href="../pages/logout.php">Logout</a>
	</div>
        <?php
        break;
        case "Technical Salesperson":
            ?>
<div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px; ">
		<form method="post">
			<h2 class="text-center">Technical SalesPerson <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block "  style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block"  style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block"  style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block"  style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block"  style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>
        </form>
        <a href="../pages/logout.php">Logout</a>
	</div>
            <?php
            break;
            case "Reorder Clerk":
                ?>
     <div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px; ">
		<form method="post">
			<h2 class="text-center">Reorder Clerk <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block " style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>
        </form>
        <a href="../pages/logout.php">Logout</a>
        </div>
        
        <?php
        break;
        case "Staff Member":
        ?>
<div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px; ">
		<form method="post">
			<h2 class="text-center">Staff <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block " style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block disabled"  style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>
        </form>
        <a href="../pages/logout.php">Logout</a>
	</div>

                <?php
                break;
                case "Sales Person":
?>

<div class="container shadow p-3 mb-5 bg-white rounded" style="width: 400px; margin-top:100px; ">
		<form method="post">
			<h2 class="text-center">Sales Person <span class="badge badge-secondary">menu</span></h2><br/>
			<div class="text-center">
                        <a href="home.php" class="btn btn-info btn-md btn-block " style="border-radius: 50px;"><i class="fas fa-home"></i> Home</a><br><br>
                        <a href="checkstock.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-list-alt"></i> Check Stock</a><br><br>
        <a href="placeorder.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-cart-plus"></i> Place Order</a><br><br>
        <a href="checkorder.php" class="btn btn-info btn-md btn-block" style="border-radius: 50px;"><i class="fas fa-check"></i> Check Order Status</a><br><br>
        <a href="technicaladvice.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-question"></i> Technical Advice</a><br><br>
        <a href="creditworthiness.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-credit-card"></i> Check Credit</a><br><br>
        <a href="createcustomer.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-user"></i> Create Customer</a><br><br>
        <a href="dispatch.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-truck"></i> Dispatch</a><br><br>
        <a href="priority.php" class="btn btn-info btn-md btn-block disabled" style="border-radius: 50px;"><i class="fas fa-list-ol"></i> Priority</a><br><br>
</div>
        </form>
        <a href="../pages/logout.php">Logout</a>
	</div>
<?php
                break;
                }
?>

</body>
</html>