@php
    $info_web = \App\Models\AboutU::find(1);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{$info_web['favicon']}}" />
        @include('admin.layouts.styles')
    </head>
    <body class="font-sans antialiased">
        <div class="container-scroller">
            <!-- partial:partials/_sidebar.html -->
            @include('admin.layouts.slidebar_vertical', ['info_web' => $info_web])
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
                @include('admin.layouts.navigation')
                <!-- partial -->
                <div class="main-panel">
                    @yield('content')
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © MinHotel {{date('Y', time())}}</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        @include('admin.layouts.js')
    </body>
</html>
