<?php
$title = "Create Customer";
$process = "Create Customer";
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


<div class="container shadow p-3 mb-5 rounded" style="width: 400px; margin-top:100px; backdrop-filter: blur(5px); margin-left: 100px; ">
		<form method="post" action="../pages/createcustomer.php">
			<h4 class="text-center"><a class="fas fa-user-plus"></a>  Add Customer</h4><br/><br/>
			<div class="text-center">
            <div class="form-group">
<input type="name" class="form-control" name="name" style="border-radius: 50px;" placeholder="Name of Customer" required>
  </div>

  <div class="form-group">
<input type="email" name="email" class="form-control" style="border-radius: 50px;" placeholder="E-mail" required>
  </div>
        
  <div class="form-group">
<input type="text" name="phone" class="form-control"  style="border-radius: 50px;" placeholder="Phone" required>
  </div>
   
</div>
  <div class="text-center">
  <button type="submit" name="create" style="border-radius: 50px;" class="btn btn-primary btn-md btn-block">Add</button>
		</div>
        </form><br>
        <a href="admin.php">back</a>
	</div>
</body>
</html>