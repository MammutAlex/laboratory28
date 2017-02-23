
<footer class="footerArea">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                <ul class="footerMenu pull-left text-left">
                    <li><a href="{{route('index')}}">{{trans('web.menu.index')}}</a></li>
                    <li><a href="{{route('about')}}">{{trans('web.menu.about')}}</a></li>
                    <li><a href="{{route('seminars.index')}}">{{trans('web.menu.seminars')}}</a></li>
                </ul>
                <ul class="footerMenu pull-right text-left">
                    <li><a href="{{route('publications')}}">{{trans('web.menu.publications')}}</a></li>
                    <li><a href="{{route('lectures.index')}}">{{trans('web.menu.lectures')}}</a></li>
                    <li><a href="{{route('news.index')}}">{{trans('web.menu.news')}}</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1 col-sm-offset-1 col-xs-12 noPadding wow zoomIn"
                 data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="footerAbout">
                    <h4>{{$globals->index_about_title()}}</h4>
                    <p>
                        {{$globals->index_about_text()}}
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1 col-sm-offset-1 col-xs-12 wow zoomIn"
                 data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="footerSocial">
                    <h4>Stay tuned</h4>
                    @include('layouts.elements.social')
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
                        Developed by <a href="https://github.com/MammutCris">mammut</a>
                    </p>
                </div>
                <div class="footerLogo pull-left wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="logoImg pull-left">
                        <img src="/{{$globals->logo}}">
                    </div>
                    <h1 class="pull-left"><a href="{{route('index')}}">PsiHi</a></h1>
                </div>
                <!-- ===================== Back To Top ======================= -->
                <a href="#" id="backTo"><i class="ion-ios-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>