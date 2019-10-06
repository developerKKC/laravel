<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="/css/bootstrapl.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/prism.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/css/styles.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('laravel', 'Nakliyat') }}</title>

    <!-- Styles -->


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->

    <!-- Theme CSS -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>


</head>
<body>

<div id="app">

        <div class="container ">
            <h1 class="logo pull-left">
                <a href="/">
                    <span class="logo-title">Nakliyat</span>
                </a>
            </h1><!--//logo-->
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>

                    </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Giriş Yap</a></li>
                                <li><a href="{{ url('/register') }}">Kayıt Ol</a></li>

                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ url('aracbul') }}">
                                                Araç Bul
                                            </a>


                                        </li>
                                        <li>
                                            <a href="{{ url('ilanlarim') }}">
                                                İlanlarım
                                            </a>


                                        </li>
                                        <li>
                                            <a href="{{ url('/tamamlananlar') }}">
                                                Tamamlanmış İlanlarım
                                            </a>


                                        </li>
                                        <?php if(Auth::user()->vote==0){?>
                                        <li>
                                            <a href="{{ url('/nakliyecikayit') }}">
                                                Nakliyeci Kayıt
                                            </a>


                                        </li>
<?php } ?>

                                        <?php if(Auth::user()->vote==1) { ?>
                                        <li>
                                            <a href="{{ url('/yukbul') }}">
                                                Yük Bul
                                            </a>


                                        </li>
                                        <li>
                                            <a href="{{ url('/tekliflerim') }}">
                                                Aktif Tekliflerim
                                            </a>


                                        </li>
                                        <li>
                                            <a href="{{ url('/tamamlanantasimalarim') }}">
                                                Tamamlanan Taşımalarım
                                            </a>


                                        </li>


<?php } ?>
                                        <li>

                                            <a href="{{ url('/logout') }}"
                                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                Çıkış Yap
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                    </ul>
                                </li>
                            @endif
                        </ul>
                   <!--//nav-->
                </div><!--//navabr-collapse-->


            </nav><!--//main-nav-->

        </div>



    </div>
@yield('icerik')
</body>
</html>