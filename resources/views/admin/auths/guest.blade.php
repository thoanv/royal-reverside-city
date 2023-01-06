<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}" />
        <title>@yield('title')</title>

        <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="description" content="CodedThemes">
        <meta name="keywords"
              content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="CodedThemes">
        <!-- Favicon icon -->
        <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap/css/bootstrap.min.css">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/icofont/css/icofont.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    </head>
    <body class="fix-menu">
        @yield('content')
        <script type="text/javascript" src="/assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap/js/bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="/assets/js/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="/assets/js/modernizr/css-scrollbars.js"></script>
        <script type="text/javascript" src="/assets/js/common-pages.js"></script>
    </body>
</html>
