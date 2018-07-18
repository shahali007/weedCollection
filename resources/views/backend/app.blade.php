<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Core Css -->
    <link href="{{ asset('admin-asset/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-asset/plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-asset/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    @yield('custom-css')
    <link href="{{ asset('admin-asset/common/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('admin-asset/common/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red">

    @include('backend.common.header')
    @include('backend.common.left-sidebar')
    @yield('content')

    <!-- Core Js -->
    <script src="{{ asset('admin-asset/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/node-waves/waves.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/raphael/raphael.min.js') }}"></script>
    @yield('custom-js')
    <!-- Custom Js -->
    <script src="{{ asset('admin-asset/common/js/admin.js') }}"></script>
    <script src="{{ asset('admin-asset/common/js/pages/index.js') }}"></script>


    <!-- Demo Js -->
    <script src="{{ asset('admin-asset/common/js/demo.js') }}"></script>
</body>
</html>