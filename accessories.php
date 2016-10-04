<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="images/jquery-1.9.1.js"></script>
<style type="text/css">
.elem { display:none; cursor: pointer;}
</style>
<div id="content">

 <div class="hor-menu">
    <table>
      <tr id="lap-hor-menu">
        <td id="product">Смартфоны</td>
        <td>
          <ul>
            <li id="navigation-menu"><a href="index.php">Главная</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu">Аксессуары</li>

          </ul>
        </td>
      </tr>
    </table>
 </div>

  <div class="left-ver-menu">
  <div class="menu_simple">

<div class="trigger">Наушники</div>
        <div class="elem hidden"><ul>
          <li><a href="#">Beats</a></li>
          <li><a href="#">Apple</a></li>
        </ul>
      </div>
      
      <div class="trigger">Карты памяти</div>
        <div class="elem hidden"><ul>
          <li><a href="#">8-Гб</a></li>
          <li><a href="#">16-Гб</a></li>
          <li><a href="#">32-Гб</a></li>
          <li><a href="#">64-Гб</a></li>
          <li><a href="#">128-Гб</a></li>
        </ul>
      </div>
       
      

      <div class="trigger">Чехлы</div>
        <div class="elem hidden"><ul>
          <li><a href="#">11,6" - 29,464 см</a></li>
          <li><a href="#">13" - 33,02 см</a></li>
          <li><a href="#">13,3" - 33,782 см</a></li>
          <li><a href="#">15,6" - 39,624 см</a></li>
          <li><a href="#">17,3" - 43,942 см</a></li>
        </ul></div>

      <div class="trigger">Компьютерные аксессуары</div>
        <div class="elem hidden"><ul>
          <li><a href="#">1366x768 (HD)</a></li>
          <li><a href="#">1600х900</a></li>
          <li><a href="#">1920х1080 (FullHD)</a></li>
          <li><a href="#">2560x1600</a></li>
        </ul></div>
      


     <div class="trigger">Аккумуляторы</div>
         <div class="elem hidden "><ul>
          <li><a href="#">1366x768 (HD)</a></li>
          <li><a href="#">1600х900</a></li>
          <li><a href="#">1920х1080 (FullHD)</a></li>
          <li><a href="#">2560x1600</a></li>
        </ul>
         </div>
      
      
<script type="text/javascript">
$(".trigger").click(function(){
    var obj = $(this).next();
    if($(obj).hasClass("hidden")){
        $(obj).removeClass("hidden").slideDown();
    } else {
        $(obj).addClass("hidden").slideUp();
    }
 });</script>
  </div>

  </div>
 	<div class="containers">
       <div class="select-menu">

      <ul id="sel-list">
        <li>Сортировать товары :</li>
        <li><a href="#">По умолчанию</a></li>
        <li><a href="#">Сначала дешевые</a></li>
        <li><a href="#">Сначала дорогие</a></li>
      </ul>

  </div>
        <div id="box">
          <a href="asus.php"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="asus.php"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
       <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">350 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
        <div id="box">
          <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
          <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">195 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>

        <div id="box">
          <a href="asus.php"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="asus.php"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
       <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">350 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
        <div id="box">
          <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
          <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">195 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>

        <div id="box">
          <a href="asus.php"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="asus.php"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
       <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">350 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
        <div id="box">
          <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
          <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">195 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>

        <div id="box">
          <a href="asus.php"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="asus.php"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
       <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">350 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
        <div id="box">
          <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
          <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">195 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>

        

      
        <div id="box">
          <a href="#"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="#"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
       
       <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">220 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
       
        <div id="box">
            <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
            <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
            <hr align="center" width="200" color="#b9b9b9"/>
            <div id="coast">195 000тг</div>
            <div id="buy"><a href="#">Купить</a></div>
        </div>
       
        <div id="box">
          <a href="#"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="#"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
       
        <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">220 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
        <div id="box">
            <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
            <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
            <hr align="center" width="200" color="#b9b9b9"/>
            <div id="coast">195 000тг</div>
            <div id="buy"><a href="#">Купить</a></div>
        </div>
        <div id="box">
          <a href="asus.php"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="asus.php"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
       <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">350 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
        <div id="box">
            <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
            <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
            <hr align="center" width="200" color="#b9b9b9"/>
            <div id="coast">195 000тг</div>
            <div id="buy"><a href="#">Купить</a></div>
          </div>
      
        <div id="box">
          <a href="#"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="#"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
       
       <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">220 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
       
        <div id="box">
            <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
            <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
            <hr align="center" width="200" color="#b9b9b9"/>
            <div id="coast">195 000тг</div>
            <div id="buy"><a href="#">Купить</a></div>
        </div>
       
        <div id="box">
          <a href="#"><img class="device-photo"  src="images/galaxy-s6-1.png"></a>
          <div id="device"><a href="#"> Samsung Galaxy S6<br>LTE 64GB (black)</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">200 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
       
        <div id="box">
          <a href="#"><img class="device-photo"  src="images/iphone6s1.jpg"></a>
          <div id="device"><a href="">Apple iPhone 6s<br>64GB Rose Gold</a></div>
          <hr align="center" width="200" color="#b9b9b9"/>
          <div id="coast">220 000тг</div>
          <div id="buy"><a href="#">Купить</a></div>
        </div>
        
        <div id="box">
            <a href="#"><img class="device-photo" src="images/lg-v10-1.png"></a>
            <div id="device"><a href=""> LG V10 Dual<br>64GB Black</a></div>
            <hr align="center" width="200" color="#b9b9b9"/>
            <div id="coast">195 000тг</div>
            <div id="buy"><a href="#">Купить</a></div>
        </div>
  </div>

 </div>
</body>
</html>