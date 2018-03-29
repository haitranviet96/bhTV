<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>bhTV</title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
</head>
<body>

<header id="first">
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> bhTV</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li class="discover">
                        <a class="page-scroll" href="">Discover</a>
                        <ul class="sub_menu_discover">
                            <li><a class="page-scroll" href="">Movies</a></li>
                            <li><a class="page-scroll" href="">TV Shows</a></li>
                        </ul>
                    </li>
                    <li class="discover">
                        <a class="page-scroll" href="">Movies</a>
                        <ul class="sub_menu_discover">
                            <li><a class="page-scroll" href="">Popular</a></li>
                            <li><a class="page-scroll" href="">Top Rated</a></li>
                            <li><a class="page-scroll" href="">Upcoming</a></li>
                            <li><a class="page-scroll" href="">Now Playing</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll people" href="">People</a>
                    </li>
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="#four">Features</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="#last">Contact</a>--}}
                    {{--</li>--}}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="discover">
                        <a class="page-scroll" data-toggle="modal" title="Login to your account" href="#aboutModal">Login</a>
                    </li>
                    <li class="discover">
                        <a class="page-scroll" data-toggle="modal" title="Create a new account for free" href="#aboutModal">Sign Up</a>
                    </li>
                </ul>
                <div class="search_bar">
                    <div class="sub_media">
                        <form id="search_form" action="/search" method="get" accept-charset="utf-8">
                            <input type="text" placeholder="Search for a movie, tv show, person...">
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </nav>

</header>

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
{{--<section id="three" class="no-padding">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row no-gutter">--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/deer.jpg">--}}
                    {{--<img src="./assets/deer.jpg" class="img-responsive" alt="Image 1">--}}
                    {{--<div class="gallery-box-caption">--}}
                        {{--<div class="gallery-box-content">--}}
                            {{--<div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/beach.jpg">--}}
                    {{--<img src="./assets/beach.jpg" class="img-responsive" alt="Image 2">--}}
                    {{--<div class="gallery-box-caption">--}}
                        {{--<div class="gallery-box-content">--}}
                            {{--<div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="clearfix hidden-lg"> </div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/lake.jpg">--}}
                    {{--<img src="./assets/lake.jpg" class="img-responsive" alt="Image 3">--}}
                    {{--<div class="gallery-box-caption">--}}
                        {{--<div class="gallery-box-content">--}}
                            {{--<div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/bike.jpg">--}}
                    {{--<img src="./assets/bike.jpg" class="img-responsive" alt="Image 4">--}}
                    {{--<div class="gallery-box-caption">--}}
                        {{--<div class="gallery-box-content">--}}
                            {{--<div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="clearfix hidden-lg"> </div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/city.jpg">--}}
                    {{--<img src="./assets/city.jpg" class="img-responsive" alt="Image 5">--}}
                    {{--<div class="gallery-box-caption">--}}
                        {{--<div class="gallery-box-content">--}}
                            {{--<div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-sm-6">--}}
                {{--<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/colors.jpg">--}}
                    {{--<img src="./assets/colors.jpg" class="img-responsive" alt="Image 6">--}}
                    {{--<div class="gallery-box-caption">--}}
                        {{--<div class="gallery-box-content">--}}
                            {{--<div>--}}
                                {{--<i class="icon-lg ion-ios-search"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<section class="container-fluid" id="four">--}}
    {{--<div class="row">--}}
        {{--<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">--}}
            {{--<h2 class="text-center text-primary">Features</h2>--}}
            {{--<hr>--}}
            {{--<div class="media wow fadeInRight">--}}
                {{--<h3>Simple</h3>--}}
                {{--<div class="media-body media-middle">--}}
                    {{--<p>What could be easier? Get started fast with this landing page starter theme.</p>--}}
                {{--</div>--}}
                {{--<div class="media-right">--}}
                    {{--<i class="icon-lg ion-ios-bolt-outline"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="media wow fadeIn">--}}
                {{--<h3>Free</h3>--}}
                {{--<div class="media-left">--}}
                    {{--<a href="#alertModal" data-toggle="modal" data-target="#alertModal"><i class="icon-lg ion-ios-cloud-download-outline"></i></a>--}}
                {{--</div>--}}
                {{--<div class="media-body media-middle">--}}
                    {{--<p>Yes, please. Grab it for yourself, and make something awesome with this.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="media wow fadeInRight">--}}
                {{--<h3>Unique</h3>--}}
                {{--<div class="media-body media-middle">--}}
                    {{--<p>Because you don't want your Bootstrap site, to look like a Bootstrap site.</p>--}}
                {{--</div>--}}
                {{--<div class="media-right">--}}
                    {{--<i class="icon-lg ion-ios-snowy"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="media wow fadeIn">--}}
                {{--<h3>Popular</h3>--}}
                {{--<div class="media-left">--}}
                    {{--<i class="icon-lg ion-ios-heart-outline"></i>--}}
                {{--</div>--}}
                {{--<div class="media-body media-middle">--}}
                    {{--<p>There's good reason why Bootstrap is the most used frontend framework in the world.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="media wow fadeInRight">--}}
                {{--<h3>Tested</h3>--}}
                {{--<div class="media-body media-middle">--}}
                    {{--<p>Bootstrap is matured and well-tested. It's a stable codebase that provides consistency.</p>--}}
                {{--</div>--}}
                {{--<div class="media-right">--}}
                    {{--<i class="icon-lg ion-ios-flask-outline"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<aside class="bg-dark">--}}
    {{--<div class="container text-center">--}}
        {{--<div class="call-to-action">--}}
            {{--<h2 class="text-primary">Get Started</h2>--}}
            {{--<a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext" class="btn btn-default btn-lg wow flipInX">Free Download</a>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<hr/>--}}
        {{--<br>--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-10 col-lg-offset-1">--}}
                {{--<div class="row">--}}
                    {{--<h6 class="wide-space text-center">BOOTSTRAP IS BASED ON THESE STANDARDS</h6>--}}
                    {{--<div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-html5-outline" title="html 5"></i>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-sass" title="sass"></i>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-javascript-outline" title="javascript"></i>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3 col-xs-6 text-center">--}}
                        {{--<i class="icon-lg ion-social-css3-outline" title="css 3"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</aside>--}}
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
                        <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-3 column">
                <h4>Information</h4>
                <ul class="list-unstyled">
                    <li><a href="">Products</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Benefits</a></li>
                    <li><a href="">Developers</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 column">
                <h4>About</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 column">
                <h4>Stay Posted</h4>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-3 text-right">
                <h4>Follow</h4>
                <ul class="list-inline">
                    <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                </ul>
            </div>
        </div>
        <br/>
        <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Landing Zero by BootstrapZero</a> ©2015 Company</span>
    </div>
</footer>
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img src="" id="galleryImage" class="img-responsive" />
                <p>
                    <br/>
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Landing Zero Theme</h2>
                <h5 class="text-center">
                    A free, responsive landing page theme built by BootstrapZero.
                </h5>
                <p class="text-justify">
                    This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling.
                    There are vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin. There is also a gallery with modals
                    that work nicely to showcase your work portfolio. Other features include a contact form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
                </p>
                <p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
            </div>
        </div>
    </div>
</div>
<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Nice Job!</h2>
                <p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
                <p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            </div>
        </div>
    </div>
</div>
<!--scripts loaded here -->
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.easing.min.js"></script>
<script src="./js/wow.js"></script>
<script src="./js/scripts.js"></script>
</body>
</html>