<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>bhTV - @yield('title')</title>
    <meta name="description"
          content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/animate.min.css"/>
    <link rel="stylesheet" href="./css/ionicons.min.css"/>
    <link rel="stylesheet" href="./css/styles.css"/>
    <script type="text/javascript">

        /* Replace #your_subdomain# by the subdomain of a Site in your OneAll account */
        var oneall_subdomain = 'bhtv-999';

        /* The library is loaded asynchronously */
        var oa = document.createElement('script');
        oa.type = 'text/javascript'; oa.async = true;
        oa.src = '//' + oneall_subdomain + '.api.oneall.com/socialize/library.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(oa, s);

    </script>
</head>
<body>
@include('layouts.menu')
<!-- Begin page content -->
@yield('content')

@include('layouts.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.easing.min.js"></script>
<script src="./js/wow.js"></script>
<script src="./js/scripts.js"></script>
</body>
</html>