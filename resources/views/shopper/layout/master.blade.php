<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arise Admin Dashboard"/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Ramji"/>
    <link rel="shortcut icon" href="{{asset('admin/img/fav.png')}}">
    <title>Dashboard -Shop Owner Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" media="screen"/>

    <!-- Main CSS -->
    <link href="{{asset('admin/css/main.css')}}" rel="stylesheet" media="screen"/>

    <!-- Ion Icons -->
    <link href="{{asset('admin/fonts/icomoon/icomoon.css')}}" rel="stylesheet"/>

    <!-- C3 CSS -->
    <link href="{{asset('admin/css/c3/c3.css')}}" rel="stylesheet"/>

    <!-- NVD3 CSS -->
    <link href="{{asset('admin/css/nvd3/nv.d3.css')}}" rel="stylesheet"/>

    <!-- Horizontal bar CSS -->
    <link href="{{asset('admin/css/horizontal-bar/chart.css')}}" rel="stylesheet"/>

    <!-- Calendar Heatmap CSS -->
    <link href="{{asset('admin/css/heatmap/cal-heatmap.css')}}" rel="stylesheet"/>

    <!-- Circliful CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/circliful/circliful.css')}}"/>

    <!-- OdoMeter CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/odometer.css')}}"/>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]-->
    <script src="{{asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{asset('admin/js/respond.min.js')}}"></script>
    <!--[endif]-->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

</head>

<body>

<!-- Header starts -->

@include('shopper/layout/header')
<!-- Header ends -->

<div>

    @if(Auth()->User()->status == 0)
        <br><br>
        <div class="alert alert-danger" role="alert">

            <center>
                <li>Your Account Registration is Pending</li>
            </center>
        </div>

    @else

    <!-- Left sidebar start -->
        @include('shopper/layout/sidebar')
    <!-- Left sidebar end -->

        @include('shopper/layout/message')
    <!-- Dashboard Wrapper Start -->
        <div class="dashboard-wrapper dashboard-wrapper-lg">

            @yield('content')

        </div>
        <!-- Dashboard Wrapper End -->

@endif

</div>


<!-- Footer Start -->
@include('shopper/layout/footer')
<!-- Footer end -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('admin/js/jquery.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<!-- Sparkline Graphs -->
<!-- <script src="js/sparkline/sparkline.js"></script> -->
<script src="{{asset('admin/js/sparkline/retina.js')}}"></script>
<script src="{{asset('admin/js/sparkline/custom-sparkline.js')}}"></script>

<!-- jquery ScrollUp JS -->
<script src="{{asset('admin/js/scrollup/jquery.scrollUp.js')}}"></script>

<!-- D3 JS -->
<script src="{{asset('admin/js/d3/d3.v3.min.js')}}"></script>

<!-- D3 Power Gauge -->
<script src="{{asset('admin/js/d3/d3.powergauge.js')}}"></script>

<!-- D3 Meter Gauge Chart -->
<script src="{{asset('admin/js/d3/gauge.js')}}"></script>
<script src="{{asset('admin/js/d3/gauge-custom.js')}}"></script>

<!-- C3 Graphs -->
<script src="{{asset('admin/js/c3/c3.min.js')}}"></script>
<script src="{{asset('admin/js/c3/c3.custom.js')}}"></script>

<!-- NVD3 JS -->
<script src="{{asset('admin/js/nvd3/nv.d3.js')}}"></script>
<script src="{{asset('admin/js/nvd3/nv.d3.custom.boxPlotChart.js')}}"></script>
<script src="j{{asset('admin/s/nvd3/nv.d3.custom.stackedAreaChart.js')}}"></script>

<!-- Horizontal Bar JS -->
<script src="{{asset('admin/js/horizontal-bar/horizBarChart.min.js')}}"></script>
<script src="{{asset('admin/js/horizontal-bar/horizBarCustom.js')}}"></script>

<!-- Gauge Meter JS -->
<script src="{{asset('admin/js/gaugemeter/gaugeMeter-2.0.0.min.js')}}"></script>
<script src="{{asset('admin/js/gaugemeter/gaugemeter.custom.js')}}"></script>

<!-- Calendar Heatmap JS -->
<script src="{{asset('admin/js/heatmap/cal-heatmap.min.js')}}"></script>
<script src="{{asset('admin/js/heatmap/cal-heatmap.custom.js')}}"></script>

<!-- Odometer JS -->
<script src="{{asset('admin/js/odometer/odometer.min.js')}}"></script>
<script src="{{asset('admin/js/odometer/custom-odometer.js')}}"></script>

<!-- Peity JS -->
<script src="{{asset('admin/js/peity/peity.min.js')}}"></script>
<script src="{{asset('admin/js/peity/custom-peity.js')}}"></script>

<!-- Circliful js -->
<script src="{{asset('admin/js/circliful/circliful.min.js')}}"></script>
<script src="{{asset('admin/js/circliful/circliful.custom.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('admin/js/custom.js')}}"></script>

<script type="text/javascript">
    (function() {
        $(document).ready(function() {
            var timelineAnimate;
            timelineAnimate = function(elem) {
                return $(".timeline.animated .timeline-row").each(function(i) {
                    var bottom_of_object, bottom_of_window;
                    bottom_of_object = $(this).position().top + $(this).outerHeight();
                    bottom_of_window = $(window).scrollTop() + $(window).height();
                    if (bottom_of_window > bottom_of_object) {
                        return $(this).addClass("active");
                    }
                });
            };
            timelineAnimate();
            return $(window).scroll(function() {
                return timelineAnimate();
            });
        });
    }).call(this);
</script>

</body>
</html>