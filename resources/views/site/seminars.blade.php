@extends('layouts.web')
@section('title', 'About')
@section('content')
    <section class="breadCrumbArea servicePage">
        <div class="breadOverlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <div class="breadContent">
                        <ul>
                            <li><a href="index.html">Домашня</a></li>
                            <li><span class="dot"></span></li>
                            <li>Семінари</li>
                        </ul>
                        <h1>{{$globals->seminar_title()}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="whatSpireArea" id="whatspire">

        <div class="container">
            @foreach($seminars as $key=>$seminar)
                @if($key == 0)
                    <div class="row">
                        <div class="col-lg-8 col-sm-7 col-xs-12 text-center hidden-lg hidden-md hidden-sm">
                            <img class="seminars-image" src="/{{$seminar->image}}">
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 text-right noPaddingRight wow fadeInUp"
                             data-wow-duration="700ms"
                             data-wow-delay="300ms">
                            <div class="promoCont">
                                <h1><a href="{{route('seminars.show',['id'=>$seminar->id])}}">{{$seminar->title()}}</a>
                                </h1>
                                <p>
                                    {{$seminar->description()}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6 col-xs-12 text-right hidden-xs wow fadeInUp"
                             data-wow-duration="700ms"
                             data-wow-delay="350ms">
                            <img class="seminars-image" src="/{{$seminar->image}}">
                        </div>
                    </div>
                    <hr>
                @elseif($key == 1)
                    <div class="row">
                        <div class="col-lg-8 col-sm-7 col-xs-12 text-center">
                            <img class="seminars-image" src="/{{$seminar->image}}">
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 text-left noPaddingRight wow fadeInUp"
                             data-wow-duration="700ms"
                             data-wow-delay="300ms">
                            <div class="promoCont">
                                <h1><a href="{{route('seminars.show',['id'=>$seminar->id])}}">{{$seminar->title()}}</a>
                                </h1>
                                <p>
                                    {{$seminar->description()}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                @elseif($key == 2)
                    <div class="row">
                        <div class="col-lg-8 col-sm-7 col-xs-12 text-center hidden-lg hidden-md hidden-sm">
                            <img class="seminars-image" src="/{{$seminar->image}}">
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 text-left noPaddingRight wow fadeInUp"
                             data-wow-duration="700ms"
                             data-wow-delay="300ms">
                            <div class="promoCont">
                                <h1><a href="{{route('seminars.show',['id'=>$seminar->id])}}">{{$seminar->title()}}</a>
                                </h1>
                                <p>
                                    {{$seminar->description()}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6 col-xs-12 text-right hidden-xs wow fadeInUp"
                             data-wow-duration="700ms"
                             data-wow-delay="350ms">
                            <img class="seminars-image" src="/{{$seminar->image}}">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="450ms"
                 style="visibility: visible; animation-duration: 700ms; animation-delay: 450ms; animation-name: fadeInUp;">
                <ul class="defaultPagination text-center">
                    {{$seminars->links()}}
                </ul>
            </div>
        </div>
    </section>
@endsection