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
                        <h1>Саморозвиток лабораторії</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="whatSpireArea" id="whatspire">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-xs-12 text-center hidden-lg hidden-md hidden-sm">
                    <div class="iMacImg">
                        <img src="images/mac.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 text-right noPaddingRight wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="300ms">
                    <div class="promoCont">
                        <h1>Stunning<span>design</span></h1>
                        <p>
                            Curabitur vel verve risus, in scelerisque nisi. Praesent non congue
                            sense. In vel lacus ac quam fermentum fringilla sed vel ipsum.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 col-xs-12 text-right hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="iMacImg">
                        <img src="images/mac.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12 posRele wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="crossLine"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-6 col-xs-12 text-left wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="300ms">
                    <div class="iPhoneImg">
                        <img src="images/iphone.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 text-left wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="promoCont second">
                        <h1>Great<span>apps</span></h1>
                        <p>
                            Aliquam ante justo, verve non mi nec, vehicula egestas nisi. Aliquam vel
                            sense nisl. Sed ut consectetur sem, quis pretium sem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 hidden-sm col-xs-12 text-left"></div>
                <div class="col-lg-12 posRele wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="crossLine two"></div>
                </div>
            </div>
            <div class="row marginTop">
                <div class="col-lg-8 col-sm-8 col-xs-12 text-center hidden-lg hidden-md hidden-sm">
                    <div class="macImg">
                        <img src="images/macbook.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 text-right wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="300ms">
                    <div class="promoCont third">
                        <h1>Awesome<span>themes</span></h1>
                        <p>
                            Fusce pulvinar nunc verve, sed viverra quam commodo ut. Mauris quis
                            sense iaculis, tempor sapien sit amet, placerat nulla.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 col-xs-12 text-right hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="macImg">
                        <img src="images/macbook.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="450ms"
                 style="visibility: visible; animation-duration: 700ms; animation-delay: 450ms; animation-name: fadeInUp;">
                <ul class="defaultPagination text-center">
                    <li><a class="prePost" href="#"><i class="ion-ios-arrow-back"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="nextPost" href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection