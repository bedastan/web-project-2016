<div class="hor-menu">
    <table>
      <tr id="lap-hor-menu">
        <td id="product">Ноутбуки</td>
        
        <td>
          <ul>
            <li id="navigation-menu"><a href="index.php">Главная</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu"><a href="index.php?Link=laptops">Ноутбуки</a></li>
            <li id="navigation-menu">/</li>
            <li id="navigation-menu">Asus ROG501GTX</li>

          </ul>

        </td>
      </tr>
    </table>
 </div>
  <div id="product-cont">
    <h1>Ноутбук Asus ROG501GTX</h1>
    <body>

   <p id="image"><img id="largeImg" src="images/asus1.png"></p>


  <ul id="thumbs">
    <!-- При наведении на изображение показывается встроенная подсказка браузера (title) -->
    <li>
      <a href="images/asus2.jpeg"><img src="images/asus2.jpeg"></a>
    </li>
    <li>
      <a href="images/asus1.jpg"><img src="images/asus1.jpg"></a>
    </li>
 
    <li>
      <a href="images/asus1.png"><img src="images/asus1.png"></a>
    </li>
  </ul>

  <script>
    var largeImg = document.getElementById('largeImg');

    var thumbs = document.getElementById('thumbs');

    thumbs.onclick = function(e) {
      var target = e.target;

      while (target != this) {

        if (target.nodeName == 'A') {
          showThumbnail(target.href, target.title);
          return false;
        }

        target = target.parentNode;
      }

    }

    function showThumbnail(href, title) {
      largeImg.src = href;
      largeImg.alt = title;
    }


    /* предзагрузка */
    var imgs = thumbs.getElementsByTagName('img');
    for (var i = 0; i < imgs.length; i++) {
      var url = imgs[i].parentNode.href;
      var img = document.createElement('img');
      img.src = url;
    }
  </script>

  <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('largeImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
    <div id="buy-part">
      <h1 id="price">Цена: 329990тг</h1>
      <hr align="center" width="499" color="#b9b9b9"/>
      <a href="#"><button id="btn-buy">Купить</button></a>
      <p>Краткое описание:</p>
      <p id="link-for-chr"><a href="#about">Полная характеристика</a></p>
      <table>
         <tr>
              <td>Класс</td>
              <td>Для дома</td>    
          </tr>
         <tr>
              <td>Процессор</td>
              <td>Intel Core i3-4005U (1.7ГГц)</td>
          </tr>
         <tr>
              <td>ОЗУ</td>
              <td>4Гб DDR3L</td>    
          </tr>
           <tr>
              <td>Видеокарта</td>
              <td>GeForce 940M (2Гб)</td>    
          </tr>
         <tr>
              <td>Жесткий диск</td>
              <td>HDD 1000 Гб</td>
          </tr>
         <tr>
              <td>Диагональ</td>
              <td>15.6 (16:9)</td>    
          </tr>
         <tr>
              <td>OC</td>
              <td>Windows 10</td>    
          </tr>
      </table>
      <form id="compare">
        <input type="button" onClick="bookmark()" value="Добавить к сравнению">
      </form>
      <form id="elect">
        <input type="button" onClick="bookmark()" value="В список желаний">
      </form>
  </div>
    
    <div id="about">
      <p>Характеристики</p>
      <table class="characteristics">
        <tr>
          <td id="ch-name" colspan="2">Основные характеристики</td>
        </tr>
        <tr>
          <td>Класс</td>
          <td>Для дома</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Производитель</td>
            <td>Asus</td>
          </tr>
            <tr>
              <td>Код товара</td>
              <td>13245</td>
            </tr>
              <tr style="background-color:#e7e9f6;">
                <td>Наименование</td>
                <td>Ноутбук Asus</td>
              </tr>
                <tr>
                  <td>Модель</td>
                  <td>X555LB-XO487T (90NB08G2-M08860)</td>
                </tr>
                  <tr style="background-color:#e7e9f6;">
                    <td>Операционная система</td>
                    <td>Windows 10</td>
                  </tr>
        <tr>
          <td id="ch-name"  colspan="2">Процессор</td>
        </tr>
        <tr>
          <td>Производитель процессора</td>
          <td>Intel</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Процессор</td>
            <td>Core i3</td>
          </tr>
            <tr>
              <td>Модель процессора</td>
              <td>4005U</td>
            </tr>
              <tr style="background-color:#e7e9f6;">
                <td>Тактовая частота</td>
                <td>1.7 ГГц</td>
              </tr> 
                <tr>
                  <td>Количество ядер</td>
                  <td>2</td>
                </tr>
        <tr>
          <td id="ch-name"  colspan="2">Оперативная память</td>
        </tr>
        <tr>
          <td>Объем оперативной памяти</td>
          <td>4 гб</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Максимальный объем оперативной памяти</td>
            <td>8 гб</td>
          </tr>
            <tr>
              <td>Тип памяти</td>
              <td>DDR3L</td>
            </tr>
        <tr>
          <td id="ch-name" colspan="2">Видеокарта</td>
        </tr>
        <tr>
          <td>Тип видеокарты</td>
          <td>Дискретная</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Проиводитель видеоадаптера</td>
            <td>nVidia</td>
          </tr>
            <tr>
              <td>Видеоадаптер</td>
              <td>GeForce</td>
            </tr>
              <tr style="background-color:#e7e9f6;">
                <td>Объем памяти видеоадаптера</td>
                <td>2 Гб</td>
              </tr>
        <tr>
          <td id="ch-name" colspan="2">Жесткий диск</td>
        </tr>
        <tr>
          <td>Тип жесткого диска</td>
          <td>HDD</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Объем накопителя</td>
            <td>1000 Гб</td>
          </tr>
        <tr>
          <td id="ch-name" colspan="2">Дисплей</td>
        </tr>
        <tr>
          <td>Диагональ</td>
          <td>15,6" - 39,624 см</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Разрешение</td>
            <td>  1366x768 (HD)</td>
          </tr>
        <tr>
          <td id="ch-name" colspan="2">Аудио</td>
        </tr>
        <tr>
          <td>Встроенные динамики</td>
          <td>Есть</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Сабвуфер</td>
            <td>Нет</td>
          </tr>
            <tr>
              <td>Микрофон</td>
              <td>Есть</td>
            </tr>
        <tr>
          <td id="ch-name" colspan="2">РазЪемы и интерфейсы</td>
        </tr>
        <tr>
          <td>Оптический привод</td>
          <td>DVD Super Multi</td>
        </tr>
          <tr style="background-color:#e7e9f6;">
            <td>Кард-ридер</td>
            <td>3в1 (SD/SDHC/SDXC)</td>
          </tr>
            <tr>
              <td>Ethernet</td>
              <td>10/100/1000</td>
            </tr>
        <tr>
          <td id="ch-name" colspan="2">Цвет, размеры, вес</td>
        </tr>
        <tr>
          <td>Цвет</td>
          <td>Серебристый</td>
        </tr>
          <tr style="background-color:#e7e9f6;" >
            <td >Габариты</td>
            <td>382x256x25.8 мм </td>
          </tr>
            <tr>
              <td>Вес</td>
              <td>2,3 кг</td>
            </tr>
      </table>
    </div>
  </div>
