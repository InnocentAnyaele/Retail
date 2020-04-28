<?php
$title = "Retail Login";
include ('includes/tags.php');
include ('includes/conn.php');
?>

<body>

<style>
	body{
		background-image: url('assets/img/bg5.jpg');
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>

<div class="container " style="width: 400px; margin-top:100px; ">
		<form method="post" action="pages/login.php">
			<h3 class="text-center"><a class="fas fa-lock"></a> Login <span class="badge badge-secondary">Retail</span></h3><br/></br>
			<div class="text-center">
			<div class="form-group">
<select name="position" style="border-radius: 50px;" class="form-control custom-select" required>
	<option selected="selected" value="" disabled>Position...</option>	
<?php
$staff = mysqli_query($conn,("SELECT * FROM staff"));
while ($staffrow = mysqli_fetch_assoc($staff)){
	?>
<option value="<?php echo $staffrow['name']; ?>"><?php  echo $staffrow['name']; ?></option>

<?php
}
?>

</select>
			</div>

<div class="form-group">
<input type="password" class="form-control " style="border-radius: 50px;" name="password" placeholder="Password" required>
  </div>
</div>
  <div class="text-center">
  <button type="submit" name="login" style="border-radius: 50px;" class="btn btn-primary btn-md btn-block">Login</button>
		</div>
        </form>
	</div>
</body>
</html>