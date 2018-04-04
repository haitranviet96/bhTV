<style>
    .sug_row:hover{
        border: 1px solid blue;
        cursor: pointer;
    }

    a, li{
        text-decoration: none;
    }

    .img_sug {
        width:30px;
        height:30px;
        border-width:3px;
        border-color: #ffffff;
        border-style:solid;
        margin:5px;
        float:left;
    }

    .search_bar{
        width: 1000px;
        margin: 0 auto;
    }
</style>
<?php
if(isset($_GET['search'])){
    $response = "<ul><li>No data found</li></ul>";
    $connection = new mysqli('localhost', 'root','','homestead');
    $q = $connection->real_escape_string($_GET['q']);
    $sql = $connection->query("SELECT name, img_path FROM films WHERE name LIKE '%$q%' LIMIT 6");
//    $data_get =\App\Film::where('name', '=','Black Panther')->take(10)->get();
//    echo $data_get;
    $response = "<ul id='ulSearch'>";
    $response .= "<li class='sug_row' style='font-size: larger; font-weight: bold; font-style: italic; color: DarkGray'>".'Films'."</li>";
    if($sql->num_rows > 0){
        while($data = $sql->fetch_array())
            $response .= "<li class='sug_row'><img src='{$data['img_path']}' class='img_sug'><a style='cursor: pointer;' href='https://google.com'>".$data['name']."</a></li>";
    }
    $sql = $connection->query("SELECT name, img_path FROM celebs WHERE name LIKE '%$q%' LIMIT 6");
    $response .= "<li class='sug_row' style='font-size: larger; font-weight: bold; font-style: italic; color: DarkGray;' >".'Actors'."</li>";
//    $respone .= "<li class='sug_row'> Actors </li>";
    if($sql->num_rows > 0){
        while($data = $sql->fetch_array())
            $response .= "<li class='sug_row'><img src='{$data['img_path']}' class='img_sug'><a style='cursor: pointer;' href='https://google.com'>".$data['name']."</a></li>";
    }
    $response .= "</ul>";



//    if($data_get.length > 0){
//        $response = "<ul id='ulSearch'>";
//        foreach ($data_get as $item){
//            $response .= "<li class='sug_row'>
//             <img src='http://www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg' class='img_sug'>
//<a style='cursor: pointer;' href='https://google.com'>".$data['name']."</a>
//
//</li>";
//            $response .= "</ul>";
//        }
//    }

    exit($response);
}
?>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/css/style-8.3.6.5.min.css" media="all" type="text/css">

</head>
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
        $("#searchBox").keyup(function(){
            var query = $("#searchBox").val();
            if(query.length <= 1){
                $("#response").hide();
            }
            if(query.length >= 2){
                $("#response").show();
                $.ajax(
                    {
                        url: currentLink,
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
<link rel="stylesheet" type="text/css" href="{{url('/css/search.css')}}">
