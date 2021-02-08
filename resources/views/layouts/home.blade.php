<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content=" @yield("mehmet emin sari") ">

    <link rel="icon" href="{{asset('assets')}}/images/favicon.ico">
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slider.css">
    <script src="{{asset('assets')}}/js/jquery.js"></script>
    <script src="{{asset('assets')}}/js/jquery-migrate-1.1.1.js"></script>
    <script src="{{asset('assets')}}/js/superfish.js"></script>
    <script src="{{asset('assets')}}/js/sForm.js"></script>
    <script src="{{asset('assets')}}/js/jquery.jqtransform.js"></script>
    <script src="{{asset('assets')}}/js/jquery.equalheights.js"></script>
    <script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('assets')}}/js/tms-0.4.1.js"></script>
    <script src="{{asset('assets')}}/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.ui.totop.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>




    <script>
        $(window).load(function () {
            $('.slider')._TMS({
                show: 0,
                pauseOnHover: false,
                prevBu: '.prev',
                nextBu: '.next',
                playBu: false,
                duration: 800,
                preset: 'random',
                pagination: false, //'.pagination',true,'<ul></ul>'
                pagNums: false,
                slideshow: 8000,
                numStatus: false,
                banners: true,
                waitBannerAnimation: false,
                progressBar: false
            });
            $("#tabs").tabs();
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });


    </script>
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <link href="{{asset('assets')}}/css/ie.css" media="screen" rel="stylesheet">
    <![endif]-->
    @yield('css')
    @yield('javascript')

</head>
<body class="page1">
<div>@include('home._header')</div>

<div class="content">

    <div class="container_12">
        <div class="grid_12">

        </div>
        <div>@section('content')@show</div>
    </div>

</div>




<div>@include('home._footer')</div>






</body>
</html>
