<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/deneme.css" />


</head>
<body>
<div id="ust">
    <div class="ustlogo">
<img src="url.jpg" height="100px">
    </div>
<div class="ustarama">
    <div class="box">
        <div class="container-4">
            <input type="search" id="search" placeholder="Search..." />
            <button class="icon"><i class="fa fa-search"></i></button>
        </div>
    </div>

</div>


</div>
<div id="menu">
    <ul id="menu">
        <li><a href="#">Üst Menü 1</a></li>
        <li><a href="#">Üst Menü 2</a>
            <ul style="display: none;">
                <li><a href="#">Alt Menü 1</a></li>
                <li><a href="#">Alt Menü 2</a></li>
                <li><a href="#">Alt Menü 3</a></li>
            </ul>
        </li>
        <li><a href="#">Üst Menü 3</a>
            <ul style="display: none;">
                <li><a href="#">Alt Menü 4</a></li>
                <li><a href="#">Alt Menü 5</a></li>
                <li><a href="#">Alt Menü 6</a></li>
            </ul>
        </li>
    </ul>
</div>

<?php if(Route::has('login')): ?>
    <div class="top-right links">
        <a href="<?php echo e(url('/login')); ?>">Login</a>
        <a href="<?php echo e(url('/register')); ?>">Register</a>
    </div>
<?php endif; ?>

<div class="container">
<a>içerik</a>


</div>
<div id="footer">
<a>footer</a>


</div>

</body>



</html>







<?php
/**
 * Created by PhpStorm.
 * User: Gökhan
 * Date: 30.11.2016
 * Time: 20:31
 */



?>