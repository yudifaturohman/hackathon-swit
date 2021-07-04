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
            <header class="header-nav-center no_blur white-scroll-dark active-red" id="myNavbar">
                <div class="container">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
                        <a class="navbar-brand" href="{{ route('index') }}">
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
                                <a href="{{ route('pendaftaran') }}"
                                    class="btn btn_sm_primary bg-blue c-white effect-letter rounded-8">
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
                <section class="pt_banner_inner banner_px_image blog-banner_with_image">
                    <div class="parallax_cover">
                        <img class="cover-parallax" src="{{ asset('front/img/inner/06540.png') }}" alt="image">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="banner_title_inner margin-b-3">
                                    <h1 data-aos="fade-up" data-aos-delay="0">
                                        {{ $penyediaJasa->namaToko }}
                                    </h1>
                                    <p data-aos="fade-up" data-aos-delay="100">
                                        Temukan Jasa Camp Untuk Halaman Rumah Anda
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End banner_about -->

                <!-- Start box_news_gray -->
                <section class="blog_slider box_news_gray margin-t-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title_sections_inner">
                                    <h2>Barang Yang di Sewakan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($penyediaJasaBarang as $item)
                            <div class="col-md-6 col-lg-4">
                                <div class="grid_blog_avatar">
                                    <div class="cover_blog">
                                        <img src="{{ url(Storage::url('barang/'.$item->gambar)) }}" loading="lazy">
                                    </div>
                                    <div class="body_blog">
                                        <a href="#">
                                            <div class="person media">
                                                <img src="{{ asset('front/img/persons/03.png') }}" alt="">
                                                <div class="media-body">
                                                    <div class="txt">
                                                        <h3>Harga : Rp. {{ number_format($item->harga,2) }}</h3>
                                                        <p>Stok : {{ $item->stok }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="link_blog" target="_blank">
                                            <h4 class="title_blog">
                                                {{ $item->namaBarang }}
                                            </h4>
                                            <p class="short_desc">
                                                {{ $item->deskripsi }}
                                            </p>
                                        </a>
                                        <a href="tel:{{$item->telp}}" class="btn btn_sm_primary p bg-red c-white rounded-12">
                                            <i class="tio shopping_cart mr-1 align-middle font-s-16"></i>
                                            <span>Hubungi</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End grid_blog_avatar -->
                            </div>
                            @endforeach
                            {{ $penyediaJasaBarang->links() }}
                        </div>
                    </div>
                </section>
                <!-- End. box_news_gray -->

                <!-- dividar_line -->
                <div class="container margin-my-7">
                    <div class="dividar_line"></div>
                </div>
                <!-- End. dividar_line -->

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
