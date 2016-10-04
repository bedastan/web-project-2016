<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>add-cart</title>
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>

</head>
<body>
	<div class="product-table">
    <h2><a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
    <div class="product-table-img-main">
        <div class="product-table-img">
            <a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCT?><?=$product['img']?>" alt="" /></a>
        </div>
    </div>
    <p>Цена : <span id="price"><?=$product['price']?></span></p>
    <a class="buyitem" href="?view=addtocart&amp;goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="img/addcard.jpg" alt="Добавить в корзину" /></a>
</div>
<script type="text/javascript">

$('.buyitem').click(function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    var price = $(this).closest('.product-table').find('span').text();
    price = parseInt(price, 10);
    total_items = parseInt($("#bought").text(), 10) + 1;
    total_price = parseInt($("#sum").text(), 10) + price;
    $.get(url, {total_price: total_price, total_items: total_items}, function() {
        $('#bought').text(total_items); // Запись в нужные места на странице
        $('#sum').text(total_price);
    });
    return false;
});
</script>
</body>
</html>