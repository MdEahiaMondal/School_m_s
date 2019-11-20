<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>@yield('title')</title>
    <!--Core CSS -->
    <link href="{{ asset('backend/bs3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/js/jquery-ui/jquery-ui-1.10.1.custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="{{ asset('backend/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    @stack('css')

</head>
<body>
<section id="container">
    <!--header start-->
    @if(!Request::is('login*'))
        @include('backend.percials.header')
    @endif

    <!--header end-->
    <!--sidebar start-->
    @if(!Request::is('login*'))
        @include('backend.percials.sidebar')
    @endif
    <!--sidebar end-->
    <!--main content start-->
        @yield('mainContent')
    <!--main content end-->

</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="{{ asset('backend/js/jquery.js') }}"></script>
<script src="{{ asset('backend/js/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}"></script>
<script src="{{ asset('backend/bs3/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('backend/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>

<!--common script init for all pages-->
<script src="{{ asset('backend/') }}/js/scripts.js"></script>
<!--script for this page-->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


@stack('script')

</body>
</html>
