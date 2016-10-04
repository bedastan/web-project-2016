
<div id="header">
    <div id="compname"><a href="index.php">your<span>T</span>ech</a></div>
    <div id="welcome">Интернет-магазин технологий</div>
     <div class="regist">
          
          <?php 
           if(isset($_SESSION['username']))
          { ?>
        <ul id="reg-ul" style="margin-left:-130px;">
           <?php if($_SESSION['username']=="admin") echo "<li id=\"reg-btns\"><a href=\"index.php?Link=add_laptops\">Добавить товар</a></li>"; ?>

            <li id="reg-btns"><?php  echo $_SESSION['username'];?></li>
            <li id="reg-btns">|</li>
            <li id="reg-btns"><a href="logout.php">Выход</a></li>
            
          </ul>
        <?php } 
else 
{
        ?><ul>

            <li id="reg-btns"><a href="index.php?Link=login">Войти</a></li>
            <li id="reg-btns">|</li>
            <li id="reg-btns"><a href="index.php?Link=register">Регистрация</a></li>
          </ul>
        <?php } ?>

      
     
  
  </div>
    <div id="basket"><a href="index.php?Link=basket"><img src="images/basket2.svg"></a></div>
 </div>
 <div id="navigation">
  <ul>
    <li><a href="index.php?Link=laptops">Ноутбуки</a></li>
    <li><a href="index.php?Link=smartphones">Смартфоны</a></li>
    
    <li><a href="index.php?Link=tablets">Планшеты</a></li>
    
    <li><a href="index.php?Link=accessories">Аксессуары</a></li>
      <li id="search">
       <form class="search" method="post" action="fetch.php" >
         <input type="text" name="search_text" id="search_text" placeholder="Поиск товаров" />
       </form>

    </li>
  </ul>                                     
 </div>
