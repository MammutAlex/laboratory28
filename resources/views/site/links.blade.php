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
                            <li>Посилання</li>
                        </ul>
                        <h1>Корисні посилання якими ми надихаємось</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clientArea" id="client">
        <div class="overlay black"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <h2 class="commonTittle white">Бібліотека</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-12 text-center hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="logoFirstRow">
                        <div class="clientImg">
                            <img src="images/clients/clientLogo1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12 text-center hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="logoFirstRow">
                        <div class="clientImg">
                            <img src="images/clients/clientLogo1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12 text-center hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="logoFirstRow">
                        <div class="clientImg">
                            <img src="images/clients/clientLogo1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12 text-center hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="logoFirstRow">
                        <div class="clientImg">
                            <img src="images/clients/clientLogo1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection