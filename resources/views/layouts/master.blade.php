<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('descr')">
    <link rel="icon" type="image/png" sizes="32x32" href="{{Storage::url('favicon.png')}}">
    <meta name="robots" content="index, follow">
    <link rel="manifest" href="{{Storage::url('site.webmanifest')}}">

    <meta property="og:locale" content="ua_UA" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('descr')" />
    <meta property="og:url" content="{{url()->full()}}" />
    <link rel="canonical" href="{{url()->current()}}">
    <meta property="og:site_name" content="ilve" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('descr')" />
    <meta name="twitter:title" content="@yield('title')" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/JS/Glider.js-master/glider.min.css">
    <script src="https://kit.fontawesome.com/19650ef769.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/touch-sideswipe.css">
</head>

<body>
    <header class="header" id='touchSideSwipe'>

        <div class="header_inner">
            <div class="header_nav">
                <div class="col-xl-3 col-lg-2 col-md-2">
                    <div class="header_logo">
                        <img class="logo" src="/css/img/logo.png">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-7">
                    <div class="header_menu">
                        <div class="menu_inner">
                            <a href="/" class="menu_a">Главная</a>
                            <a href="/price" class="menu_a">Цены</a>
                            <a href="/service" class="menu_a">Умный дом</a>
                            <a href="/electrician" class="menu_a">Электромонтаж</a>
                            <a href="/portfolio" class="menu_a">Портфолио</a>
                            <a href="/contacts" class="menu_a">Контакты</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="conect_info">
                        <div class="header_num">
                            <p>(044) 337 24 15</p>
                            <p>(044) 337 24 15</p>
                        </div>
                        <a class="num_a" href="#">
                            Заказать обратный звонок
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer_inner">
                    <div class="footer_nav">
                        <div class="col-xl-3 col-lg-2 col-md-2">
                            <div class="footer_logo">
                                <img class="logo2" src="/css/img/logo.png">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12  col-12">
                            <div class="footer_menu">
                                <div class="Fmenu_inner">
                                    <a href="/" class="Fmenu_a">Главная</a>
                                    <a href="/price" class="Fmenu_a">Цены</a>
                                    <a href="/service" class="Fmenu_a">Умный дом</a>
                                    <a href="/electrician" class="Fmenu_a">Электромонтаж</a>
                                    <a href="/portfolio" class="Fmenu_a">Портфолио</a>
                                    <a href="/contacts" class="Fmenu_a">Контакты</a>
                                </div>
                                <div class="social">
                                    <div class="social_inner">
                                        <a class="social_a" href="#">
                                            <img class="social_img" src="/css/img/social1.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="Fconect_info">
                                <div class="footer_num">
                                    <p>(044) 337 24 15</p>
                                </div>
                                <a class="Fnum_a" href="#">
                                    Заказать обратный звонок
                                </a>
                                <a class="footer_email" href="#">e-mail: info@uplight.com.ua</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="/JS/Glider.js-master/glider.min.js"></script>
    <script type="text/javascript" src="/JS/touch-sideswipe.js"></script>
    <script type="text/javascript" src="/JS/app.js"></script>
</body>

</html>