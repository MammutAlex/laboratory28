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
                        <h1>News</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== News section ======================= -->
    <section class="newsPageArea">
        <div class="container">
            <div class="row">
                @foreach($news as $article)
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms"
                         data-wow-delay="300ms">
                        <div class="newsContent text-center">
                            <img src="/{{$article->image}}">
                            <div class="news">
                                <h2>
                                    <a href="{{route('news.show',['id'=>$article->id])}}">
                                        {{$article->title()}}
                                    </a>
                                </h2>
                                <a href="{{route('news.show',['id'=>$article->id])}}">
                                    {{$article->date}}
                                </a>
                                <p>{{$article->description()}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{$news->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection