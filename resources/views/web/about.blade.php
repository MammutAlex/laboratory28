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
                            <li>Про нас</li>
                        </ul>
                        <h1>Інформація про лабораторію</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($abouts as $about)
        <section class="serviceDetailsArea">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <h2 class="commonTittle">{{$about->title()}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="700ms"
                         data-wow-delay="300ms">
                        <div class="serviceDetailCont">
                            {!! $about->text() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection