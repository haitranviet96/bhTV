@extends('layouts.default')

@section('title','Movie Database')

@section('content')

<section class="bg-primary" id="popular">
    <div class="container">
        <div class="row">
            <h2 class="margin-top-1 text-primary">On Popular Nowadays</h2>
            <hr class="primary">
            <div class="pop_film">
                <div class="info-first">
                    <img src="./assets/Yasuo1.png" width="100%" height="100%">
                </div>
                <div class="info-second">
                    <img src="./assets/blitzcrank.png">
                </div>
                <div class="info-third">
                    <img src="./assets/blitzcrank2.png">
                </div>
            </div>
            <div class="pop_film">
                <div class="info-second">
                    <img src="./assets/blitzcrank.png">
                </div>
                <div class="info-third">
                    <img src="./assets/blitzcrank2.png">
                </div>
                <div class="info-first">
                    <img src="./assets/Yasuo2.png" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Up Coming Movies</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    {{--<i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>--}}
                    <img src="./assets/batman.png" width="300px" height="400px">
                    <h3>The Dark Knight</h3>
                    <p class="text-muted">FUCK YEAH</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <img src="./assets/snowden.png" width="300px" height="400px">
                    <h3>SNOWDEN</h3>
                    <p class="text-muted">FUCK YEAH</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <img src="./assets/watchmen.jpg" width="300px" height="400px">
                    <h3>Consistent</h3>
                    <p class="text-muted">A mature, well-tested, stable codebase</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--
<section id="three" class="no-padding">--}}
    {{--
    <div class="container-fluid">--}}
        {{--
        <div class="row no-gutter">--}}
            {{--
            <div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/deer.jpg">--}}
                    {{--<img src="./assets/deer.jpg" class="img-responsive" alt="Image 1">--}}
                    {{--
                    <div class="gallery-box-caption">--}}
                        {{--
                        <div class="gallery-box-content">--}}
                            {{--
                            <div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--</a>--}}
                {{--
            </div>
            --}}
            {{--
            <div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/beach.jpg">--}}
                    {{--<img src="./assets/beach.jpg" class="img-responsive" alt="Image 2">--}}
                    {{--
                    <div class="gallery-box-caption">--}}
                        {{--
                        <div class="gallery-box-content">--}}
                            {{--
                            <div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--</a>--}}
                {{--
            </div>
            --}}
            {{--
            <div class="clearfix hidden-lg"></div>
            --}}
            {{--
            <div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/lake.jpg">--}}
                    {{--<img src="./assets/lake.jpg" class="img-responsive" alt="Image 3">--}}
                    {{--
                    <div class="gallery-box-caption">--}}
                        {{--
                        <div class="gallery-box-content">--}}
                            {{--
                            <div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--</a>--}}
                {{--
            </div>
            --}}
            {{--
            <div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/bike.jpg">--}}
                    {{--<img src="./assets/bike.jpg" class="img-responsive" alt="Image 4">--}}
                    {{--
                    <div class="gallery-box-caption">--}}
                        {{--
                        <div class="gallery-box-content">--}}
                            {{--
                            <div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--</a>--}}
                {{--
            </div>
            --}}
            {{--
            <div class="clearfix hidden-lg"></div>
            --}}
            {{--
            <div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/city.jpg">--}}
                    {{--<img src="./assets/city.jpg" class="img-responsive" alt="Image 5">--}}
                    {{--
                    <div class="gallery-box-caption">--}}
                        {{--
                        <div class="gallery-box-content">--}}
                            {{--
                            <div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--</a>--}}
                {{--
            </div>
            --}}
            {{--
            <div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/colors.jpg">--}}
                    {{--<img src="./assets/colors.jpg" class="img-responsive" alt="Image 6">--}}
                    {{--
                    <div class="gallery-box-caption">--}}
                        {{--
                        <div class="gallery-box-content">--}}
                            {{--
                            <div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--</a>--}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
</section>--}}
{{--
<section class="container-fluid" id="four">--}}
    {{--
    <div class="row">--}}
        {{--
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">--}}
            {{--<h2 class="text-center text-primary">Features</h2>--}}
            {{--
            <hr>
            --}}
            {{--
            <div class="media wow fadeInRight">--}}
                {{--<h3>Simple</h3>--}}
                {{--
                <div class="media-body media-middle">--}}
                    {{--<p>What could be easier? Get started fast with this landing page starter theme.</p>--}}
                    {{--
                </div>
                --}}
                {{--
                <div class="media-right">--}}
                    {{--<i class="icon-lg ion-ios-bolt-outline"></i>--}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
            <hr>
            --}}
            {{--
            <div class="media wow fadeIn">--}}
                {{--<h3>Free</h3>--}}
                {{--
                <div class="media-left">--}}
                    {{--<a href="#alertModal" data-toggle="modal" data-target="#alertModal"><i
                                class="icon-lg ion-ios-cloud-download-outline"></i></a>--}}
                    {{--
                </div>
                --}}
                {{--
                <div class="media-body media-middle">--}}
                    {{--<p>Yes, please. Grab it for yourself, and make something awesome with this.</p>--}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
            <hr>
            --}}
            {{--
            <div class="media wow fadeInRight">--}}
                {{--<h3>Unique</h3>--}}
                {{--
                <div class="media-body media-middle">--}}
                    {{--<p>Because you don't want your Bootstrap site, to look like a Bootstrap site.</p>--}}
                    {{--
                </div>
                --}}
                {{--
                <div class="media-right">--}}
                    {{--<i class="icon-lg ion-ios-snowy"></i>--}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
            <hr>
            --}}
            {{--
            <div class="media wow fadeIn">--}}
                {{--<h3>Popular</h3>--}}
                {{--
                <div class="media-left">--}}
                    {{--<i class="icon-lg ion-ios-heart-outline"></i>--}}
                    {{--
                </div>
                --}}
                {{--
                <div class="media-body media-middle">--}}
                    {{--<p>There's good reason why Bootstrap is the most used frontend framework in the world.</p>--}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
            <hr>
            --}}
            {{--
            <div class="media wow fadeInRight">--}}
                {{--<h3>Tested</h3>--}}
                {{--
                <div class="media-body media-middle">--}}
                    {{--<p>Bootstrap is matured and well-tested. It's a stable codebase that provides consistency.</p>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="media-right">--}}
                    {{--<i class="icon-lg ion-ios-flask-outline"></i>--}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
</section>--}}
{{--
<aside class="bg-dark">--}}
    {{--
    <div class="container text-center">--}}
        {{--
        <div class="call-to-action">--}}
            {{--<h2 class="text-primary">Get Started</h2>--}}
            {{--<a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext"
                   class="btn btn-default btn-lg wow flipInX">Free Download</a>--}}
            {{--
        </div>
        --}}
        {{--<br>--}}
        {{--
        <hr/>
        --}}
        {{--<br>--}}
        {{--
        <div class="row">--}}
            {{--
            <div class="col-lg-10 col-lg-offset-1">--}}
                {{--
                <div class="row">--}}
                    {{--<h6 class="wide-space text-center">BOOTSTRAP IS BASED ON THESE STANDARDS</h6>--}}
                    {{--
                    <div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-html5-outline" title="html 5"></i>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-sass" title="sass"></i>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-javascript-outline" title="javascript"></i>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-css3-outline" title="css 3"></i>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
</aside>--}}
<section id="last">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                <hr class="primary">
                <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <form class="contact-form row">
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label></label>
                        <button type="button" data-toggle="modal" data-target="#alertModal"
                                class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection