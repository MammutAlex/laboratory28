@extends('layouts.web')
@section('title', 'About')
@section('content')
    <section class="breadCrumbArea newsPage">
        <div class="breadOverlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <div class="breadContent">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span class="dot"></span></li>
                            <li>News</li>
                        </ul>
                        <h1>{{$article->title()}}</h1>
                        <a class="catBtn">{{$article->date}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsDetailsArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12 noPaddingRight wow fadeInUp animated" data-wow-duration="700ms"
                     data-wow-delay="300ms"
                     style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="newsThmumb">
                        <img src="/{{$article->image}}">>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="700ms"
                     data-wow-delay="350ms"
                     style="visibility: visible; animation-duration: 700ms; animation-delay: 350ms; animation-name: fadeInUp;">
                    <div class="newsDetailContent">
                        <h5 class="firstHead">
                            {{$article->description()}}
                        </h5>
                        {!! $article->text() !!}
                        <div class="postShareOption">
                            <div class="ya-share2" data-services="vkontakte,facebook,twitter,linkedin"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
@endsection