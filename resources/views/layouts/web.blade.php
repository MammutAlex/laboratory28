<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/all.css"/>
    <link rel="icon" type="image/png" href="/images/logo.png">

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
@include('layouts.elements.load')
<header class="headerArea" id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-xs-12 text-left hidden-lg hidden-md hidden-sm">
                @include('layouts.elements.social')
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
                @include('layouts.elements.social')
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3">
                <div class="menuBtn">
                    <a href="#"><i class="ion-android-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.elements.menu')
</header>
@yield('content')

@include('layouts.elements.footer')

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