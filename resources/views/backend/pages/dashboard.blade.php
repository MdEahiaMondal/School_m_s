@extends('backend.master.master')

@section('title', 'Dashboard')

@push('css')

    <link href="{{ asset('backend/js/jvector-map/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/clndr.css') }}" rel="stylesheet">
    <!--clock css-->
    <link href="{{ asset('backend/js/css3clock/css/style.css') }}" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('backend/js/morris-chart/morris.css') }}">

@endpush


@section('mainContent')

    <section id="main-content">
        <section class="wrapper">

            <!--mini statistics start-->
            <div class="row">
                <div class="col-md-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon orange"><i class="fa fa-users"></i></span>
                        <div class="mini-stat-info">
                            <span> {{ $teachers->count() }} </span>
                            All Teachers
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon tar"><i class="fa fa-users"></i></span>
                        <div class="mini-stat-info">
                            <span> {{ $students->count() }} </span>
                            All Students
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon pink"><i class="fa fa-users"></i></span>
                        <div class="mini-stat-info">
                            <span> {{ $todayAttendanceStudents->count() }} </span>
                            Today Sudent Attendance
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon green"><i class="fa fa-money"></i></span>
                        <div class="mini-stat-info">
                            <span> {{ $classes->count() }} </span>
                            All Class
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                        <div class="mini-stat-info">
                            <span> {{ $classGroup->count() }} </span>
                            All Class Group
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                        <div class="mini-stat-info">
                            <span>32720</span>
                            Other employs
                        </div>
                    </div>
                </div>
            </div>
            <!--mini statistics end-->

        </section>
    </section>

@endsection



@push('script')


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


@endpush
