@extends('layouts.web')
@section('title', 'About')
@section('content')
    <section class="breadCrumbArea blogPage">
        <div class="breadOverlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <div class="breadContent">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span class="dot"></span></li>
                            <li>Blog</li>
                        </ul>
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($lastLecture)
    <section class="blogPageArea">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="row">
                            <div class="blogContentArea">
                                <div class="col-lg-4 col-sm-4 col-xs-12 noPadding">
                                    <div class="blogContent text-center">
                                        <h2><a href="{{route('lectures.show',['id'=>$lastLecture->id])}}">{{$lastLecture->title()}}</a></h2>
                                        <span class="dot"></span>
                                        <p>{{$lastLecture->description()}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-xs-12 noPadding">
                                    <div class="blogBigThumb">
                                        <div class="overlay"></div>
                                        <img src="/{{$lastLecture->image}}" alt="">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="blogCateArea">
        <div class="container">
            <div class="row">
                @foreach($lectures as $key=>$lecture)
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="blogPostContent">
                        <div class="smallAuthor pull-left">
                            <img src="/{{$lecture->image}}" alt="">
                        </div>
                        <div class="blogPost pull-left">
                            <h5><a href="{{route('lectures.show',['id'=>$lecture->id])}}">{{$lecture->title()}}</a></h5>
                            <p>{{$lecture->description()}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                    {{$lectures->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection