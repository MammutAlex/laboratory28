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
                            <li>Публікації</li>
                        </ul>
                        <h1>Публікації лабораторії</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="serviceDetailsArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="300ms">
                    <div class="serviceDetailCont">
                        @foreach($publications as $publication)
                            <div class="firsOderList">
                                <h5>{{$publication[0]->date->year}}</h5>
                                <ol>
                                    @foreach($publication as $value)
                                        <li>{!! $value->text() !!}</li>
                                    @endforeach
                                </ol>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection