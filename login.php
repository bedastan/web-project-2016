<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
include ('dbconnect.php');

if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_assoc($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
  $userRow=mysql_fetch_assoc($res);
  $_SESSION['username'] = $userRow['username'];
  header("Location: index.php");
 }
 else
 {
  ?>
        <script>alert('Пользователь с такой электронной почтой или паролем не найден.\nПожалуйста, проверьте правильность написания логина и пароля.');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="style/style.css" type="text/css" />
</head>
<body>
	<div class="hor-menu">
    <table>
      <tr id="lap-hor-menu">
        <td id="product">Логин</td>
        
        <td>
          <ul>
            <li id="navigation-menu"><a href="index.php">Главная</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu">Логин</li>

          </ul>

        </td>
      </tr>
    </table>
 </div>
	<center>
		<div id="login-form">
			<form method="post">
				<table align="center" width="400px" border="0">
					<tr>
						<td><input type="text" name="email" placeholder="email" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Пароль" required /></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-login">Войти</button></td>
					</tr>

					<tr>
						<td><a href="index.php?Link=register">Еще нет аккаунта? Зарегистрируйтесь</a></td>
					</tr>

				</table>
			</form>
		</div>
	</center>
</body>
</html>