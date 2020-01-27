<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Master Page')</title>
    {{---------------------------------Bootstrap stylesheet ---------------------------------------}}
    <link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-------------------------------FontAwesome stylesheet ---------------------------------------}}
    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    {{---------------------------PrettyPhoto Plugin stylesheet ------------------------------------}}
    <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
    {{--------------------------------PriceRange stylesheet ---------------------------------------}}
    <link href="{{asset('frontEnd/css/price-range.css')}}" rel="stylesheet">
    {{-------------------------------animate.css stylesheet ---------------------------------------}}
    <link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
    {{----------------------------------Local stylesheets -----------------------------------------}}
    <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
    {{--------------------- Internet Explorer 9 and under config ----------------------------------}}
    <!--[if lt IE 9]>
    <script src="{{asset('frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontEnd/js/respond.min.js')}}"></script>
    <![endif]-->
    {{------------------------------Easyzoom plugin Stylesheet ------------------------------------}}
    <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
</head>

<body>
{{-- Header include --}}
@include('frontEnd.layouts.header')
{{-- Products Slider section --}}
@section('slider')
@include('frontEnd.layouts.slider')
@show
{{-- Content --}}
@yield('content')
{{-- Footer include --}}
@include('frontEnd.layouts.footer')
{{-----------------------------Bootstrap and jQuery Injection -------------------------------------}}
<script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
{{--------------------------------PriceRange.js Injection -----------------------------------------}}
<script src="{{asset('frontEnd/js/price-range.js')}}"></script>
{{-------------------------------PrettyPhoto.js Injection -----------------------------------------}}
<script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
{{-----------------------------Bootstrap and jQuery Injection -------------------------------------}}
<script src="{{asset('frontEnd/js/main.js')}}"></script>
{{-----------------------------Bootstrap and jQuery Injection -------------------------------------}}
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');
    // toggler on click
    $('.toggle').on('click', function() {
        var $this = $(this);
        
        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>
</body>
</html>