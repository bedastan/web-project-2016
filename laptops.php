
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="images/js/jquery-1.9.1.js"></script>
<style type="text/css">
.elem { display:none; cursor: pointer;}
</style>
<div id="content">

 <div class="hor-menu">
    <table>
      <tr id="lap-hor-menu">
        <td id="product">Ноутбуки</td>
        
        <td>
          <ul>
            <li id="navigation-menu"><a href="index.php">Главная</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu">Ноутбуки</li>

          </ul>

        </td>
      </tr>
    </table>
 </div>

  <div class="left-ver-menu">
  <div class="menu_simple">
  <div class="trigger">Класс</div>
<div class="elem hidden"><ul>
          <li><a href="#">Для дома</a></li>
          <li><a href="#">Для игр</a></li>
          <li><a href="#">Для работы</a></li>
          <li><a href="#">Для учебы</a></li>
          <li><a href="#">Трансформеры</a></li>
        </ul> 
        </div>
<div class="trigger">Производитель</div>
        <div class="elem hidden"><ul>
          <li><a href="#">Acer</a></li>
          <li><a href="#">Apple</a></li>
          <li><a href="#">Asus</a></li>
          <li><a href="#">HP</a></li>
          <li><a href="#">Lenovo</a></li>
        </ul>
      </div>
      
      <div class="trigger">Ультрабук</div>
        <div class="elem hidden"><ul>
          <li><a href="#">Да</a></li>
          <li><a href="#">нет</a></li>
        </ul>
      </div>
       
      

      <div class="trigger">Диагональ</div>
        <div class="elem hidden"><ul>
          <li><a href="#">11,6" - 29,464 см</a></li>
          <li><a href="#">13" - 33,02 см</a></li>
          <li><a href="#">13,3" - 33,782 см</a></li>
          <li><a href="#">15,6" - 39,624 см</a></li>
          <li><a href="#">17,3" - 43,942 см</a></li>
        </ul></div>

      <div class="trigger">Разрешение</div>
        <div class="elem hidden"><ul>
          <li><a href="#">1366x768 (HD)</a></li>
          <li><a href="#">1600х900</a></li>
          <li><a href="#">1920х1080 (FullHD)</a></li>
          <li><a href="#">2560x1600</a></li>
        </ul></div>
       
      

      <div class="trigger">Процессор</div>
        
       <div class="elem hidden "><ul>
          <li><a href="#">1366x768 (HD)</a></li>
          <li><a href="#">1600х900</a></li>
          <li><a href="#">1920х1080 (FullHD)</a></li>
          <li><a href="#">2560x1600</a></li>
        </ul></div>
      

      <div class="trigger">Объем оперативной памяти</div>
        <div class="elem hidden"><ul>
          <li><a href="#">1366x768 (HD)</a></li>
          <li><a href="#">1600х900</a></li>
          <li><a href="#">1920х1080 (FullHD)</a></li>
          <li><a href="#">2560x1600</a></li>
        </ul>
        </div>
      

     <div class="trigger"> Объем накопителя</div>
         <div class="elem hidden "><ul>
          <li><a href="#">1366x768 (HD)</a></li>
          <li><a href="#">1600х900</a></li>
          <li><a href="#">1920х1080 (FullHD)</a></li>
          <li><a href="#">2560x1600</a></li>
        </ul>
         </div>

      <div class="trigger">Операционная система</div>
        <div class="elem hidden"><ul>
          <li><a href="#">1366x768 (HD)</a></li>
          <li><a href="#">1600х900</a></li>
          <li><a href="#">1920х1080 (FullHD)</a></li>
          <li><a href="#">2560x1600</a></li>
        </ul>
    </div>       
      

      <div class="trigger">Видеоадаптер</div>
      

      <div class="trigger">Объем памяти видеоадаптера</div>
      
       
     
      <div class="trigger">Оптический привод</div>
        <div class="elem hidden"><ul>
          <li><a href="#"><input type="checkbox">1366x768 (HD)</a></li>
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
 });
</script>
  </div>

  </div>
  
 	<div class="containers" id="result">
       <div class="select-menu">

      <ul id="sel-list">
        <li>Сортировать товары :</li>
        <li><a href="#">По умолчанию</a></li>
        <li><a href="#">Сначала дешевые</a></li>
        <li><a href="#">Сначала дорогие</a></li>
      </ul>

  </div>
  <?php 
    mysql_connect("localhost","root","");
    mysql_select_db("yourtech");
    mysql_set_charset("utf8");
    $query = "SELECT * FROM laptops ORDER BY product";
    $result = mysql_query($query); 
    

    while ($row = mysql_fetch_assoc ($result)) { 
      $pic = $row['photo'];
      
   ?> 

        <div id="box">
          <a href="index.php?Link=asus"><?php echo "<img class='device-photo' src='$pic'/>"; ?>  </a>
          <div id="device"><a href="index.php?Link=asus"><?php echo $row['product']; ?></a></div>
          <hr align="center" width="180" color="#b9b9b9"/>
          <div id="coast"><?php echo $row['price']; ?>тг</div>
          <div id="buy"><a href="#">Купить</a></div>
          <?php 
if(isset($_SESSION['username']))
          {
            if($_SESSION['username']== "admin" )
            {
           ?>

           <a href="delete.php?id=<?= $row['product_id'] ?>" style="font-size:14px; color:red;float:left;">Удалить</a>
           <a href="edit.php?id=<?= $row['product_id'] ?>" style="font-size:14px; color:red;float:right;">Редактировать</a>
           <?php }} ?>
        </div>
        <?php 
}
?>
 </div>

</body>
</html>