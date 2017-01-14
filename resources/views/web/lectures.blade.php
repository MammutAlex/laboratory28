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
    <section class="blogPageArea">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="row">
                            <div class="blogContentArea">
                                <div class="col-lg-4 col-sm-4 col-xs-12 noPadding">
                                    <div class="blogContent text-center">
                                        <h2><a href="blogCategory.html">How to make an awesome design</a></h2>
                                        <span class="dot"></span>
                                        <p>Aliquam tincidunt risus leo, condimentum feugiat nisl commodo ac.</p>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-xs-12 noPadding">
                                    <div class="blogBigThumb">
                                        <div class="overlay"></div>
                                        <img src="images/blog/blogThumb.jpg" alt="">
                                        <div class="bigAuthor">
                                            <div class="bigAuthorImg">
                                                <img src="images/blog/author1.jpg" alt="">
                                            </div>
                                            <h4><a href="blogCategory.html">Kate <span>Smith</span></a></h4>
                                        </div>
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
    <section class="blogCateArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="blogPostContent">
                        <div class="smallAuthor pull-left">
                            <img src="images/blog/author2.jpg" alt="">
                        </div>
                        <div class="blogPost pull-left">
                            <h5><a href="blogDetails.html">Minimal accessories design in Spire</a></h5>
                            <p>Proin sit amet lacus sapien. Vivamus vel ultrices nulla.</p>
                            <p class="postedBy">by<a href="#"> Alexander Solomon</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="blogPostContent">
                        <div class="smallAuthor pull-left">
                            <img src="images/blog/author3.jpg" alt="">
                        </div>
                        <div class="blogPost pull-left">
                            <h5><a href="blogDetails.html">Goose, birds and rock-n-roll</a></h5>
                            <p>Destibulum dignissim posuere neque sed pellentesque.</p>
                            <p class="postedBy">by<a href="#"> Debbie Brown</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="blogPostContent">
                        <div class="smallAuthor pull-left">
                            <img src="images/blog/author4.jpg" alt="">
                        </div>
                        <div class="blogPost pull-left">
                            <h5><a href="blogDetails.html">Spacedive in the outer-space</a></h5>
                            <p>Etiam et varius lacus phasellus eu lorem</p>
                            <p class="postedBy">by<a href="#"> Michael Doe</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="blogPostContent">
                        <div class="smallAuthor pull-left">
                            <img src="images/blogCategory/auth1.jpg" alt="">
                        </div>
                        <div class="blogPost pull-left">
                            <h5><a href="blogDetails.html">New generation of concept art</a></h5>
                            <p>Proin sit amet lacus sapien. Vivamus vel ultrices nulla.</p>
                            <p class="postedBy">by<a href="#"> Alexander Solomon</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="blogPostContent">
                        <div class="smallAuthor pull-left">
                            <img src="images/blogCategory/auth2.jpg" alt="">
                        </div>
                        <div class="blogPost pull-left">
                            <h5><a href="blogDetails.html">Grass design with natural flavor</a></h5>
                            <p>Destibulum dignissim posuere neque sed pellentesque.</p>
                            <p class="postedBy">by<a href="#"> Debbie Brown</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="blogPostContent">
                        <div class="smallAuthor pull-left">
                            <img src="images/blogCategory/auth3.jpg" alt="">
                        </div>
                        <div class="blogPost pull-left">
                            <h5><a href="blogDetails.html">Top list of L.A. street art locations</a></h5>
                            <p>Etiam et varius lacus phasellus eu lorem</p>
                            <p class="postedBy">by<a href="#"> Michael Doe</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                    <ul class="defaultPagination text-center">
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