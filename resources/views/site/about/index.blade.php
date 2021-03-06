@extends('layouts.web')
@section('title', 'Page index')
@section('content')
    <section class="callToFirstArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h1>{{$globals->index_title()}}</h1>
                    <hr>
                    <p>{{$globals->index_sub_title()}}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sliderArea">
        <div id="homeSlider">
            @foreach($images as $image)
                <div class="sliderImg" data-effect="blinds2" data-speed="2000">
                    <img src="{{url($image->image)}}" alt="{{$image->text}}">
                </div>
            @endforeach
        </div>
        <a href="#whatdo" class="downArrow"><i class="ion-android-arrow-down"></i></a>
    </section>
    <section class="whatWeDoArea" id="whatdo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <h2 class="commonTittle">{{$globals->index_we_doing_title()}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="commonTittle">
                        <p>{{$globals->index_we_doing_sub_title()}}</p>
                    </div>
                </div>
            </div>
            @foreach($whatDoes as $whatDoe)
                <div class="row widget">
                    <div class="col-lg-12">
                        <div class="callToTwoArea wow fadeInUp animated" data-wow-duration="700ms"
                             data-wow-delay="300ms"
                             style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                    <div class="infoIcon pull-left">
                                        <img src="/{{$whatDoe->image}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                    <p class="callTwoDesc pull-left">
                                        {{$whatDoe->text()}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="newsArea" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <h2 class="commonTittle">{{$globals->index_news_title()}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <p>{{$globals->index_news_sub_title()}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($news as $article)
                    <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms"
                         data-wow-delay="300ms">
                        <div class="newsContent text-center">
                            <img src="/{{$article->image}}">
                            <div class="news">
                                <h2>
                                    <a href="{{route('news.show',['id'=>$article->id])}}">
                                        {{$article->title()}}
                                    </a>
                                </h2>
                                <a href="{{route('news.show',['id'=>$article->id])}}">
                                    {{$article->date}}
                                </a>
                                <p>{{$article->description()}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                    <a href="{{route('news.index')}}" class="readMore">{{$globals->index_news_more()}}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bigDreamArea">
        <div class="overlay black"></div>
        <div class="videoEmbed" id="bigDream"
             data-property="{videoURL:'{{$video->video}}',showControls:false,containment:'self',autoPlay:false, loop:true, mute:true, startAt:2, opacity:1,}"></div>
        <div class="container dreamZindex">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-7 col-sm-12 col-xs-12 text-center wow fadeInUp"
                     data-wow-duration="700ms"
                     data-wow-delay="300ms">
                    <div class="bigDream">
                        <h1>{{$video->title()}}</h1>
                        <a href="#" class="dreamBtn">
                            <i class="ion-ios-play"></i>
                            <span>{{$globals->index_video_watch()}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teamArea" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <h2 class="commonTittle white">{{$globals->index_about_as_title()}}</h2>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                         data-wow-delay="300ms">
                        <div class="singleTeam">
                            <div class="teamImg">
                                <img src="/{{$team->photo}}">
                            </div>
                            <h3>{{$team->first_name()}}<span>{{$team->last_name}}</span></h3>
                            <span class="dot"></span>
                            <p>{{$team->position()}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="testimonialArea">
        <div class="container">
            <div class="row">
                <div id="testiCrousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="col-lg-offset-2 col-sm-offset-2 col-lg-8 col-sm-8 col-xs-12 text-center wow fadeInUp"
                                 data-wow-duration="700ms" data-wow-delay="300ms">
                                <div class="singleTestimonial">
                                    <div class="quoteIco">
                                        <i class="ion-quote"></i>
                                    </div>
                                    <h3>Spire is for you</h3>
                                    <p>
                                        Vivamus vulputate verve augue a ultrices. Vestibulum ante ipsum
                                        primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Nam pretium sense sit amet fringilla finibus. Nulla facilisi. Donec
                                        interdum nisl sit amet blandit dapibus. Etiam tincidunt facilisis
                                        tortor. Integer tincidunt tempor cursus.
                                    </p>
                                    <div class="testiImg">
                                        <img src="images/testimonial/testi.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-offset-2 col-sm-offset-2 col-lg-8 col-sm-8 col-xs-12 text-center">
                                <div class="singleTestimonial">
                                    <div class="quoteIco">
                                        <i class="ion-quote"></i>
                                    </div>
                                    <h3>Spire is for you</h3>
                                    <p>
                                        Vivamus vulputate verve augue a ultrices. Vestibulum ante ipsum
                                        primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Nam pretium sense sit amet fringilla finibus. Nulla facilisi. Donec
                                        interdum nisl sit amet blandit dapibus. Etiam tincidunt facilisis
                                        tortor. Integer tincidunt tempor cursus.
                                    </p>
                                    <div class="testiImg">
                                        <img src="images/testimonial/testi.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#testiCrousel" role="button" data-slide="prev">
                        <i class="ion-ios-arrow-back"></i>
                    </a>
                    <a class="right carousel-control" href="#testiCrousel" role="button" data-slide="next">
                        <i class="ion-ios-arrow-forward"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="clientArea" id="client">
        <div class="overlay black"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <h2 class="commonTittle white">{{$globals->index_partner_title()}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div id="clientTesti" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="clientTestimonila">
                                    <div class="clientIestiImg">
                                        <img src="images/clients/clientTesti1.jpg" alt="">
                                    </div>
                                    <div class="clientTestiContent text-center">
                                        <p>
                                            Molestie volutpat lacus. Duis et pretium dui. Sed sollicitudin elit at verve
                                            vulputate, et malesuada ipsum rutrum. Maecenas sense leo, vehicula eu enim
                                            vel,
                                            commodo viverra libero.
                                        </p>
                                        <span>David Burton, Manager at Corxcode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="clientTestimonila">
                                    <div class="clientIestiImg">
                                        <img src="images/clients/clientTesti1.jpg" alt="">
                                    </div>
                                    <div class="clientTestiContent text-center">
                                        <p>
                                            Molestie volutpat lacus. Duis et pretium dui. Sed sollicitudin elit at verve
                                            vulputate, et malesuada ipsum rutrum. Maecenas sense leo, vehicula eu enim
                                            vel,
                                            commodo viverra libero.
                                        </p>
                                        <span>David Burton, Manager at Corxcode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="clientTestimonila">
                                    <div class="clientIestiImg">
                                        <img src="images/clients/clientTesti1.jpg" alt="">
                                    </div>
                                    <div class="clientTestiContent text-center">
                                        <p>
                                            Molestie volutpat lacus. Duis et pretium dui. Sed sollicitudin elit at verve
                                            vulputate, et malesuada ipsum rutrum. Maecenas sense leo, vehicula eu enim
                                            vel,
                                            commodo viverra libero.
                                        </p>
                                        <span>David Burton, Manager at Corxcode</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#clientTesti" role="button" data-slide="prev">
                                <i class="ion-ios-arrow-back"></i>
                            </a>
                            <a class="right carousel-control" href="#clientTesti" role="button" data-slide="next">
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 text-center hidden-lg hidden-md hidden-sm">
                    <div id="cLogoCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="clientImg">
                                    <img src="images/clients/clientLogo1.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clientImg">
                                    <img src="images/clients/clientLogo3.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clientImg">
                                    <img src="images/clients/clientLogo5.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clientImg">
                                    <img src="images/clients/clientLogo2.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clientImg">
                                    <img src="images/clients/clientLogo4.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clientImg">
                                    <img src="images/clients/clientLogo6.png" alt="">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#cLogoCarousel" role="button" data-slide="prev">
                                <i class="ion-ios-arrow-back"></i>
                            </a>
                            <a class="right carousel-control" href="#cLogoCarousel" role="button" data-slide="next">
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 text-center hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="logoFirstRow pull-left">
                        <div class="clientImg">
                            <img src="images/clients/clientLogo1.png" alt="">
                        </div>
                        <div class="clientImg">
                            <img src="images/clients/clientLogo3.png" alt="">
                        </div>
                        <div class="clientImg last">
                            <img src="images/clients/clientLogo5.png" alt="">
                        </div>
                    </div>
                    <div class="logoSecondRow pull-right">
                        <div class="clientImg">
                            <img src="images/clients/clientLogo2.png" alt="">
                        </div>
                        <div class="clientImg">
                            <img src="images/clients/clientLogo4.png" alt="">
                        </div>
                        <div class="clientImg last">
                            <img src="images/clients/clientLogo6.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 text-center hidden-xs wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="logoFirstRow pull-left">
                        <div class="clientImg">
                            <img src="images/clients/clientLogo1.png" alt="">
                        </div>
                        <div class="clientImg">
                            <img src="images/clients/clientLogo3.png" alt="">
                        </div>
                        <div class="clientImg last">
                            <img src="images/clients/clientLogo5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactArea" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <h2 class="commonTittle">{{$globals->index_contact_title()}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="phoneContact">
                        <i class="ion-iphone"></i>
                        <h3>{{$globals->index_contact_phone}}</h3>
                        <i class="ion-android-mail"></i>
                        <a href="mailto:{{$globals->index_contact_email}}">{{$globals->index_contact_email}}</a>
                        <i class="ion-ios-location"></i>
                        <p>{{$globals->index_contact_address()}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <form action="#" class="contactForm" method="post">
                        <input class="required" type="text" name="name" placeholder="Name">
                        <input class="required" type="email" name="email" placeholder="Email">
                        <textarea class="required" name="textArea" placeholder="Message"></textarea>
                        <input id="conSubmit" type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div id="map" class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"></div>
@endsection