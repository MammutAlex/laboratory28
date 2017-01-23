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
                            <li>Лекції</li>
                        </ul>
                        <h1>{{$lecture->title()}}</h1>
                        <a class="catBtn">{{$lecture->date}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== Blog Details section ======================= -->
    <section class="blogDetailsArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="blogDetailContent">
                       {!! $lecture->text() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection