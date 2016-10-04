<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>

<script type="text/javascript">


function slideSwitch() {
    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    var $next =  $active.next().length ? $active.next()
        : $('#slideshow DIV:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<style type="text/css">

/*** set the width and height to match your images **/

#slideshow {    
    height:400px;
    width: 900px;
}

#slideshow DIV {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
    height: 400px;
    margin-top: 97px;
    margin-left: 224.5px;
}

#slideshow DIV.active {
    z-index:10;
    opacity:1.0;
}

#slideshow DIV.last-active {
    z-index:9;
}

#slideshow DIV IMG {
    width: 900px;
    height: 400px;
    display: block;
    border: 0;
}
#hot-sellers{
    height: 100px;
    background-color: #d2b8f2;
}
</style>

</head>
<body>


<div id="slideshow">
    <div class="active">
        <a href="#"><img src="images/asustablet.jpg" /></a>
        
    </div>
    
    <div>
        <a href="#"><img src="images/galaxy-s7.jpg"/></a>
        
    </div>
    
    <div>
        <a href="#"><img src="images/ASUS_TAICHI.jpg"/></a>
        
    </div>
    
    
</div>



</body>
</html>

