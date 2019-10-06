<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
html, body {
    background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
    height: 100vh;
        }
#stat-top{
    width:100%;
    height:150px;

}
#top {
    position: relative;
    background-color:#d7ebf6 ;

    widt:100%;
    height:100%;
   margin-bottom:50px;

    overflow:hidden;
}
.links > a {

    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
.linkler{
    margin-bottom:-50px;
    margin-left:-90px;

}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.top-right {
    position: absolute;


    left:79%;

}
.top-left {
    position: absolute;

    overflow: hidden;
    left:5%;
    height:100%;

}
.top-mid {
    position: absolute;

    left:40%;


}
#menukaplama{
position:relative;
    width:100%;
    height:auto;
    overflow:hidden;

    background-color:#333333;

}
}
#menu{
    width:100%;
    position:absolute;

    float:left;
    bottom:0;




}
ul {

    margin:0px;
    padding:0px;
    list-style:none;
}

#menu > li {
    float:left;
    border-right: 3px solid #D32D2D;
    height:35px;

    font-weight:bold;
    font-family:agency Fb;
}
#menu li:hover{
    background-color:#BCBDC3;
}

#menu li a {
    color:#D32D2D;
    display:block;
    padding: 8px 20px;
    text-decoration:none;
}

#menu li ul li {
    background-color:#02071E;


}

#menu li ul li:hover {
    background-color:#BCBDC3;
}
#icerik{
    position:relative;
    height:1080px;
    border-style: solid;
    margin:0 auto;
    width:90%;
    text-align: center;

}

.resimler{
    width:15%;
    height:20%;
   margin:0 auto;
    overflow: hidden;


    border-style: solid;


}
.yazilar{

  width:10px;
    height:5px;
    margin-top:5px;

}
.Kutu
{
    display:block;
    position:relative;
    width:150px;
    height:150px;
}
.Kutu img
{
    position:relative;

}
.Kutu a
{
    position:absolute;

}

@media  only screen and (min-width: 0px) and (max-width: 768px) {
    #top {
        position: relative;
        border-style: solid;
        background: black;
        widt:100%;



        overflow:hidden;
    }
    .top-right {
        position: absolute;
        border-style: solid;

        left:60vh;
    }
    .top-left {
        position: absolute;
        border-style: solid;
        width:100px;


    }
    .top-mid {
        position: absolute;
        border-style: solid;
        left:30vh;



    }
    </style>
</head>
<body>
<div id="stat-top">
<div id="top">
    <div class="top-left">
    <img src="url.jpg">
        </div>

<div class="top-right links">
    <a href="<?php echo e(url('/login')); ?>">Login</a>
    <a href="<?php echo e(url('/register')); ?>">Register</a>
</div>
    <div class="top-mid links">
        <a href="<?php echo e(url('/login')); ?>">sdfdsf</a>
        <a href="<?php echo e(url('/register')); ?>">sdfsdf</a>
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
<div id="icerik">

<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>





            <a href="<?php echo action('ImageController@goster',$image->id); ?>">

            <img src="<?php echo '/images/'.$image->filePath; ?>" height="250px" width="150px"></a>
<span class="linkler">

            <a href="<?php echo action('ImageController@goster',$image->id); ?>"><?php echo $image->title; ?>



        </a>

</span>





<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    </div>

</body>
</html>