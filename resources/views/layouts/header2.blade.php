<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Jasaku</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link href="{{ asset('HeroBiz') }}/assets/img/logo-jasa.png" rel="icon">
    <link href="{{ asset('HeroBiz') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('HeroBiz') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('HeroBiz') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('HeroBiz') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('HeroBiz') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('HeroBiz') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('HeroBiz') }}/assets/css/main.css" rel="stylesheet">
    <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="{{ Route('login') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename"><b>Jasaku</b></h1>
                <span></span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#daftarCabang">Daftar Cabang</a></li>
                    <li><a href="#daftarLayanan">Daftar Layanan</a></li>
                    <li><a href="#pemesanan">Pemesanan</a></li>
                    <li><a href="#riwayat">Riwayat</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li><a href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-aunt">Logout</button>
                    </form>
                    @else
                    <li><a href="{{ route('login') }}" class="btn-aunt">Login</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="btn-aunt">Daftar</a></li>
                    @endif
                    @endauth
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>