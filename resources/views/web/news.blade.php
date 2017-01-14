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
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="newsContent text-center">
                        <img src="images/newspage/news1.jpg" alt="">
                        <div class="news">
                            <h2><a href="newsDetails.html">Good news from Spire</a></h2>
                            <a href="#">24 april 2015</a>
                            <p>Aliquam tincidunt risus leo, condimentum feugiat nisl commodo ac.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="newsContent text-center">
                        <img src="images/newspage/news2.jpg" alt="">
                        <div class="news">
                            <h2><a href="newsDetails.html">TOP 10 apps ever</a></h2>
                            <a href="#">22 april 2015</a>
                            <p>Maecenas verve leo, vehicula eu enim vel, commodo viverra sense.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="newsContent text-center">
                        <img src="images/newspage/news3.jpg" alt="">
                        <div class="news last">
                            <h2><a href="newsDetails.html">Free premium design for <br>free</a></h2>
                            <a href="#">18 april 2015</a>
                            <p>Vestibulum in ipsum nisi. Phasellus vitae placerat nunc, eget egestas risus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="newsContent text-center">
                        <img src="images/newspage/news4.jpg" alt="">
                        <div class="news">
                            <h2><a href="newsDetails.html">Concept art for free</a></h2>
                            <a href="#">24 april 2015</a>
                            <p>Aliquam tincidunt risus leo, condimentum feugiat nisl commodo ac.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="newsContent text-center">
                        <img src="images/newspage/news5.jpg" alt="">
                        <div class="news">
                            <h2><a href="newsDetails.html">One amazing design</a></h2>
                            <a href="#">22 april 2015</a>
                            <p>Maecenas verve leo, vehicula eu enim vel, commodo viverra sense.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="newsContent text-center">
                        <img src="images/newspage/news6.jpg" alt="">
                        <div class="news">
                            <h2><a href="newsDetails.html">Searching for partners</a></h2>
                            <a href="#">18 april 2015</a>
                            <p>Vestibulum in ipsum nisi. Phasellus vitae placerat nunc, eget egestas risus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="defaultPagination text-center wow fadeInUp" data-wow-duration="700ms"
                        data-wow-delay="300ms">
                        <li><a class="prePost" href="#"><i class="ion-ios-arrow-back"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a class="nextPost" href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection