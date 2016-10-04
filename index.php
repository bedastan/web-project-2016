<?php 
session_start();
  if (isset($_GET['Link'])) {
    $lnk=$_GET['Link'];
  }else{
    $lnk="";
  }
?>

<!DOCTYPE html>
<head>
	<title>yourTech</title>
  	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
</head>
<body>
<html>
 <div id="wrapper">
<?php 
    include("header.php");
   ?>
   <?php
      if($lnk=="login"){Include("login.php");}
      if($lnk=="register"){Include("register.php");}
      if($lnk==""){Include("main.php");}
      if($lnk=="laptops"){Include("laptops.php");}
      if($lnk=="asus"){Include("asus.php");}
      if($lnk=="smartphones"){Include("smartphones.php");}  
      if($lnk=="tablets"){Include("tablets.php");}
      if($lnk=="accessories"){Include("accessories.php");}
       if($lnk=="order"){Include("order.php");}
       if($lnk=="basket"){Include("basket.php");}
       if($lnk=="add_laptops"){Include("add_laptops.php");}
        if($lnk=="edit"){Include("edit.php");}
    ?>  
  </div>
  <div>
<?php 
  include("footer.php")
 ?>
</div>
</body>
</html>