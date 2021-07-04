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

<body>
    <div id="wrapper">
        <div id="content">
            <!-- Start header -->
            <header class="header-nav-center active-blue" id="myNavbar">
                <div class="container">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="{{ asset('front/img/onta.png') }}" alt="logo" />
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
                                    <a class="nav-link" href="">Camp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Hotel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">ART</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Hubungi Kami</a>
                                </li>

                            </ul>
                            <div class="nav_account btn_demo2">
                                <a href="#"
                                    class="btn btn_sm_primary border-0 sweep_letter sweep_top c-black border-1 rounded-8">
                                    <div class="inside_item">
                                        <span data-hover="Masuk">Masuk</span>
                                    </div>
                                </a>
                                <a href="#" class="btn btn_sm_primary bg-blue c-white effect-letter rounded-8">
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
                <div id="ontaCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#ontaCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#ontaCarousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- Start Banner Section -->
                            <section class="demo_1 banner_section banner_demo7">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 my-auto">
                                            <div class="banner_title">
                                                <h1>Camp</h1>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    1500s,
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <img class="ill_05"
                                                src="{{ asset('front/img/agency/clip-home-plants.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End Banner -->
                        </div>
                        <div class="carousel-item">
                            <!-- Start Banner Section -->
                            <section class="demo_1 banner_section banner_demo7">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 my-auto">
                                            <div class="banner_title">
                                                <h1>Hotel</h1>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    1500s,
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <img class="ill_05"
                                                src="{{ asset('front/img/agency/travel_plans.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End Banner -->
                        </div>
                    </div>
                </div>

                <!-- Start About -->
                <section class="abo_company">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 emo mb-4 mb-lg-0">
                                <div class="gq_item bg-onta">
                                    <span class="d-block c-white font-s-24">Penyedia Jasa Camp Kami</span>
                                    <div class="row" style="padding-top:40px; text-align:center; color:white">
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 1
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 2
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 3
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 4
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 5
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 6
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 7
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="av_person">
                                                <div class="avatar🐱">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('front/img/persons/02.png') }}" width="150">
                                                </div>
                                                <div class="info_name" style="text-align:center; padding-top:10px">
                                                    <p>
                                                        Nama Usaha 8
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End. About -->

                <!-- Start Services -->
                {{-- <section class="products_section product_demo2 features_hosting service_demo3 margin-t-8 padding-t-10"
                    id="Services" style="padding-bottom: 0 !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 margin-b-3">
                                <div class="title_sections mb-0">
                                    <div class="before_title">
                                        <span>Tata Cara</span>
                                    </div>
                                    <h2>Kenali Alurnya</h2>
                                    <p>
                                        Untuk memudahkan pengajuan permohonan informasi kenali dulu yuk alur atau tata
                                        cara nya
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7 ml-sm-auto">
                                <div class="row">
                                    <div class="col-md-6 item pr-sm-5 mb-3 mb-sm-5">
                                        <div class="item_pro" data-aos="fade-up" data-aos-delay="0">
                                            <div class="icon_t">
                                                <img src="../../assets/img/icons/Employee.svg" />
                                            </div>
                                            <h3>Proses Registrasi</h3>
                                            <p>
                                                <ol>
                                                    <li>Melakukan Pendaftaran</li>
                                                    <li>Verifikasi E-Mail</li>
                                                    <li>Masuk (Login)</li>
                                                </ol>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 item pr-sm-5 mb-3 mb-sm-5">
                                        <div class="item_pro" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icon_t">
                                                <img src="../../assets/img/icons/Binocular.svg" />
                                            </div>
                                            <h3>Ajuin Permohonan</h3>
                                            <p>
                                                <ol>
                                                    <li>Lengkapi Profil Kamu</li>
                                                    <li>Ajuin Permohonon Informasi atau Keberatan </li>
                                                </ol>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 item pr-sm-5 mb-3 mb-sm-5">
                                        <div class="item_pro" data-aos="fade-up" data-aos-delay="200">
                                            <div class="icon_t">
                                                <img src="../../assets/img/icons/Shield-check.svg" />
                                            </div>
                                            <h3>Proses Verifikasi Pengajuan</h3>
                                            <ol>
                                                <li>Tahap 1 (Penerimaan Informasi)</li>
                                                <li>Tahap 2 (Kelengkapan Informasi)</li>
                                                <li>Tahap 3 (Analisa Permintaan)</li>
                                                <li>Tahap 4 (Pemberitahuan Tertulis)</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="col-md-6 item pr-sm-5">
                                        <div class="item_pro" data-aos="fade-up" data-aos-delay="300">
                                            <div class="icon_t">
                                                <img src="../../assets/img/icons/Door-open.svg" />
                                            </div>
                                            <h3>Selesai</h3>
                                            <p>
                                                Pengajuan permohonan telah selesai nanti bakal ada pemberitahuan bahwa
                                                semua proses pengajuan telah sesuai
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .container -->
                </section> --}}
                <!-- End. Services -->

            </main>
            <!-- end main -->
        </div>
        <!-- [id] content -->

        <!-- footr -->
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
                            <a class="nav-link" href="">ART</a>
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
        <!-- End. -->

        <!-- Back to top with progress indicator-->
        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

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

        <!-- Start Section Loader -->
        <section class="loading_overlay">
            <div class="loader_logo">
                <img class="logo" src="{{ asset('front/img/onta.png') }}" />
            </div>
        </section>
        <!-- End. Loader -->
    </div>
    <!-- End. wrapper -->

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
