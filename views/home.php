<?php
$title = "Home";
$process = "Home";
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
$detail = mysqli_query($conn,("SELECT * FROM `product` ORDER BY `date` ASC"));

while ($detailrow = mysqli_fetch_assoc($detail)){

?>

<div class="jumbotron shadow p-3 mb-3 rounded" style="margin-top: 20px; margin-left:10px; width: 900px;">
    <h3 style="color: red;"><?php echo $detailrow['name'];  ?></h3>
    <h6>Location - <?php echo $detailrow['location'];  ?></h6>
    <h6>Stock  - <?php echo $detailrow['stock'];  ?></h6>
    <h6>Date - <?php echo $detailrow['date'];  ?></h6><br>
    <a style="margin-right: 1-px;" href="admin.php"><-back</a>
</div>

<?php
}
?>
</div>
</body>
</html>