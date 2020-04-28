<?php
$title = "Credit Worthiness";
$process = "Credit Worthiness";
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

$check = mysqli_query($conn,("SELECT * FROM `customer`"));


while ($row = mysqli_fetch_assoc($check)){

?>

<div class="jumbotron text-left shadow p-3 mb-3 rounded" style="margin-top: 20px; margin-left:10px; width: 900px;">
    <h4 style="color: red;"><?php echo $row['name'];  ?></h4>
    <h6>Customer ID -  <?php echo $row['customer_id'];  ?></h6>
    <h6 style="color: red;">Credit worthiness (number of purchases made): <?php echo $row['credit_worthiness'];  ?></h6>
    <a style="margin-right: 1-px;" href="admin.php"><-back</a>
</div>

<?php
}
?>
</div>
</body>
</html>