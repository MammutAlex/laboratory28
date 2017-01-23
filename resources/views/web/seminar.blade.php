@extends('layouts.web')
@section('title', 'About')
@section('content')
    <!-- ===================== Breadcrumbs section ======================= -->
    <section class="breadCrumbArea blogDetaisPage">
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
                        <h1>{{$seminar->title()}}</h1>
                        <a class="catBtn" href="#">{{$seminar->date}}</a>
                        <div class="bigAuthorImg">
                            <img alt="" src="/{{$seminar->author->image}}">
                        </div>
                        <h4><a href="blogCategory.html">Kate <span>Smith</span></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blogDetailsArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-8 col-xs-12">
                    <div class="blogDetailContent">
                        {!! $seminar->text() !!}
                    </div>
                    <div class="socialShare wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-4 col-sm-4 col-xs-12">
                    @foreach($likes as $key=>$like)
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            @if($key == 0)<h4 class="widgetTitle text-center">{{$like->title()}}</h4>@endif
                            <div class="blogPostContent">
                                <div class="smallAuthor pull-left">
                                    <img src="/{{$like->image}}">
                                </div>
                                <div class="blogPost pull-left">
                                    <h5>
                                        <a href="{{route('seminars.show',['id'=>$like->id])}}">
                                            {{$like->description()}}
                                        </a>
                                    </h5>
                                    <p>
                                        {{$like->description()}}
                                    </p>
                                    <p class="postedBy">{{$like->author->name()}}</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </aside>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@endsection