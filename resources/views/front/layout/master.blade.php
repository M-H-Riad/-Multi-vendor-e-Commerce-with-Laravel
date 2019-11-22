<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Furniture Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('style/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('style/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('style/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('style/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('style/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
</head>
<body class="goto-here">
<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+88016-90084067</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">mehedihasan.swe16@gmail.com</span>
                    </div>
                    <div class="col-md-4 pr-4 d-flex topper align-items-center text-lg-right">
                        <a href="/login"><span class="text">Login </span></a> | - |
                        <a href="/register"><span class="text"> Registration</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Furniture</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored"><a href="{{route('view_cart')}}" class="nav-link"><span
                                class="icon-shopping_cart"></span>[0]</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@if(session()->has('success'))
    <div class="alert alert-success">
        <center>{{ session()->get('success') }}</center>
    </div>
@endif

@yield('content')

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Furniture</h2>
                    <p>Various company furniture products and choice your products</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Shop</a></li>
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Journal</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Help</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                            <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQs</a></li>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text"> Dhaka,Bangladesh</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +880-1690084067</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> mehedihasan.swe16@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Mehedi</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('style/js/jquery.min.js')}}"></script>
<script src="{{asset('style/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('style/js/popper.min.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('style/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('style/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('style/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('style/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('style/js/aos.js')}}"></script>
<script src="{{asset('style/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('style/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('style/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('style/js/google-map.js')}}"></script>
<script src="{{asset('style/js/main.js')}}"></script>

</body>
</html>