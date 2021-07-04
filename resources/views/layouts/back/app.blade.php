<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | ONTA - Online Travel Agent</title>

    <!-- Include Choices CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('back/assets/vendors/choices.js/choices.min.css') }}"> --}}

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('back/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('back/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('back/assets/images/favicon.ico') }}" type="image/x-icon">

    {{-- @livewireStyles --}}

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="#" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-view-list"></i>
                                <span>Kategori</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-broadcast"></i>
                                <span>Informasi Terbaru</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-brush"></i>
                                <span>Karya</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar.html">Cerpen</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-sweetalert.html">Puisi</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Cerbung</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Cerbung Episode</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Jurnal</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Akun</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-signpost"></i>
                                <span>Keluar</span>
                            </a>
                            <form id="logout-form" action="#" method="POST">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('content')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; ONTA - Online Travel Agent</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    {{-- <script type="text/javascript">
        $("#password").password('toggle');
    </script> --}}

    <script src="{{ asset('back/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Include Choices JavaScript -->
    {{-- <script src="{{ asset('back/assets/vendors/choices.js/choices.min.js') }}"></script> --}}

    <script src="{{ asset('back/assets/js/main.js') }}"></script>

    {{-- @livewireScripts --}}

</body>

</html>
