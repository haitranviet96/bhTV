<header id="first">
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top affix">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/"><i class="ion-ios-analytics-outline"></i> bhTV</a>
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
                        <a class="page-scroll" data-toggle="modal" title="Login to your account" href="/login">Login</a>
                    </li>
                    <li class="discover">
                        <a class="page-scroll" data-toggle="modal" title="Create a new account for free" href="/register">Sign Up</a>
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