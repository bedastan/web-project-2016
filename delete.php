<?php 
	mysql_connect("localhost", "root","");
	mysql_select_db("yourtech");
	$id = $_REQUEST['id'];
	$query="DELETE FROM laptops WHERE product_id=$id";
	mysql_query($query);
	header("Location: index.php?Link=laptops");
 ?>