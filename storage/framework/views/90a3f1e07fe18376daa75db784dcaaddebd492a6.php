<html>
<head>

    <link rel="stylesheet" href="/css/deneme.css">

</head>
<body>

<div id="stat-top">
    <div id="top">
        <div class="top-left">
            <img src="/url.jpg">
        </div>

        <div class="top-right links">

            <a href="<?php echo e(url('/login')); ?>">Login</a>
            <a href="<?php echo e(url('/register')); ?>">Register</a>



        </div>
        <div class="top-mid links">
           kjhkjhjk
        </div></div></div>
<div id="menukaplama">
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
<?php echo $__env->yieldContent('icerik'); ?>
</body>
</html>