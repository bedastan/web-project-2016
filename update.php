<?php 
mysql_connect("localhost","root","");
mysql_select_db("yourtech");
$id = $_REQUEST['id'];
$nname = $_REQUEST['product'];
$nprice = $_REQUEST['price'];
$npict = $_REQUEST['photo'];

$query="UPDATE laptops SET product='$nname',price='$nprice',photo='$npict' WHERE product_id = $id";
mysql_query($query);
header("Location: index.php?Link=laptops")
 ?>