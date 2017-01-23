<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/all.css"/>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/images/logo.png">
    <!-- Favicon Icon -->

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<div class="loaderArea">
    <ul class="sistema">
        <li class="orbita"><i class="astro planeta plutao">Pluto</i></li>
        <li class="orbita"><i class="astro planeta netuno">Neptune</i></li>
        <li class="orbita"><i class="astro planeta urano">Uranus</i></li>
        <li class="orbita"><i class="astro planeta saturno">Saturn</i></li>
        <li class="orbita"><i class="astro planeta jupiter">Jupiter</i></li>
        <li class="orbita">Solar System</li>
        <li class="orbita"><i class="astro planeta marte">Mars</i></li>
        <li class="orbita"><i class="astro planeta terra">Terra</i></li>
        <li class="orbita"><i class="astro planeta venus">Venus</i></li>
        <li class="orbita"><i class="astro planeta mercurio">Mercury</i></li>
        <li class="orbita"><i class="astro sol">Solar</i></li>
    </ul>
</div>
<header class="headerArea" id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-xs-12 text-left hidden-lg hidden-md hidden-sm">
                <ul class="socialIcon">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-sm-4 col-xs-9 text-left">
                <a href="{{route('index')}}" class="logoArea">
                    <div class="logoImg pull-left">
                        <img src="/images/logo.png" alt="">
                    </div>
                    <h1 class="pull-left">PsiHi</h1>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-5 col-xs-12 text-left hidden-xs">
                <ul class="socialIcon">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3">
                <div class="menuBtn">
                    <a href="#"><i class="ion-android-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================== Main menu section ======================= -->
    <nav class="mainMenu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <ul class="menus">
                        <li class="scroll"><a href="{{route('index')}}">Домашня</a></li>
                        <li class="scroll"><a href="{{route('about')}}">Про нас</a></li>
                        <li class="scroll"><a href="{{route('seminars')}}">Семінари</a></li>
                        <li class="scroll"><a href="{{route('publications')}}">Публікації</a></li>
                        <li class="scroll"><a href="{{route('lectures')}}">Лекції</a></li>
                        <li class="scroll"><a href="{{route('news.index')}}">Новини</a></li>
                        <li class="scroll"><a href="{{route('links')}}">Посилання</a></li>
                        <li class="hasChild">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <b class="caret"></b> {{ Config::get('languages')[App::getLocale()] }}
                            </a>
                            <ul class="dropDown">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <li>
                                            <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<footer class="footerArea">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                <ul class="footerMenu pull-left text-left">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">What we do</a></li>
                    <li><a href="#">Plans & Pricing</a></li>
                    <li><a href="#">What is Spire</a></li>
                </ul>
                <ul class="footerMenu pull-right text-left">
                    <li><a href="#">Our team</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1 col-sm-offset-1 col-xs-12 noPadding wow zoomIn"
                 data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="footerAbout">
                    <h4>About us</h4>
                    <p>
                        Kivamus vulputate vitae augue a ultrices. Vestibulum verve ipsum primis in
                        faucibus orci luctus ultrices posuere cubilia Curae. Nam pretium turpis
                        sense fringilla finibus. Nulla facilisi. Donec interdum nisl sit amet
                        blandit dapibus.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1 col-sm-offset-1 col-xs-12 wow zoomIn"
                 data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="footerSocial">
                    <h4>Stay tuned</h4>
                    <ul>
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
                        <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                    </ul>
                    <form action="#" class="footerSubScribe" method="post">
                        <input type="email" id="footEmail" name="email" placeholder="Enter your e-mail">
                        <button type="submit" id="footSubmit" name="subBtn"><i class="ion-ios-arrow-thin-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="copyRight">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="copyText pull-left text-left wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <p>
                        2015 Copyright - Spire theme.<br>
                        All rights reserved. Developed by <a href="http://themewar.com">ThemeWar</a>.
                    </p>
                </div>
                <div class="footerLogo pull-left wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="logoImg pull-left">
                        <img src="images/logo.png" alt="">
                    </div>
                    <h1 class="pull-left"><a href="{{route('index')}}">PsiHi</a></h1>
                </div>
                <!-- ===================== Back To Top ======================= -->
                <a href="#" id="backTo"><i class="ion-ios-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="/js/gmaps.js"></script>
<script type="text/javascript" src="/js/appear.js"></script>
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/js/mixer.js"></script>
<script type="text/javascript" src="/js/wow.min.js"></script>
<script type="text/javascript" src="/js/jquery.sudoSlider.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="/js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="/js/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript" src="/js/jssocials.min.js"></script>
<script type="text/javascript" src="/js/theme.js"></script>
@yield('script')
</body>
</html>