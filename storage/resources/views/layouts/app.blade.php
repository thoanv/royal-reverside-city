@php
    $info_web = \App\Models\AboutU::find(1);
    $menus =[];
    $dataMenus = \App\Models\Menu::where('key', 'menu-header')->first();
    if(count(unserialize($dataMenus['data'])))
        $menus = unserialize($dataMenus['data']);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{$info_web['favicon']}}" />
    <meta name="description" content="{{$info_web['meta_description']}}">
    <meta name="keywords" content="{{$info_web['meta_keywords']}}">

    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="@yield('canonical', route('home'))"/>

    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="{{$info_web['meta_description']}}"/>
    <meta property="og:url" content="@yield('canonical', route('home'))"/>
    <meta property="og:site_name" content="{{$info_web['site_name']}}"/>
    <meta property="article:modified_time" content=""/>
    <meta property="og:image" content="@yield('image', $info_web['thumbnail'])"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="{{$info_web['meta_description']}}"/>
    <meta name="twitter:title" content="@yield('title')"/>
    <script src="{{asset('front-end/vendor/bootstrap-4.4.1/jquery-3.4.1.min.js')}}"></script>

    <script src="{{asset('front-end/vendor/bootstrap-4.4.1/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('front-end/vendor/fancyBox/fancybox.umd.js')}}"></script>

    <script src="{{asset('front-end/vendor/sticky-sidebar/jquery.sticky-sidebar.min.js')}}"></script>

    <link href="{{asset('front-end/vendor/bootstrap-4.4.1/css/bootstrap.min.css')}}" rel='stylesheet'>

    <link href="{{asset('front-end/vendor/fancyBox/fancybox.css')}}" rel='stylesheet'>


    <link href="{{asset('front-end/vendor/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel='stylesheet'>
    <meta name="action-cable-url" content="/cable"/>
    <link rel="stylesheet" media="all"
          href="{{asset('front-end/css/style.css')}}"
          data-turbolinks-track="reload"/>
    <script src="{{asset('front-end/js/script.js')}}"></script>
</head>
<body>
    @include('layouts.header', ['menus' => $menus, 'aboutUs' => $info_web])
    @yield('content')
    @include('layouts.footer', ['aboutUs' => $info_web])
</body>
</html>
