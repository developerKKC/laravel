<?php
if(Auth::user())
$_SESSION['uyeid']=Auth::user()->id;

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>

<![endif]-->
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo e(config('laravel', 'WebSitesi')); ?></title>

<!-- Styles -->
<link href="/css/bootstrap.min.css" rel="stylesheet">

<link href="/css/app.css" rel="stylesheet">

<!-- Scripts -->
<script>
window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
]); ?>
</script>


</head>
<body>

<div id="app">
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('laravel', 'WebSitesi')); ?>

        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>




        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            <?php if(Auth::guest()): ?>
                <li><a href="<?php echo e(url('/login')); ?>">Giriş Yap</a></li>
                <li><a href="<?php echo e(url('/register')); ?>">Kayıt Ol</a></li>
            <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo e(url('imageUploadForm')); ?>">
                                Ürün Ekle!
                            </a>


                        </li>


                        <li>

                            <a href="javascript:document.urun.submit()">Ürünlerim</a>

                        </li>



                        <li> <a href="javascript:document.talep.submit()">Ürün Taleplerim</a>
                        </li>

                        <li>

                            <a href="<?php echo e(url('/logout')); ?>"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Çıkış Yap
                            </a>

                            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>

                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>


<div class="header-bottom"><!--header-bottom-->
<div class="col-sm-3">
    <div class="search_box pull-right">
        <?php echo Form::open(['method' => 'post', 'action' => 'ImageController@arama']); ?>

                <?php echo Form::text('search',null, ['placeholder' => 'Ne Arıyorsunuz?']); ?>

                <button type="submit" class="btn btn-fefault cart kayma">Ara</button>
                <?php echo Form::close(); ?>

            </div>
        </div>

            <div class="row">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle asagikay" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">

                            <li><a href="<?php echo action('ImageController@kategori','0'); ?>"class="active">Elektronik</a></li>
                            <li><a href="<?php echo action('ImageController@kategori','1'); ?>"class="active">Ev ve Bahçe</a></li>
                            <li><a href="<?php echo action('ImageController@kategori','2'); ?>"class="active">Bebek ve Çocuk</a></li>
                            <li><a href="<?php echo action('ImageController@kategori','3'); ?>"class="active">Film, Kitap ve Müzik</a></li>
                            <li><a href="<?php echo action('ImageController@kategori','4'); ?>"class="active">Spor, Eğlence ve Oyunlar</a></li>
                            <li><a href="<?php echo action('ImageController@kategori','5'); ?>"class="active">Moda ve Aksesuar</a></li>
                            <li><a href="<?php echo action('ImageController@kategori','6'); ?>"class="active">Kırtasiye ve Ofis</a></li>
                            <li><a href="<?php echo action('ImageController@kategori','7'); ?>"class="active">Diğer</a></li>
                        </ul>
                    </div>

                <?php if(!Auth::guest()): ?>
                    <?php echo Form::open(['name' => 'urun','method' => 'post','action'=>'YorumController@urunlerim']); ?>




                    <?php echo Form::close(); ?>

                    <?php echo Form::open(['name' => 'talep','method' => 'post','action'=>'YorumController@taleplerim']); ?>

                    <?php echo Form::hidden('uyeid2', Auth::user()->id); ?>



                    <?php echo Form::close(); ?>


                <?php endif; ?>

            </div>

    </div><!--/header-bottom-->
        </div>
    </nav>
    <?php echo $__env->yieldContent('icerik'); ?>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.min.js"></script>
</body>
</html>