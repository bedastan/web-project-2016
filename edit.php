<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: Trebuchet MS, Arial, Times New Roman;
		background-image: url("images/negative-space.jpg");
		background-size: 1365px 644px;
	opacity: 1;

	}
	#form{
		background-color: #fff;
		margin: 0 auto;
		margin-top: 150px;
		width: 400px;
		height: 200px;
		border:1px solid #b9b9b9;
		border-radius: 6px;
		 box-shadow: 0px 0px 15px rgba(0,0,0,0.6);

	}
	label{
		color: #526b89;
		font-size: 20px;
	}
	input{
	font-size: 16px;
	margin-left: 5px;
	}
	.hor-menu{
    
  height: 50px;
  margin-left: 2px;
}
#lap-hor-menu{
float: left;
color: #fff;
margin-top: 10px; 
font-size: 16px;
margin-left: 20px;
width: 900px;
}
#lap-hor-menu a{
	text-decoration: none;
	color: #fff;
}
#product{
  width: 350px;
  font-size: 26px;
}
.hor-menu, ul{
  padding: 0;
}
#navigation-menu{
float: left;
margin-top: -8px;
margin-right: 6px;
list-style-type: none;
}

/*--------VERTICAL-MENU-----------------------------------------------------------------*/
	</style>
</head>
<body>
<?php 
	mysql_connect("localhost", "root","");
	mysql_select_db("yourtech");
	$id = $_REQUEST['id'];
	$query = "SELECT * FROM laptops WHERE product_id=$id";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	?>
	<div class="hor-menu">
    <table>
      <tr id="lap-hor-menu">
        <td id="product">Редактировать товаров</td>
        
        <td>
          <ul>
            <li id="navigation-menu"><a href="index.php">Главная</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu">Редактировать товаров</li>


          </ul>

        </td>
      </tr>
    </table>
 </div>
	<div id="form">
	<form action="update.php" style="padding:28px;">
		<label>Поменять имя <input type="text" placeholder="New name" name="product" value="<?= $row	['product'] ?>"/><br></label>
		<label>Поменять цену<input type="text" placeholder="New price" name="price" value="<?= $row	['price'] ?>"/><br></label>
		<label>Поменять изображение<input type="file" placeholder="New picture" name="photo" value="<?= $row	['photo'] ?>"/><br></label>
		<input type="hidden" name="id" value="<?=$row['product_id']?>"/><br>
		<input type="submit" value="Поменять">		
	</form>
	</div>

</body>
</html>
 