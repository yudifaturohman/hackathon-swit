<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="ONTA - Online Travel Agent" />
    <meta name="keywords" content="onta tenda,hotel, Kabupaten Serang, Serang, Banten, tenda, sewa tenda terbaik" />
    <meta name="author" content="swit - Surosowan Information Technology" />

    <title>ONTA - Online Travel Agent</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.ico')}}" type="image/x-icon" />
    <!-- Bootstrap 4.5 -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" type="text/css" />
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}" type="text/css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="{{asset('front/css/swiper.min.css')}}" />
    <!-- icons -->
    <link rel="stylesheet" href="{{asset('front/css/icons.css')}}" type="text/css" />
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}" type="text/css" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}" type="text/css" />
    <!-- normalize -->
    <link rel="stylesheet" href="{{asset('front/css/normalize.css')}}" type="text/css" />

</head>

<body class="signup_full">

    <!-- Start item_brand -->
    <div class="item_brand">
        <div class="container">
            <a href="{{ URL('/') }}">
                <img src="{{asset('front/img/onta.png')}}" alt="Onta" style="width: 127px">
            </a>
        </div>
    </div>
    <!-- End. item_brand -->

    @yield('content')

    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <!-- jquery -->
    <script src="{{asset('front/js/jquery-3.5.0.js')}}" type="text/javascript"></script>
    <!-- jquery-migrate -->
    <script src="{{asset('front/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <!-- popper -->
    <script src="{{asset('front/js/popper.min.js')}}" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="{{asset('front/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--
  ============
  vendor file
  ============
   -->
    <!-- particles -->
    <script src="{{asset('front/js/vendor/particles.min.js')}}" type="text/javascript"></script>
    <!-- TweenMax -->
    <script src="{{asset('front/js/vendor/TweenMax.min.js')}}" type="text/javascript"></script>
    <!-- ScrollMagic -->
    <script src="{{asset('front/js/vendor/ScrollMagic.js')}}" type="text/javascript"></script>
    <!-- animation.gsap -->
    <script src="{{asset('front/js/vendor/animation.gsap.js')}}" type="text/javascript"></script>
    <!-- addIndicators -->
    <script src="{{asset('front/js/vendor/debug.addIndicators.min.js')}}" type="text/javascript"></script>
    <!-- Swiper js -->
    <script src="{{asset('front/js/vendor/swiper.min.js')}}" type="text/javascript"></script>
    <!-- countdown -->
    <script src="{{asset('front/js/vendor/countdown.js')}}" type="text/javascript"></script>
    <!-- simpleParallax -->
    <script src="{{asset('front/js/vendor/simpleParallax.min.js')}}" type="text/javascript"></script>
    <!-- waypoints -->
    <script src="{{asset('front/js/vendor/waypoints.min.js')}}" type="text/javascript"></script>
    <!-- counterup -->
    <script src="{{asset('front/js/vendor/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <!-- charming -->
    <script src="{{asset('front/js/vendor/charming.min.js')}}" type="text/javascript"></script>
    <!-- imagesloaded -->
    <script src="{{asset('front/js/vendor/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <!-- BX-Slider -->
    <script src="{{asset('front/js/vendor/jquery.bxslider.min.js')}}" type="text/javascript"></script>
    <!-- Aos -->
    <script src="{{asset('front/js/vendor/aos.js')}}" type="text/javascript"></script>
    <!-- main file -->
    <script src="{{asset('front/js/main.js')}}" type="text/javascript"></script><!-- particles -->
    <script src="{{asset('front/js/vendor/particles.min.js')}}" type="text/javascript"></script>
    <!-- TweenMax -->
    <script src="{{asset('front/js/vendor/TweenMax.min.js')}}" type="text/javascript"></script>
    <!-- ScrollMagic -->
    <script src="{{asset('front/js/vendor/ScrollMagic.js')}}" type="text/javascript"></script>
    <!-- animation.gsap -->
    <script src="{{asset('front/js/vendor/animation.gsap.js')}}" type="text/javascript"></script>
    <!-- addIndicators -->
    <script src="{{asset('front/js/vendor/debug.addIndicators.min.js')}}" type="text/javascript"></script>
    <!-- Swiper js -->
    <script src="{{asset('front/js/vendor/swiper.min.js')}}" type="text/javascript"></script>
    <!-- countdown -->
    <script src="{{asset('front/js/vendor/countdown.js')}}" type="text/javascript"></script>
    <!-- simpleParallax -->
    <script src="{{asset('front/js/vendor/simpleParallax.min.js')}}" type="text/javascript"></script>
    <!-- waypoints -->
    <script src="{{asset('front/js/vendor/waypoints.min.js')}}" type="text/javascript"></script>
    <!-- counterup -->
    <script src="{{asset('front/js/vendor/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <!-- charming -->
    <script src="{{asset('front/js/vendor/charming.min.js')}}" type="text/javascript"></script>
    <!-- imagesloaded -->
    <script src="{{asset('front/js/vendor/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <!-- BX-Slider -->
    <script src="{{asset('front/js/vendor/jquery.bxslider.min.js')}}" type="text/javascript"></script>
    <!-- Sharer -->
    <script src="{{asset('front/js/vendor/sharer.js')}}" type="text/javascript"></script>
    <!-- sticky -->
    <script src="{{asset('front/js/vendor/sticky.min.js')}}" type="text/javascript"></script>
    <!-- Aos -->
    <script src="{{asset('front/js/vendor/aos.js')}}" type="text/javascript"></script>
    <!-- main file -->
    <script src="{{asset('front/js/main.js')}}" type="text/javascript"></script>
</body>

</html>
