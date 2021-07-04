<!DOCTYPE html>
<html lang="en">

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

    <title>Onta - Online Travel Agent</title>
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/normalize.css') }}" type="text/css" />

</head>

<body id="myNavbar">
    <div id="wrapper">
        <div id="content">
            <!-- Start header -->

            <header class="header-nav-center no_blur white-scroll-dark active-red">
                <div class="container">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
                        <a class="navbar-brand" href="">
                            <img class="logo" src="{{asset('front/img/onta.png') }}" alt="logo" />
                        </a>

                        <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <svg viewBox="0 0 64 48">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                            </svg>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home-camp') }}">Home Camp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#search">Hotel</a>
                                </li>
                                {{-- <li class="nav-item">
                        <a class="nav-link" href="">ART</a>
                    </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="">Hubungi Kami</a>
                                </li>

                            </ul>
                            <div class="nav_account btn_demo2">
                                <a href="{{ route('login') }}"
                                    class="btn btn_sm_primary border-0 sweep_letter sweep_top c-black border-1 rounded-8">
                                    <div class="inside_item">
                                        <span data-hover="Masuk">Masuk</span>
                                    </div>
                                </a>
                                <a href="{{ route('pendaftaran') }}" class="btn btn_sm_primary bg-blue c-white effect-letter rounded-8">
                                    Daftar
                                </a>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
                <!-- end container -->
            </header>
            <!-- End header -->

            <!-- Stat main -->
            <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

                <!-- Start banner_about -->
                @foreach ($detailListTravelAdvisor['data'] as $item)
                <section class="pt_banner_inner banner_px_image single_blog featured_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="{{ $item['photo']['images']['original']['url'] }}" alt="image"
                            lazy="loading">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <div class="banner_title_inner">

                                    <div class="about_post">
                                        <span class="c_ategory">
                                            <a href="#">{{ $item['location_string'] }}</a>
                                        </span>
                                        <span class="dot"></span>
                                        <span class="c_ategory">
                                            <a href="#"><i class="tio star"></i> {{ $item['num_reviews'] }}</a>
                                        </span>
                                        <span class="dot"></span>
                                        <span class="c_ategory">
                                            <a href="#">Ranking {{ $item['rating'] }}</a>
                                        </span>
                                    </div>

                                    <h1 class="margin-my-3 font-s-60" data-aos="fade-up" data-aos-delay="0">
                                        {{ $item['name'] }}
                                    </h1>

                                    <h3 data-aos="fade-up" data-aos-delay="0" style="color: white">
                                        {{ $item['price'] }}
                                    </h3>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End banner_about -->

                <!-- Start content-Sblog -->
                <section class="content-Sblog" data-sticky-container>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="fixSide_scroll" data-sticky-for="1023" data-margin-top="100">
                                    <div class="share_socail">
                                        <div class="title">Share</div>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right"
                                            title="Facebook" data-sharer="facebook" data-hashtag="{{ $item['name'] }}"
                                            data-url="{{ $item['web_url'] }}">
                                            <i class="tio facebook"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right"
                                            title="Twitter" data-sharer="twitter" data-title="{{ $item['name'] }}"
                                            data-hashtag="{{ $item['name'] }}" data-url="{{ $item['web_url'] }}">
                                            <i class="tio twitter"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right"
                                            title="Whatsapp" data-sharer="whatsapp" data-title="{{ $item['name'] }}"
                                            data-url="{{ $item['web_url'] }}">
                                            <i class="tio whatsapp_outlined"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right"
                                            title="Telegram" data-sharer="telegram" data-title="{{ $item['name'] }}"
                                            data-url="{{ $item['web_url'] }}" data-to="+44555-03564">
                                            <i class="tio telegram"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right"
                                            title="Pinterest" data-sharer="pinterest" data-url="{{ $item['web_url'] }}">
                                            <i class="tio pinterest_circle"></i>
                                        </button>

                                        <button class="btn icon" data-toggle="tooltip" data-placement="right"
                                            title="skype" data-sharer="skype" data-url="{{ $item['web_url'] }}"
                                            data-title="{{ $item['name'] }}">
                                            <i class="tio skype"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="body_content">
                                    <h3>Deskripsi</h3>
                                    <p class="margin-b-3">{{ $item['description'] }}</p>
                                    <h3>Tentang</h3>
                                    <p>
                                        {{ $item['phone'] }}
                                    </p>

                                    <p>
                                        {{ $item['website'] }}
                                    </p>
                                    <p>
                                        {{ $item['email'] }}
                                    </p>
                                    <p>
                                        {{ $item['address'] }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="dividar margin-t-12"></section>
                <!-- End. content-Sblog -->
                <section class="stories__customers py-0 my-0 bg-white margin-b-6">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-5">
                                <div class="title_sections_inner margin-b-5">
                                    <h2>Review</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="body__swipe">
                                    <!-- Swiper -->
                                    <div class="swiper-container swiper__center swiper-container-initialized swiper-container-horizontal"
                                        style="cursor: grab;">
                                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                            @foreach ($item['room_tips'] as $itemReview)
                                            <div class="swiper-slide" style="width: 350px; margin-right: 30px;">
                                                <div class="item__review bg-snow">
                                                    <div class="head_content">
                                                        <div class="media">
                                                            <img class="img_av"
                                                                src="{{ $itemReview['user']['avatar']['small']['url'] }}"
                                                                alt="">
                                                            <div class="media-body">
                                                                <div class="txt">
                                                                    <h3>{{ $itemReview['user']['username'] }}</h3>
                                                                    <p>
                                                                        @if ($itemReview['rating'] == 1)
                                                                        <div class="starts_item">
                                                                            <i class="tio star"></i>
                                                                        </div>
                                                                        @elseif($itemReview['rating'] == 2)
                                                                        <div class="starts_item">
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                        </div>
                                                                        @elseif($itemReview['rating'] == 3)
                                                                        <div class="starts_item">
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                        </div>
                                                                        @elseif($itemReview['rating'] == 4)
                                                                        <div class="starts_item">
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                        </div>
                                                                        @elseif($itemReview['rating'] == 5)
                                                                        <div class="starts_item">
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                            <i class="tio star"></i>
                                                                        </div>
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content_txt">
                                                        <p>
                                                            "{{ $itemReview['text'] }}"
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>

                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next bg-dark" tabindex="0" role="button"
                                        aria-label="Next slide" aria-disabled="false">
                                        <i class="tio chevron_right c-white"></i>
                                    </div>

                                    <div class="swiper-button-prev bg-snow swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Previous slide" aria-disabled="true">
                                        <i class="tio chevron_left c-dark"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endforeach

                <!-- Start dividar -->
                <section class="dividar margin-t-12"></section>
                <!-- End. dividar -->


            </main>
        </div>
        <!-- [id] content -->

        <!-- Start footer -->
        <footer class="defalut-footer foot_demo3 light margin-t-12 padding-py-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="item_about">
                            <a class="logo" href="#">
                                <img src="{{ asset('front/img/onta.png') }}" alt="logo" />
                            </a>
                            <p>
                                Onta (Online Travel Agent)
                            </p>
                            <div class="address">
                                <span>mail@app.com</span>
                                <span>Telpon: <a href="tel:0254200252">(0254) 200-252</a></span>
                                <span>Fax: <a href="#">(0254) 201-952</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="item_links">
                            <h4>Sosial Media</h4>
                            <a class="nav-link" href="">Website</a>
                            <a class="nav-link" href="">Facebook</a>
                            <a class="nav-link" href="">Twitter</a>
                            <a class="nav-link" href="">Instagram</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="item_links">
                            <h4>Menu</h4>
                            <a class="nav-link" href="">Camp</a>
                            <a class="nav-link" href="">Hotel</a>
                            {{-- <a class="nav-link" href="">ART</a> --}}
                            <a class="nav-link" href="">Hubungi Kami</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="item_subscribe">
                            <h4>ONTA</h4>
                            <a href="#" class="btn btn_sm_primary p bg-blue c-white rounded-8">
                                <i class="tio user mr-1 align-middle font-s-16"></i>
                                <span>Masuk</span>
                            </a>
                            <a href="#" class="btn btn_sm_primary p bg-dark c-white rounded-8">
                                <i class="tio sign_out mr-1 align-middle font-s-16"></i>
                                <span>Daftar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center padding-t-4">
                    <div class="copyright">
                        <span>© 2021
                            <a href="#" target="_blank">SWIT - Surosowan Information Technology.</a>
                            All Right Reseved</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Video Modal -->
        <div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!-- Close -->
            <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
                <i class="tio clear"></i>
            </button>
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to top with progress indicator-->
        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>
    <!-- End. wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="searchLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('hotel') }}" method="GET">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input name="pencarian" type="search" class="form-control" placeholder="Anyer">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn_sm_primary p bg-orange-red c-white rounded-5">
                            <i class="tio search mr-1 align-middle font-s-16"></i>
                            <span>Cari Hotel</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('front/js/jquery-3.5.0.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('front/js/vendor/particles.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/TweenMax.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/ScrollMagic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/animation.gsap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/debug.addIndicators.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/swiper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/countdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/simpleParallax.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/charming.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/jquery.bxslider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/sharer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/sticky.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/vendor/aos.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/pages/agency.js') }}" type="text/javascript"></script>

</body>

</html>
