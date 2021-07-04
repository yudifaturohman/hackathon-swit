@extends('pengguna.layouts.onta')
@section('title')
Beranda
@endsection
@section('content')
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
                                    <h1>Home Camp</h1>
                                    <p>
                                        Liburan Bersama Keluarga dengan suasana alam terbuka cukup dirumah aja.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <img class="ill_05" src="{{ asset('front/img/agency/staycation.png') }}" />
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
                                        Cek tempat hotel idaman anda
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <img class="ill_05" src="{{ asset('front/img/agency/clip-home-plants.png') }}" />
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
                        <span class="d-block c-white font-s-24 text-center">Penyedia Jasa Camp Kami</span>
                        <div class="row" style="padding-top:40px; text-align:center; color:white">
                            @foreach ($penyediaJasa as $item)
                            <div class="col-md-3">
                                <div class="av_person">
                                    <div class="avatar🐱">
                                        <img class="rounded-circle"
                                            src="{{ url(Storage::url('penyedia_jasa/'.$item->gambar)) }}" width="150">
                                    </div>
                                    <div class="info_name" style="text-align:center; padding-top:10px">
                                        <p>
                                            {{ $item->namaToko }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End. About -->

    <!-- Start Services -->
    <section class="products_section product_demo2 features_hosting service_demo3 margin-t-8 padding-t-10" id="Services"
        style="padding-bottom: 0 !important;">
        <div class="container">
            <section class="services_section margin-b-6">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-5">
                            <div class="title_sections_inner margin-b-5">
                                <h2>Buka jasa Camp mu di sini dengan 3 langkah mudah</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="items_serv">
                                <div class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('front/img/icons/name.svg') }}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="txt-small">
                                            <span>Langkah 1</span>
                                        </div>
                                        <h3>Daftar Akun Baru</h3>
                                        <p>
                                            Melakukan pendaftaran akun baru secara gratis lalu lakukan
                                            verifikasi melalui email yang di daftarkan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="items_serv">
                                <div class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('front/img/icons/phone.svg') }}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="txt-small">
                                            <span>Langkah 2</span>
                                        </div>
                                        <h3>Daftarkan Jasa Camp mu</h3>
                                        <p>
                                            Daftarkan jasa camp mu dengan mudah
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="items_serv">
                                <div class="media">
                                    <div class="item-img">
                                        <img src="{{ asset('front/img/icons/discount.svg') }}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="txt-small">
                                            <span>Langkah 3</span>
                                        </div>
                                        <h3>Share ke Media Sosial</h3>
                                        <p>
                                            Lakukan share ke media sosial untuk lebih banyak mendapatkan
                                            client anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- .container -->
    </section>
    <!-- End. Services -->

    <section class="test_monials__workspace margin-t-2 padding-t-6" id="Testimonial">
        <div class="container-fluid">
            <div class="box__others">
                <div class="row">
                    <div class="col-lg-5 pl-lg-0">
                        <div class="img__people">
                            <img src="{{ asset('front/img/workspace/others.svg')}}" alt="">
                            <div class="col-lg-5 item_title">
                                <div class="title_sections">
                                    <div class="before_title">
                                        <span class="c-orange-red">Testimonial</span>
                                    </div>
                                    <h2>Apa yang di katakan client anda</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 my-lg-auto mx-auto">
                        <div class="people__say">
                            <div
                                class="swiper-container gallery-top swipe_circle swiper-container-initialized swiper-container-horizontal">
                                <!-- item Users -->
                                <div
                                    class="person_thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                                    <div class="swiper-wrapper"
                                        style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                            style="width: 143.25px; margin-right: 10px;">
                                            <img class="pagination rounded-circle"
                                                src="{{ asset('front/img/persons/01.png') }}">
                                        </div>
                                        <div class="swiper-slide swiper-slide-visible swiper-slide-next"
                                            style="width: 143.25px; margin-right: 10px;">
                                            <img class="pagination rounded-circle"
                                                src="{{ asset('front/img/persons/01.png') }}">
                                        </div>
                                        <div class="swiper-slide swiper-slide-visible"
                                            style="width: 143.25px; margin-right: 10px;">
                                            <img class="pagination rounded-circle"
                                                src="{{ asset('front/img/persons/01.png') }}">
                                        </div>
                                        <div class="swiper-slide swiper-slide-visible"
                                            style="width: 143.25px; margin-right: 10px;">
                                            <img class="pagination rounded-circle"
                                                src="{{ asset('front/img/persons/01.png') }}">
                                        </div>
                                        <div class="swiper-slide swiper-slide-visible"
                                            style="width: 143.25px; margin-right: 10px;">
                                            <img class="pagination rounded-circle"
                                                src="{{ asset('front/img/persons/01.png') }}">
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                                <!-- item content -->
                                <div class="swiper-wrapper"
                                    style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-active"
                                        style="width: 603px; margin-right: 10px;">
                                        <div class="img__user">
                                            <img src="{{ asset('front/img/persons/04.png') }}" alt="">
                                        </div>
                                        <div class="username👨">
                                            <h4>Rosa J. Lightfoot</h4>
                                            <span>Loan processing clerk</span>
                                        </div>
                                        <div class="content col-md-8 mx-auto text-center">
                                            "Impressed with master class support of the team and really look
                                            forward for the
                                            future.Really, really well made! Love that each component is
                                            handmade and customised.
                                            Great
                                            Work!"
                                        </div>
                                        <div class="stars__rate">
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 603px; margin-right: 10px;">
                                        <div class="img__user">
                                            <img src="{{ asset('front/img/persons/15.png') }}" alt="">
                                        </div>
                                        <div class="username👨">
                                            <h4>Angel G. Wilson</h4>
                                            <span>Military occupation</span>
                                        </div>
                                        <div class="content col-md-8 mx-auto text-center">
                                            "Impressed with master class support of the team and really look
                                            forward for the
                                            future.Really, really well made! Love that each component is
                                            handmade and customised.
                                            Great
                                            Work!"
                                        </div>
                                        <div class="stars__rate">
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 603px; margin-right: 10px;">
                                        <div class="img__user">
                                            <img src="{{ asset('front/img/persons/03.png') }}" alt="">
                                        </div>
                                        <div class="username👨">
                                            <h4>Troy D. Snead</h4>
                                            <span>UI Developer</span>
                                        </div>
                                        <div class="content col-md-8 mx-auto text-center">
                                            "Impressed with master class support of the team and really look
                                            forward for the
                                            future.Really, really well made! Love that each component is
                                            handmade and customised.
                                            Great
                                            Work!"
                                        </div>
                                        <div class="stars__rate">
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 603px; margin-right: 10px;">
                                        <div class="img__user">
                                            <img src="{{ asset('front/img/persons/02.png') }}" alt="">
                                        </div>
                                        <div class="username👨">
                                            <h4>Nona J. Franklin</h4>
                                            <span>Material scheduling</span>
                                        </div>
                                        <div class="content col-md-8 mx-auto text-center">
                                            "Impressed with master class support of the team and really look
                                            forward for the
                                            future.Really, really well made! Love that each component is
                                            handmade and customised.
                                            Great
                                            Work!"
                                        </div>
                                        <div class="stars__rate">
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 603px; margin-right: 10px;">
                                        <div class="img__user">
                                            <img src="{{ asset('front/img/persons/01.png') }}" alt="">
                                        </div>
                                        <div class="username👨">
                                            <h4>John M. Davalos</h4>
                                            <span>Attorney</span>
                                        </div>
                                        <div class="content col-md-8 mx-auto text-center">
                                            "Impressed with master class support of the team and really look
                                            forward for the
                                            future.Really, really well made! Love that each component is
                                            handmade and customised.
                                            Great
                                            Work!"
                                        </div>
                                        <div class="stars__rate">
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                            <i class="tio star"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div class="simple__particles">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <!-- End Swiper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section__stories blog_slider padding-t-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="swip__stories">
                        <!-- Swiper -->
                        <div
                            class="swiper-container blog-slider swiper-container-initialized swiper-container-horizontal">
                            <div class="title_sections_inner">
                                <h2>Yuk ikuti tips agar nyaman saat staycation di rumah</h2>
                            </div>
                            <div class="swiper-wrapper"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                @foreach ($blog as $itemBlog)
                                <div class="swiper-slide swiper-slide-active" style="width: 350px; margin-right: 30px;">
                                    <div class="grid_blog_avatar">
                                        <div class="cover_blog">
                                            <img src="{{ url(Storage::url('blog/'.$itemBlog->gambar)) }}" alt="">
                                        </div>
                                        <div class="body_blog">
                                            <a href="#">
                                                <div class="person media">
                                                    <img src="{{ asset('front/img/persons/01.png') }}" alt="">
                                                    <div class="media-body">
                                                        <div class="txt">
                                                            <h3>Administrator</h3>
                                                            <time>{{ $itemBlog->created_at }}</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="single-blog.html" class="link_blog">
                                                <h4 class="title_blog">
                                                    {{ $itemBlog->judul }}
                                                </h4>
                                                <p class="short_desc">
                                                    {{ $itemBlog->konten }}
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End grid_blog_avatar -->
                                </div>
                                @endforeach

                                {{-- <div class="swiper-slide swiper-slide-next" style="width: 350px; margin-right: 30px;">
                                    <div class="grid_blog_avatar">
                                        <div class="cover_blog">
                                            <img src="{{ asset('front/img/inner/6450.png') }}" alt="">
                                        </div>
                                        <div class="body_blog">
                                            <a href="#">
                                                <div class="person media">
                                                    <img src="{{ asset('front/img/persons/01.png') }}" alt="">
                                                    <div class="media-body">
                                                        <div class="txt">
                                                            <h3>Paul Brasseur</h3>
                                                            <time>30 Sep, 2020</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="single-blog.html" class="link_blog">
                                                <h4 class="title_blog">
                                                    Funds adding fuel in tech’s climate race
                                                </h4>
                                                <p class="short_desc">
                                                    Vitae semper quis lectus nulla at volutpat diam. Sed
                                                    viverra ipsum nunc aliquet .
                                                </p>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- End grid_blog_avatar -->
                                </div>

                                <div class="swiper-slide" style="width: 350px; margin-right: 30px;">
                                    <div class="grid_blog_avatar">
                                        <div class="cover_blog">
                                            <img src="{{ asset('front/img/inner/6450.png') }}" alt="">
                                        </div>
                                        <div class="body_blog">
                                            <a href="#">
                                                <div class="person media">
                                                    <img src="{{ asset('front/img/persons/01.png') }}" alt="">
                                                    <div class="media-body">
                                                        <div class="txt">
                                                            <h3>Merlin Roux</h3>
                                                            <time>24 Sep, 2020</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="single-blog.html" class="link_blog">
                                                <h4 class="title_blog">
                                                    Satellite tags shed light on sea turtle treks
                                                </h4>
                                                <p class="short_desc">
                                                    Vitae semper quis lectus nulla at volutpat diam. Sed
                                                    viverra ipsum nunc aliquet .
                                                </p>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- End grid_blog_avatar -->
                                </div>

                                <div class="swiper-slide" style="width: 350px; margin-right: 30px;">
                                    <div class="grid_blog_avatar">
                                        <div class="cover_blog">
                                            <img src="{{ asset('front/img/inner/6450.png') }}" alt="">
                                        </div>
                                        <div class="body_blog">
                                            <a href="#">
                                                <div class="person media">
                                                    <img src="{{ asset('front/img/persons/01.png') }}" alt="">
                                                    <div class="media-body">
                                                        <div class="txt">
                                                            <h3>Olivia DeSmit</h3>
                                                            <time>27 Sep, 2020</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="single-blog.html" class="link_blog">
                                                <h4 class="title_blog">
                                                    As climate warms, Ecuador fights fires with forecasts
                                                </h4>
                                                <p class="short_desc">
                                                    Vitae semper quis lectus nulla at volutpat diam. Sed
                                                    viverra ipsum
                                                    nunc aliquet .
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End grid_blog_avatar -->
                                </div>

                                <div class="swiper-slide" style="width: 350px; margin-right: 30px;">
                                    <div class="grid_blog_avatar">
                                        <div class="cover_blog">
                                            <img src="{{ asset('front/img/inner/6450.png') }}" alt="">
                                        </div>
                                        <div class="body_blog">
                                            <a href="#">
                                                <div class="person media">
                                                    <img src="{{ asset('front/img/persons/01.png') }}" alt="">
                                                    <div class="media-body">
                                                        <div class="txt">
                                                            <h3>Paul Brasseur</h3>
                                                            <time>30 Sep, 2020</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="single-blog.html" class="link_blog">
                                                <h4 class="title_blog">
                                                    Funds adding fuel in tech’s climate race
                                                </h4>
                                                <p class="short_desc">
                                                    Vitae semper quis lectus nulla at volutpat diam. Sed
                                                    viverra ipsum nunc aliquet .
                                                </p>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- End grid_blog_avatar -->
                                </div>

                                <div class="swiper-slide" style="width: 350px; margin-right: 30px;">
                                    <div class="grid_blog_avatar">
                                        <div class="cover_blog">
                                            <img src="{{ asset('front/img/inner/6450.png') }}" alt="">
                                        </div>
                                        <div class="body_blog">
                                            <a href="#">
                                                <div class="person media">
                                                    <img src="{{ asset('front/img/persons/01.png') }}" alt="">
                                                    <div class="media-body">
                                                        <div class="txt">
                                                            <h3>Merlin Roux</h3>
                                                            <time>24 Sep, 2020</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="single-blog.html" class="link_blog">
                                                <h4 class="title_blog">
                                                    Satellite tags shed light on sea turtle treks
                                                </h4>
                                                <p class="short_desc">
                                                    Vitae semper quis lectus nulla at volutpat diam. Sed
                                                    viverra ipsum nunc aliquet .
                                                </p>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- End grid_blog_avatar -->
                                </div> --}}
                            </div>

                            <!-- Add Arrows -->
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                aria-disabled="false">
                                <i class="tio chevron_right"></i>
                            </div>
                            <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button"
                                aria-label="Previous slide" aria-disabled="true">
                                <i class="tio chevron_left"></i>
                            </div>

                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection