<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
if(isset($_SESSION['user'])=="")
{
 header("Location: index.php");	
}
include('dbconnect.php');

if(isset($_POST['btn-add']))
{
 $pr_name = $_POST['product_name'];
 $pr_price = $_POST['price'];
 $pr_photo = $_POST['photo'];

 	
 if(mysql_query("INSERT INTO laptops(product,price,photo) VALUES('$pr_name','$pr_price','$pr_photo')"))
 { 	?>	
       <script>alert('Товар успешно добавлен!!!');</script>
   <?php
 }
 else
 {
  ?>
        <script>alert('Данный товар уже существует!!!');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="style/style.css" type="text/css" />

</head>
<body>
	<div class="hor-menu">
    <table>
      <tr id="lap-hor-menu">
        <td id="product">Добавить товар</td>
        
        <td>
          <ul>
            <li id="navigation-menu"><a href="index.php">Главная</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu">Добавить товар</li>

          </ul>

        </td>
      </tr>
    </table>
 </div>
	<center>
		<div id="login-form">
			<form method="post">
				<table align="center" width="30%" border="0">
					<tr>
						<td><input type="text" name="product_name" placeholder="Имя продукта" required /></td>
					</tr>
						<tr>
					<td><input type="text" name="price" placeholder="Цена(без знака 'тг')" required /></td>
				</tr>
					<tr>
						<td><input type="file" name="photo" placeholder="Фото" required /></td>
					</tr>

				<tr>
					<td><button type="submit" name="btn-add">Добавить</button></td>
				</tr>

			</table>
		</form>
	</div>
</center>
</body>
</html>