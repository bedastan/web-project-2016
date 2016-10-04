<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php 
	$connect = mysqli_connect("localhost","root","","yourtech");
	$output = '';
	if($_POST['search'] == ""){
		$sqle = "SELECT * FROM laptops";
	$resulte = mysqli_query($connect, $sqle);
	$nume = mysqli_num_rows($resulte);

	if($nume > 0){
		
	for($i=0;$i<$nume;$i++) {
		$rowe = mysqli_fetch_array($resulte);
		$producte = $rowe['product'];
		$pricee = $rowe['price'];
		$pice = $rowe['photo'];
		 ?>
			
			
	
			
			<?php
	}
	// $output .= '
	// </div>';

	// echo "$output";
	}
	}
	else{
	$sql = "SELECT * FROM laptops WHERE product LIKE '%".$_POST['search']."%'";
	$result = mysqli_query($connect, $sql);
	$num = mysqli_num_rows($result);

	if($num > 0){
		$row = mysqli_fetch_array($result);
	for($i=0;$i<$num;$i++) {
		$product = $row['product'];
		$price = $row['price'];
		$pic = $row['photo'];
		 ?>
			
			
		<div id='box'>
          <a href='index.php?Link=asus'><img class='device-photo' src='<?= $pic; ?>'/> </a>
          <div id='device'><a href='index.php?Link=asus'><?= $product; ?></a></div>
          <div id='coast'><?= $price; ?>тг</div>
          <div id='buy'><a href='#'>Купить</a></div>
		</div>
			
			<?php
	}
	// $output .= '
	// </div>';

	// echo "$output";
	}else{
		echo "Данный товар не существует";
	}
}
echo"$output";
 ?>
</body>
</html>