<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/assets/images/manager.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    @include('admin.layouts.styles')
</head>
<body>
@include('admin.components.loader-start')
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('admin.layouts.navigation')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('admin.layouts.slidebar_vertical')
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.js')
</body>
</html>
