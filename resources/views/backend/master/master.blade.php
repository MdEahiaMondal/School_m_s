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
    <link href="{{ asset('backend/js/jvector-map/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/clndr.css') }}" rel="stylesheet">
    <!--clock css-->
    <link href="{{ asset('backend/js/css3clock/css/style.css') }}" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('backend/js/morris-chart/morris.css') }}">
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
    @include('backend.percials.header')
    <!--header end-->
    <!--sidebar start-->
    @include('backend.percials.sidebar')
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
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('backend/') }}/js/skycons/skycons.js"></script>
<script src="{{ asset('backend/') }}/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('backend/') }}/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="{{ asset('backend/') }}/js/calendar/moment-2.2.1.js"></script>
<script src="{{ asset('backend/') }}/js/evnt.calendar.init.js"></script>
<script src="{{ asset('backend/') }}/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('backend/') }}/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="{{ asset('backend/') }}/js/gauge/gauge.js"></script>
<!--clock init-->
<script src="{{ asset('backend/') }}/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="{{ asset('backend/') }}/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="{{ asset('backend/') }}/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="{{ asset('backend/') }}/js/morris-chart/morris.js"></script>
<script src="{{ asset('backend/') }}/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="{{ asset('backend/') }}/js/flot-chart/jquery.flot.js"></script>
<script src="{{ asset('backend/') }}/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset('backend/') }}/js/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ asset('backend/') }}/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="{{ asset('backend/') }}/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="{{ asset('backend/') }}/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="{{ asset('backend/') }}/js/dashboard.js"></script>
<script src="{{ asset('backend/') }}/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="{{ asset('backend/') }}/js/scripts.js"></script>
<!--script for this page-->


@stack('script')

</body>
</html>
