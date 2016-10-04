<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
include('dbconnect.php');

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $unum = mysql_real_escape_string($_POST['numb']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));

 
 if(mysql_query("INSERT INTO users(username,unumber,email,password) VALUES('$uname','$unum','$email','$upass')"))
 {
  		
        header("Location: index.php?Link=login");
   
 }
 else
 {
  ?>
        <script>alert('Данный аккаунт уже зарегистрирован!!!');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" >
<title></title>
<link rel="stylesheet" href="style/style.css" type="text/css" />

</head>
<body>
	<div class="hor-menu">
    <table>
      <tr id="lap-hor-menu">
        <td id="product">Регистрация</td>
        
        <td>
          <ul>
            <li id="navigation-menu"><a href="index.php">Главная</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu">Регистрация</li>

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
						<td><input type="text" name="uname" placeholder="Имя" required /></td>
					</tr>
						<tr>
					<td><input type="text" name="numb" placeholder="Номер телефона" required /></td>
				</tr>
					<tr>
						<td><input type="email" name="email" placeholder="email" required /></td>
					</tr>
					<tr>
					<td><input type="password" name="pass" placeholder="Пароль" required /></td>
				</tr>

				<tr>
					<td><button type="submit" name="btn-signup">Регистрация</button></td>
				</tr>
				<tr>
					<td><a href="index.php?Link=login">Есть аккаунт? Вход</a></td>
				</tr>
			</table>
		</form>
	</div>
</center>
</body>
</html>