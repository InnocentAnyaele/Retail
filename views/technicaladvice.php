<?php
$title = "Credit Worthiness";
$process = "Technical Advice";
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

$check = mysqli_query($conn,("SELECT * FROM `product` ORDER BY `name` ASC"));


while ($row = mysqli_fetch_assoc($check)){

?>

<div class="jumbotron text-left shadow p-3 mb-3 rounded" style="margin-top: 20px; margin-left:10px; width: 900px;">
    <h4 style="color: red;"><?php echo $row['name'];  ?></h4>
    <h5>Stock - <?php echo $row['stock'];  ?></h5><br>
    <p><?php echo $row['description'] ;?></p>
    <a style="margin-right: 1-px;" href="admin.php"><-back</a>
</div>

<?php
}
?>
</div>

</body>
</html>