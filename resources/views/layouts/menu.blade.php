<link rel="stylesheet" type="text/css" href="{{URL::asset('css/search.css')}}">
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
                        <a class="page-scroll" href="/discover">Discover</a>
                        <ul class="sub_menu_discover">
                            <li><a class="page-scroll" href="/discover">Movies</a></li>
                        </ul>
                    </li>
                    <li class="discover">
                        <a class="page-scroll" href="/movie/popular">Movies</a>
                        <ul class="sub_menu_discover">
                            <li><a class="page-scroll" href="/movie/popular">Popular</a></li>
                            <li><a class="page-scroll" href="/movie/top_rated">Top Rated</a></li>
                            <li><a class="page-scroll" href="/movie/up_coming">Upcoming</a></li>
                            <li><a class="page-scroll" href="/movie/now_playing">Now Playing</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll people" href="/people">People</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="discover"><a class="page-scroll" data-toggle="modal" title="Login to your account"
                                            href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li class="discover"><a class="page-scroll" data-toggle="modal"
                                            title="Create a new account for free" href="{{ route('register') }}">{{
                            __('Register') }}</a></li>
                    @else
                    <li class="discover">
                        <a id="navbarDropdown" class="page-scroll" href="#" role="button" data-toggle="modal"
                           aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="ion-ios-person"></span> {{ Auth::user()->name }}
                        </a>

                        <ul class="sub_menu_discover">
                            <li><a class="page-scroll" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>

                <div id="search_bar" style="width: 1000px" class="search_bar">
                    <div class="sub_media">
                        <form id="search_form" action="/search" method="post" accept-charset="utf-8" autocomplete="off">
                            <input id="searchBox" type="text" placeholder="Search for a movie, tv show, person...">
                            <div id = "response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>
<?php $currentURL = URL::current(); ?>
<script type="text/javascript">
    var currentLink="<?php echo $currentURL; ?>";
    $(document).ready(function(){
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
        $("#search_form").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
        });
        $("#searchBox").keyup(function(){
            var query = $("#searchBox").val();
            if(query.length <= 1){
                $("#response").hide();
            }
            if(query.length >= 2){
                $("#response").show();
                $.ajax(
                    {
                        url: '/search',
                        method: 'GET',
                        data: {
                            search:1,
                            q:query
                        },
                        success: function(data){
                            console.log(data)
                            $("#response").html(data);
                        },
                        dataType: 'text'
                    }
                );
            }


        });
    });

    $(window).click(function () {
        console.log('aaaaa');
        document.getElementById('ulSearch').style.display = "none";
    });

    $('#search_bar').click(function (event) {
        event.stopPropagation();
    })
</script>
