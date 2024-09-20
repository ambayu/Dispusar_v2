@extends('layouts.app', ['tittle' => 'Home'])
<?php $serverConfig = config('servers'); ?>
@section('header')
    <!-- hero area start -->
    <div class="tp-slider-area">
        <div class="tp-slider-wrapper p-relative">
            <div class="tp-slider-meta-box d-none d-md-block">
                <div class="tp-slider-meta d-flex align-items-center">
                    <div class="tp-slider-meta-icon">
                        <i class="flaticon-sun"></i>
                    </div>
                    <div class="tp-slider-meta-content">
                        <span>30°C<br>12:14 Loacl Time</span>
                    </div>
                </div>
            </div>
            <div class="tp-slider-arrow-box">
                <button class="slider-prev"><i class="fa-regular fa-arrow-left"></i></button>
                <button class="slider-next"><i class="fa-regular fa-arrow-right"></i></button>
            </div>
            {{-- <div class="tp-slider-shape-5">
                <img src="assets/img/slider/slider-shape-1-5.png" alt="">
            </div> --}}
            <div
                class="swiper-container tp-slider-active swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" style="transition-duration: 0ms;">

                    <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                        style="width: 1536px; opacity: 1; transform: translate3d(-1536px, 0px, 0px); transition-duration: 0ms;">
                        <div class="tp-slider-bg d-flex justify-content-center align-items-center p-relative fix">
                            <div class="tp-slider-img" data-background="assets/img/slider/slider-1.jpg"
                                style="background-image: url(&quot;assets/img/slider/slider-1.jpg&quot;);"></div>
                            <div class="tp-slider-shape-1 z-index-1">
                                <img src="assets/img/slider/slider-shape-1-1.png" alt="">
                            </div>
                            <div class="tp-slider-shape-2 z-index-2">
                                <img src="assets/img/slider/slider-shape-1-3.png" alt="">
                            </div>
                            <div class="tp-slider-shape-3 z-index-1">
                                <img src="assets/img/slider/slider-shape-1-2.png" alt="">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="tp-slider-content-wrap p-relative z-index-2">
                                            <div class="tp-slider-shape-4">
                                                <img src="assets/img/slider/slider-shape-1-4.png" alt="">
                                            </div>
                                            <div class="tp-slider-title-box p-relative">
                                                <span class="tp-slider-subtitle">SELAMAT DATANG DI PORTAL DINAS PERPUSTAKAAN
                                                    DAN KEARSIPAN KOTA MEDAN <br> </span>
                                                <h4 class="tp-slider-title">DISPUSAR <br> KOTA MEDAN</h4>
                                                <p> Jl. Iskandar Muda No.270, Petisah Tengah, Kec. Medan Petisah, Kota
                                                    Medan, Sumatera Utara 20111, Indonesia</p>
                                            </div>
                                            <div class="tp-slider-video-box d-flex align-items-center">
                                                <div class="tp-slider-btn">
                                                    <a class="tp-btn-xl mr-30" href="/">Discover More</a>
                                                </div>
                                                <div class="tp-slider-video d-flex align-items-center">
                                                    <a class="popup-video video-animation" href="/assets/vidio/profil.mp4">
                                                        <i class="fa-sharp fa-light fa-play"></i></a>
                                                    <span>MELIHAT PROFIL<br> KAMI</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1"
                        style="width: 1536px; opacity: 1; transform: translate3d(-3072px, 0px, 0px); transition-duration: 0ms;">
                        <div class="tp-slider-bg d-flex justify-content-center align-items-center p-relative fix">
                            <div class="tp-slider-img" data-background="assets/img/slider/slider-2.jpg"
                                style="background-image: url(&quot;assets/img/slider/slider-2.jpg&quot;);"></div>
                            <div class="tp-slider-shape-1 z-index-1">
                                <img src="assets/img/slider/slider-shape-1-1.png" alt="">
                            </div>
                            <div class="tp-slider-shape-2 z-index-2">
                                <img src="assets/img/slider/slider-shape-1-3.png" alt="">
                            </div>
                            <div class="tp-slider-shape-3 z-index-1">
                                <img src="assets/img/slider/slider-shape-1-2.png" alt="">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="tp-slider-content-wrap p-relative z-index-2">
                                            <div class="tp-slider-shape-4">
                                                <img src="assets/img/slider/slider-shape-1-4.png" alt="">
                                            </div>
                                            <div class="tp-slider-title-box p-relative">
                                                <span class="tp-slider-subtitle">SELAMAT DATANG DI PORTAL DINAS
                                                    PERPUSTAKAAN DAN KEARSIPAN KOTA MEDAN <br> </span>
                                                <h4 class="tp-slider-title">DISPUSAR <br> KOTA MEDAN</h4>
                                                <p> Jl. Iskandar Muda No.270, Petisah Tengah, Kec. Medan Petisah, Kota
                                                    Medan, Sumatera Utara 20111, Indonesia</p>
                                            </div>
                                            <div class="tp-slider-video-box d-flex align-items-center">
                                                <div class="tp-slider-btn">
                                                    <a class="tp-btn-xl mr-30" href="/">Discover More</a>
                                                </div>
                                                <div class="tp-slider-video d-flex align-items-center">
                                                    <a class="popup-video video-animation"
                                                        href="/assets/vidio/profil.mp4"><i
                                                            class="fa-sharp fa-light fa-play"></i></a>
                                                    <span>MELIHAT PROFIL <br> KAMI</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2"
                        style="width: 1536px; opacity: 1; transform: translate3d(-4608px, 0px, 0px); transition-duration: 0ms;">
                        <div class="tp-slider-bg d-flex justify-content-center align-items-center p-relative fix">
                            <div class="tp-slider-img" data-background="assets/img/slider/slider-3.jpg"
                                style="background-image: url(&quot;assets/img/slider/slider-3.jpg&quot;);"></div>
                            <div class="tp-slider-shape-1 z-index-1">
                                <img src="assets/img/slider/slider-shape-1-1.png" alt="">
                            </div>
                            <div class="tp-slider-shape-2 z-index-2">
                                <img src="assets/img/slider/slider-shape-1-3.png" alt="">
                            </div>
                            <div class="tp-slider-shape-3 z-index-1">
                                <img src="assets/img/slider/slider-shape-1-2.png" alt="">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="tp-slider-content-wrap p-relative z-index-2">
                                            <div class="tp-slider-shape-4">
                                                <img src="assets/img/slider/slider-shape-1-4.png" alt="">
                                            </div>
                                            <div class="tp-slider-title-box p-relative">
                                                <span class="tp-slider-subtitle">SELAMAT DATANG DI PORTAL DINAS
                                                    PERPUSTAKAAN DAN KEARSIPAN KOTA MEDAN <br> </span>
                                                <h4 class="tp-slider-title">DISPUSAR <br> KOTA MEDAN</h4>
                                                <p> Jl. Iskandar Muda No.270, Petisah Tengah, Kec. Medan Petisah, Kota
                                                    Medan, Sumatera Utara 20111, Indonesia</p>
                                            </div>
                                            <div class="tp-slider-video-box d-flex align-items-center">
                                                <div class="tp-slider-btn">
                                                    <a class="tp-btn-xl mr-30" href="/">Discover More</a>
                                                </div>
                                                <div class="tp-slider-video d-flex align-items-center">
                                                    <a class="popup-video video-animation"
                                                        href="/assets/vidio/profil.mp4"><i
                                                            class="fa-sharp fa-light fa-play"></i></a>
                                                    <span>MELIHAT PROFIL <br> KAMI</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->
@endsection


@section('content')
    <!-- feature area start -->
    <div id="feature-one-page" class="tp-feature-area pt-130 pb-110 p-relative z-index grey-bg-2">
        <div class="tp-feature-shape-1 d-none d-xxl-block">
            <img src="assets/img/feature/ab-shape-2.png" alt="">
        </div>
        <div class="tp-feature-shape-2">
            <img src="assets/img/feature/ab-bg.png" alt="">
        </div>
        <div class="container">

            <div class="row row-cols-xl-5 row-cols-lg-3 justify-content-center justify-content-xl-start">
                <div class="col-xl-10">
                    <div class="tp-about-title-box mb-45">
                        <span class="tp-section-subtitle">Tersedia 6 aplikasi di Dinas Perpustakaan dan Kearsipan Kota
                            Medan</span>
                        <h4 class="tp-section-title">DAFTAR APLIKASI</h4>
                    </div>
                </div>

                <div class="col col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                    <div class="tp-feature-item mb-30 text-center">
                        <div class="tp-feature-icon">
                            <i class="flaticon-open-book"></i>
                        </div>
                        <div class="tp-feature-content">
                            <h4 class="tp-feature-title-sm">SIPETA ASIK</h4>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s"
                    style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                    <div class="tp-feature-item mb-30 text-center">
                        <div class="tp-feature-icon">
                            <i class="flaticon-job-offer"></i>
                        </div>
                        <div class="tp-feature-content">
                            <h4 class="tp-feature-title-sm">SIPENCIPTA</h4>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s"
                    style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: tpfadeUp;">
                    <div class="tp-feature-item mb-30 text-center">
                        <div class="tp-feature-icon">
                            <i class="flaticon-targeting"></i>
                        </div>
                        <div class="tp-feature-content">
                            <h4 class="tp-feature-title-sm">INLISTLITE</h4>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s"
                    style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: tpfadeUp;">
                    <div class="tp-feature-item mb-30 text-center">
                        <div class="tp-feature-icon">
                            <i class="flaticon-goverment"></i>
                        </div>
                        <div class="tp-feature-content">
                            <h4 class="tp-feature-title-sm">OPAC</h4>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s"
                    style="visibility: visible; animation-duration: 0.9s; animation-delay: 1s; animation-name: tpfadeUp;">
                    <div class="tp-feature-item mb-30 text-center">
                        <div class="tp-feature-icon">
                            <i class="flaticon-traffic-light"></i>
                        </div>
                        <div class="tp-feature-content">
                            <h4 class="tp-feature-title-sm">SIM ARSIP</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div id="service-one-page" class="tp-service-area p-relative theme-bg-2 ">
        <div class="tp-service-shape-1 d-none d-lg-block">
            <img src="assets/img/service/sv-flag.png" alt="">
        </div>
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-service-title-box text-center mb-70">
                        <span class="tp-section-subtitle">Slider Informasi</span>
                        <h4 class="tp-section-title text-white"> Slider Informasi <br> Dinas Perpustakaan dan Kearsipan
                            Kota Medan</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach ($data_slider as $key => $slider)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                                <img style="height: 700px; width:auto; margin:auto;  border: 20px solid white;"
                                    src="{{ $serverConfig['dispusar'] . '/assets/img/slider/' . $slider['foto'] }}"
                                    class="d-block " alt="...">
                            </div>
                        @endforeach
                    </div>

                    <div class="" style="text-align: center;">
                        @foreach ($data_slider as $key => $slider)
                            <button style="height:120px;" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $key }}" class="active" aria-current="true"
                                aria-label="Slide {{ $key }}"><img style="width:100%; height:100px;"
                                    src="{{ $serverConfig['dispusar'] . '/assets/img/slider/' . $slider['foto'] }}"
                                    alt="Slide {{ $key }}"></button>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>




            </div>
        </div>
    </div>

    <!-- feature area end -->

    <!-- about area start -->
    {{-- <div id="about-one-page" class="tp-about-area fix pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="tp-about-title-box mb-45">
                        <span class="tp-section-subtitle">HEY WE ARE STATEX!</span>
                        <h4 class="tp-section-title">Stand with Our Campaign for <br> Working Political</h4>
                    </div>
                </div>
            </div>
            <div class="tp-about-right-wrap pb-120 p-relative">
                <div class="tp-about-shape d-none d-xl-block">
                    <img src="assets/img/about/ab-shape-1.png" alt="">
                </div>
                <div class="tp-about-right-img d-none d-xl-block wow tpfadeRight" data-wow-duration=".9s"
                    data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeRight;">
                    <img src="assets/img/about/ab-1.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="tp-about-feature-box">
                            <h4 class="tp-about-feature-title">Online <br> Services</h4>
                            <div class="tp-about-feature-list">
                                <ul>
                                    <li><a href="service-details.html">Parking Permission</a></li>
                                    <li><a href="service-details.html">Order Birth Certficate</a></li>
                                    <li><a href="service-details.html">File a Tax Return</a></li>
                                    <li><a href="service-details.html">Get Building Permission</a></li>
                                    <li><a href="service-details.html">Apply for Driving License</a></li>
                                    <li><a href="service-details.html">Report Polution</a></li>
                                </ul>
                            </div>
                            <div class="tp-about-feature-btn">
                                <a class="tp-btn-purple" href="service.html">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-12">
                        <div class="tp-about-content-wrap p-relative">
                            <div class="tp-about-text">
                                <p>We strive to understand what they’re going the what
                                    what their price points are, and what’s important to
                                    them and their customers. We connect
                                </p>
                            </div>
                            <div class="tp-about-city-info d-flex align-items-center">
                                <i class="flaticon-smart-city"></i>
                                <span>Great city &amp; places to deveolop your carrer &amp; business</span>
                            </div>
                            <div class="tp-about-progress p-relative">
                                <span class="progress-label">City Development</span>
                                <span class="progress-count">92%</span>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s"
                                        role="progressbar" data-width="92%" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"
                                        style="width: 92%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: slideInLeft;">
                                    </div>
                                </div>
                            </div>
                            <div class="tp-about-tel-info d-flex align-items-center">
                                <div class="tp-about-tel-box mr-100 d-flex align-items-center">
                                    <div class="tp-about-tel-icon">
                                        <span><i class="flaticon-phone-call-1"></i></span>
                                    </div>
                                    <div class="tp-about-tel-number">
                                        <span>Call Us</span>
                                        <a href="tel:(00)122456789">(00) 122 456 789</a>
                                    </div>
                                </div>
                                <div class="tp-about-signature">
                                    <img src="assets/img/about/signature.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- about area end -->

    <!-- project area start -->
    <div class="tp-project-area pt-120 fix mb-10">
        <div class="container">
            <div class="tp-project-top-wrap mb-40">
                <div class="row align-items-end">
                    <div class="col-xl-7 col-lg-6">
                        <div class="tp-project-title-box">
                            <span class="tp-section-subtitle">Our Buletin</span>
                            <h4 class="tp-section-title">Jelajahi berbagai buletin <br> Buletin Dispusar kota medan</h4>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="tp-project-right-text">
                            <p>Buletin Dinas Perpustakaan dan Kearsipan Kota Medan adalah publikasi berkala yang disediakan
                                oleh Dinas Perpustakaan dan Kearsipan Kota Medan sebagai sarana untuk menyampaikan informasi
                                terkini seputar layanan, kegiatan, dan berita terkait dengan perpustakaan dan kearsipan di
                                wilayah Kota Medan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-xl-12">
                <div class="tp-project-slider-wrap">
                    <div
                        class="swiper-container tp-project-slider-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper"
                            style="transform: translate3d(-2751px, 0px, 0px); transition-duration: 0ms;"
                            id="swiper-wrapper-0c85b7e41a6e3649" aria-live="off">

                            @foreach ($data_buletin as $buletin)
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                    style="width: 363px; margin-right: 30px;" role="group" aria-label="9 / 13">
                                    <div class="tp-project-item p-relative">
                                        <div class="tp-project-thumb fix">
                                            <img src="{{ $serverConfig['dispusar'] . '/assets/img/covers/' . $buletin['cover'] }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="tp-project-content-wrap d-flex align-items-center justify-content-between">
                                            <div class="tp-project-content">
                                                <span>{{ $buletin['author'] }}</span>
                                                <h4 class="tp-project-title-sm"><a
                                                        href="/buletin/show/{{ $buletin['id'] }}">{{ $buletin['judul'] }}</a>
                                                </h4>
                                            </div>
                                            <div class="tp-project-icon">
                                                <a href="/buletin/show/{{ $buletin['id'] }}"><i
                                                        class="fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project area end -->

    {{-- pemeran arsip --}}
    <div class="tp-project-area pt-120 fix mb-10">

        <div class="container">
            <div class="container">
                <div class="tp-project-top-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-xl-7 col-lg-6">
                            <div class="tp-project-title-box">
                                <span class="tp-section-subtitle">Pameran arsip</span>
                                <h4 class="tp-section-title"> Pameran Arsip <br> DISPUSAR
                                    Kota Medan
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="tp-project-right-text">
                                <p>Melalui pameran ini, Dinas Perpustakaan dan Kearsipan Kota Medan berharap untuk
                                    meningkatkan pemahaman masyarakat tentang pentingnya arsip sebagai sumber informasi yang
                                    berharga, serta memperkuat hubungan antara masyarakat dengan lembaga kearsipan. Selain
                                    itu, pameran ini juga dapat menjadi sarana edukasi yang efektif untuk memperkenalkan
                                    sejarah, budaya, dan perkembangan kota Medan kepada generasi muda.
                                    <button type="button" class="btn btn-warning btn-lg btn-radius"
                                        onclick="window.open('https://www.artsteps.com/embed/629ee92a89a96cbc92478f89/853/480', '_blank')">Lihat
                                        Museum Virtual</button>

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="custom_carousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        @foreach ($data_pameran as $key => $pameran)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-5" style="text-align: center;"><img style="height:500px;"
                                                src="{{ $serverConfig['dispusar'] . '/assets/img/slider/' . $pameran['foto'] }}"
                                                class="img-fluid"></div>
                                        <div class="col-md-7">
                                            <h2>{{ $pameran['title'] }}</h2>
                                            <p>{{ $pameran['description'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Carousel Inner -->
                    <div class="controls">
                        @foreach ($data_pameran as $key => $pameran)
                            <button type="button" data-bs-target="#custom_carousel"
                                data-bs-slide-to="{{ $key }}" style="width: auto"
                                class=" custom_carousel {{ $key == 0 ? 'active' : '' }}"><img style=" height: 50px;"
                                    src="{{ $serverConfig['dispusar'] . '/assets/img/slider/' . $pameran['foto'] }}"><small>{{ $pameran['title'] }}</small></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- pariban --}}

    <div class="container tp-project-area pt-120 fix mb-10">
        <div class="tp-project-top-wrap mb-40">
            <div class="row align-items-end">
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-project-title-box">
                        <span class="tp-section-subtitle">PARIBAN</span>
                        <h4 class="tp-section-title"> Pengembangan Literasi Bagi Siswa SMP Medan
                        </h4>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-project-right-text">
                        <p>Blog Minat Baca atau blog literasi adalah suatu inovasi yang dibuat untuk dapat lebih
                            meningkatkan/menambah pelayanan kepada masyarakat (khususnya siswa-i SMP Negeri dan Swasta)
                            dalam hal pengembangan minat baca ataupun litetasi.
                            Inovasi blog minat baca adalah salah satu inovasi yang dapat dirancang dari salah satu peserta
                            Diklat PIM IV Pemko Medan Tahun 2017.
                            Inovasi blog minat baca ini dirancang /dibuat oleh Jhonny Marbun, S.Pd, M.Si (Kepala Seksi
                            Pengembangan Pembudayaan Kegemaran Membaca) sebagai salah satu peserta Diklat PIM IV Pemko Medan
                            Tahun 2017.
                            Inovasi blog minat baca ini diberi nama:
                            smpmedanminatbaca.blogspot.com
                            Blog ini dikhususkan untuk siswa-i SMP Negeri dan Swasta yang ada di Kota Medan. Dengan harapan
                            muncul karya-karya literasi siswa-i SMP yang ada di Kota Medan. <div class="tp-header-right-btn d-none d-sm-block">
                                <a class="tp-btn" href="{{ url('/pariban/category/all') }}">Lihat Selengkapnya Disini</a>
                             </div>


                        </p>

                    </div>
                </div>
            </div>
        </div>



    </div>

    {{-- puisi --}}
    <div class="tp-event-title-wrap mb-40 mt-40">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="tp-event-title-box text-center">
                    <span class="tp-section-subtitle">Pariban</span>
                    <h4 class="tp-section-title">Pengembangan Literasi Bagi Siswa SMP Medan </h4>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleDark" class="tp-event-area  p-relative  carousel carousel-dark slide "
        data-bs-ride="carousel">

        <div class="carousel-inner container grey-bg-3 ">



            <div class="carousel-item active" data-bs-interval="2000">
                <div class="row">

                    @foreach ($all_pariban as $pariban)
                        {{-- <div class="col-xl-4 col-lg-4 col-md-6 mb-30 mt-30">
                                <div class="tp-event-item text-center">
                                    <div class="tp-event-thumb fix">
                                        <img style="height: 280px; object-fit:cover;"
                                            src="{{ $serverConfig['dispusar'] . '/assets/img/pariban/foto/' . $pariban['foto'] }}"
                                            alt="">
                                    </div>
                                    <div class="tp-event-content-wrap">
                                        <div class="tp-event-content">
                                            <div class="tp-event-meta">
                                                <span><i class="fa-regular fa-clock"></i> {{ $pariban['created_at']->format('H:i') }} </span>
                                                <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> {{ $pariban['created_at']->format('d-m-Y') }} </span>

                                            </div>
                                            <h4 class="tp-event-title-sm">
                                                <a href="event-details.html">{{ $pariban['judul'] }}</a>
                                            </h4>

                                            <p style="margin: 0;">Penerbit : {{ $pariban['author'] }}</p>
                                            <p style="margin: 0;">Sekolah : {{ $pariban['sekolah'] }}</p>
                                            <p style="margin: 0;">Kelas : {{ $pariban['kelas'] }}</p>


                                        </div>
                                        <div class="tp-event-link">
                                            <a href="/pariban/show/{{ $pariban['id'] }}">LIHAT</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="tp-blog__item">
                                <div class="tp-blog__thumb p-relative fix"
                                    style="width: 100%;
                                            height: 200px;
                                            object-fit: cover;
                                            object-position: center;
                                        ">
                                    <a href="/pariban/show/{{ $pariban['id'] }}"><img class="w-100"
                                            src="{{ $serverConfig['dispusar'] . '/assets/img/pariban/foto/' . $pariban['foto'] }}"
                                            alt=""></a>
                                    <span>
                                        <img src="assets/img/avata/avata-3.png" alt="">
                                        <i>By: {{ $pariban['author'] }}</i>
                                    </span>
                                </div>
                                <div class="tp-blog__content-wrap">
                                    <div class="tp-blog__meta">
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.44824 13.0469H3.69824V10.7969H1.44824V13.0469ZM4.19824 13.0469H6.69824V10.7969H4.19824V13.0469ZM1.44824 10.2969H3.69824V7.79687H1.44824V10.2969ZM4.19824 10.2969H6.69824V7.79687H4.19824V10.2969ZM1.44824 7.29687H3.69824V5.04688H1.44824V7.29687ZM7.19824 13.0469H9.69824V10.7969H7.19824V13.0469ZM4.19824 7.29687H6.69824V5.04688H4.19824V7.29687ZM10.1982 13.0469H12.4482V10.7969H10.1982V13.0469ZM7.19824 10.2969H9.69824V7.79687H7.19824V10.2969ZM4.44824 3.54687V1.29687C4.44824 1.22917 4.4222 1.17187 4.37012 1.125C4.32324 1.07292 4.26595 1.04687 4.19824 1.04687H3.69824C3.63053 1.04687 3.57064 1.07292 3.51855 1.125C3.47168 1.17187 3.44824 1.22917 3.44824 1.29687V3.54687C3.44824 3.61458 3.47168 3.67448 3.51855 3.72656C3.57064 3.77344 3.63053 3.79687 3.69824 3.79687H4.19824C4.26595 3.79687 4.32324 3.77344 4.37012 3.72656C4.4222 3.67448 4.44824 3.61458 4.44824 3.54687ZM10.1982 10.2969H12.4482V7.79687H10.1982V10.2969ZM7.19824 7.29687H9.69824V5.04688H7.19824V7.29687ZM10.1982 7.29687H12.4482V5.04688H10.1982V7.29687ZM10.4482 3.54687V1.29687C10.4482 1.22917 10.4222 1.17187 10.3701 1.125C10.3232 1.07292 10.266 1.04687 10.1982 1.04687H9.69824C9.63053 1.04687 9.57064 1.07292 9.51855 1.125C9.47168 1.17187 9.44824 1.22917 9.44824 1.29687V3.54687C9.44824 3.61458 9.47168 3.67448 9.51855 3.72656C9.57064 3.77344 9.63053 3.79687 9.69824 3.79687H10.1982C10.266 3.79687 10.3232 3.77344 10.3701 3.72656C10.4222 3.67448 10.4482 3.61458 10.4482 3.54687ZM13.4482 3.04687V13.0469C13.4482 13.3177 13.3493 13.5521 13.1514 13.75C12.9535 13.9479 12.7191 14.0469 12.4482 14.0469H1.44824C1.17741 14.0469 0.943034 13.9479 0.745117 13.75C0.547201 13.5521 0.448242 13.3177 0.448242 13.0469V3.04687C0.448242 2.77604 0.547201 2.54167 0.745117 2.34375C0.943034 2.14583 1.17741 2.04687 1.44824 2.04687H2.44824V1.29687C2.44824 0.953124 2.57064 0.658853 2.81543 0.414062C3.06022 0.16927 3.35449 0.046874 3.69824 0.046874H4.19824C4.54199 0.046874 4.83626 0.16927 5.08105 0.414062C5.32585 0.658853 5.44824 0.953124 5.44824 1.29687V2.04687H8.44824V1.29687C8.44824 0.953124 8.57064 0.658853 8.81543 0.414062C9.06022 0.16927 9.35449 0.046874 9.69824 0.046874H10.1982C10.542 0.046874 10.8363 0.16927 11.0811 0.414062C11.3258 0.658853 11.4482 0.953124 11.4482 1.29687V2.04687H12.4482C12.7191 2.04687 12.9535 2.14583 13.1514 2.34375C13.3493 2.54167 13.4482 2.77604 13.4482 3.04687Z"
                                                    fill="currentcolor"></path>
                                            </svg>
                                            {{ $pariban['created_at']->format('d-m-Y') }}
                                        </span>
                                        <span>
                                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.95839 2.17857C8.16672 1.86905 7.31553 1.71428 6.40482 1.71428C5.4941 1.71428 4.64291 1.86905 3.85125 2.17857C3.05958 2.48809 2.42863 2.90774 1.95839 3.4375C1.4941 3.96726 1.26196 4.53571 1.26196 5.14286C1.26196 5.63095 1.4197 6.10119 1.73517 6.55357C2.05065 7.00595 2.4941 7.39881 3.06553 7.73214L3.9316 8.23214L3.6191 8.98214C3.82148 8.8631 4.00601 8.74702 4.17267 8.63393L4.56553 8.35714L5.03875 8.44643C5.50303 8.52976 5.95839 8.57143 6.40482 8.57143C7.31553 8.57143 8.16672 8.41667 8.95839 8.10714C9.75005 7.79762 10.378 7.37798 10.8423 6.84821C11.3126 6.31845 11.5477 5.75 11.5477 5.14286C11.5477 4.53571 11.3126 3.96726 10.8423 3.4375C10.378 2.90774 9.75005 2.48809 8.95839 2.17857ZM3.2441 1.1875C4.21434 0.776785 5.26791 0.571428 6.40482 0.571428C7.54172 0.571428 8.59232 0.776785 9.5566 1.1875C10.5268 1.59226 11.2917 2.14583 11.8512 2.84821C12.4108 3.55059 12.6905 4.31548 12.6905 5.14286C12.6905 5.97024 12.4108 6.73512 11.8512 7.4375C11.2917 8.13988 10.5268 8.69643 9.5566 9.10714C8.59232 9.5119 7.54172 9.71429 6.40482 9.71429C5.89291 9.71429 5.3691 9.66667 4.83339 9.57143C4.09529 10.0952 3.26791 10.4762 2.35125 10.7143C2.13696 10.7679 1.88101 10.8155 1.58339 10.8571H1.5566C1.49113 10.8571 1.42863 10.8333 1.3691 10.7857C1.31553 10.7381 1.28279 10.6756 1.27089 10.5982C1.26494 10.5804 1.26196 10.5625 1.26196 10.5446C1.26196 10.5208 1.26196 10.5 1.26196 10.4821C1.26791 10.4643 1.27386 10.4464 1.27982 10.4286C1.29172 10.4107 1.30065 10.3958 1.3066 10.3839C1.31255 10.372 1.32148 10.3571 1.33339 10.3393C1.35125 10.3155 1.36315 10.3006 1.3691 10.2946C1.38101 10.2827 1.39589 10.2679 1.41375 10.25C1.4316 10.2262 1.44351 10.2113 1.44946 10.2054C1.47922 10.1696 1.54767 10.0952 1.65482 9.98214C1.76196 9.86905 1.83934 9.78274 1.88696 9.72321C1.93458 9.65774 2.00005 9.57143 2.08339 9.46429C2.17267 9.35119 2.24708 9.23512 2.3066 9.11607C2.37208 8.99702 2.43458 8.86607 2.4941 8.72321C1.75601 8.29464 1.17565 7.76786 0.753031 7.14286C0.330412 6.51786 0.119102 5.85119 0.119102 5.14286C0.119102 4.31548 0.398864 3.55059 0.958388 2.84821C1.51791 2.14583 2.27982 1.59226 3.2441 1.1875ZM13.7441 11.0089C13.8036 11.1518 13.8632 11.2827 13.9227 11.4018C13.9882 11.5208 14.0626 11.6369 14.1459 11.75C14.2352 11.8571 14.3036 11.9405 14.3512 12C14.3989 12.0655 14.4762 12.1548 14.5834 12.2679C14.6905 12.381 14.759 12.4554 14.7887 12.4911C14.7947 12.497 14.8066 12.5089 14.8245 12.5268C14.8423 12.5506 14.8542 12.5655 14.8602 12.5714C14.8721 12.5833 14.884 12.5982 14.8959 12.6161C14.9137 12.6399 14.9257 12.6577 14.9316 12.6696C14.9376 12.6815 14.9435 12.6964 14.9495 12.7143C14.9614 12.7321 14.9673 12.75 14.9673 12.7679C14.9733 12.7857 14.9762 12.8036 14.9762 12.8214C14.9762 12.8452 14.9733 12.8661 14.9673 12.8839C14.9495 12.9673 14.9108 13.0327 14.8512 13.0804C14.7917 13.128 14.7262 13.1488 14.6548 13.1429C14.3572 13.1012 14.1012 13.0536 13.887 13C12.9703 12.7619 12.1429 12.381 11.4048 11.8571C10.8691 11.9524 10.3453 12 9.83339 12C8.22029 12 6.81553 11.6071 5.6191 10.8214C5.96434 10.8452 6.22625 10.8571 6.40482 10.8571C7.36315 10.8571 8.28279 10.7232 9.16375 10.4554C10.0447 10.1875 10.8304 9.80357 11.5209 9.30357C12.2649 8.75595 12.8364 8.125 13.2352 7.41071C13.634 6.69643 13.8334 5.94048 13.8334 5.14286C13.8334 4.68452 13.7649 4.23214 13.628 3.78571C14.3959 4.20833 15.003 4.73809 15.4495 5.375C15.8959 6.0119 16.1191 6.69643 16.1191 7.42857C16.1191 8.14286 15.9078 8.8125 15.4852 9.4375C15.0626 10.0565 14.4822 10.5804 13.7441 11.0089Z"
                                                    fill="currentcolor"></path>
                                            </svg>
                                            Comments (0)
                                        </span>
                                    </div>
                                    <center>
                                        <h5 class="tp-blog__title-sm"><a href="#">{{ $pariban['judul'] }}</a><br>
                                    </center>
                                    </h5>
                                    <p class="text-secondary ">
                                        {{-- Nama: {{ $pariban['author'] }}
                                        <br>
                                        Nis: {{ $pariban['nis'] }}
                                        <br>
                                        Kelas: {{ $pariban['kelas'] }}
                                        <br>
                                        Sekolah: {{ $pariban['sekolah'] }}
                                        <br> --}}
                                        {{ $pariban['deskripsi'] }}

                                    </p>
                                    <div class="tp-blog__link">
                                        <a href="/pariban/show/{{ $pariban['id'] }}">Lihat lebih lanjut <i
                                                class="fa-regular fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>





        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- //end --}}



    {{-- cerpen --}}
    {{-- <div class="tp-event-title-wrap mb-40 mt-40">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="tp-event-title-box text-center">
                    <span class="tp-section-subtitle">KATEGORI</span>
                    <h4 class="tp-section-title">CERPEN</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleDark" class="tp-event-area  p-relative  carousel carousel-dark slide "
        data-bs-ride="carousel">

        <div class="carousel-inner container grey-bg-3">

            @foreach ($chunks_pc as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                    <div class="row">
                        @foreach ($chunk as $pariban)
                            <div class="col-xl-4 col-lg-4 col-md-6 mt-30 mb-30">
                                <div class="tp-event-item text-center">
                                    <div class="tp-event-thumb fix">
                                        <img style="height: 280px; object-fit:cover;"
                                            src="{{ $serverConfig['dispusar'] . '/assets/img/pariban/foto/' . $pariban['foto'] }}"
                                            alt="">
                                    </div>
                                    <div class="tp-event-content-wrap">
                                        <div class="tp-event-content">
                                            <div class="tp-event-meta">
                                                <span><i class="fa-regular fa-clock"></i> {{ $pariban['created_at']->format('H:i') }} </span>
                                                <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> {{ $pariban['created_at']->format('d-m-Y') }} </span>


                                            </div>
                                            <h4 class="tp-event-title-sm">
                                                <a href="event-details.html">{{ $pariban['judul'] }}</a>
                                            </h4>

                                            <p style="margin: 0;">Penerbit : {{ $pariban['author'] }}</p>
                                            <p style="margin: 0;">Sekolah : {{ $pariban['sekolah'] }}</p>
                                            <p style="margin: 0;">Kelas : {{ $pariban['kelas'] }}</p>


                                        </div>
                                        <div class="tp-event-link">
                                            <a href="/pariban/show/{{ $pariban['id'] }}">LIHAT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach




        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
    {{-- //end --}}


    {{-- lukisan
    <div class="tp-event-title-wrap mb-40 mt-40">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="tp-event-title-box text-center">
                    <span class="tp-section-subtitle">KATEGORI</span>
                    <h4 class="tp-section-title">LUKISAN</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleDark" class="tp-event-area p-relative  carousel carousel-dark slide "
        data-bs-ride="carousel">

        <div class="carousel-inner container grey-bg-3">

            @foreach ($chunks_pl as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                    <div class="row">
                        @foreach ($chunk as $pariban)
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30 mt-30">
                                <div class="tp-event-item text-center">
                                    <div class="tp-event-thumb fix">
                                        <img style="height: 280px; object-fit:cover;"
                                            src="{{ $serverConfig['dispusar'] . '/assets/img/pariban/foto/' . $pariban['foto'] }}"
                                            alt="">
                                    </div>
                                    <div class="tp-event-content-wrap">
                                        <div class="tp-event-content">
                                            <div class="tp-event-meta">
                                                <span><i class="fa-regular fa-clock"></i> {{ $pariban['created_at']->format('H:i') }} </span>
                                                <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> {{ $pariban['created_at']->format('d-m-Y') }} </span>


                                            </div>
                                            <h4 class="tp-event-title-sm">
                                                <a href="event-details.html">{{ $pariban['judul'] }}</a>
                                            </h4>

                                            <p style="margin: 0;">Penerbit : {{ $pariban['author'] }}</p>
                                            <p style="margin: 0;">Sekolah : {{ $pariban['sekolah'] }}</p>
                                            <p style="margin: 0;">Kelas : {{ $pariban['kelas'] }}</p>


                                        </div>
                                        <div class="tp-event-link">
                                            <a href="/pariban/show/{{ $pariban['id'] }}">LIHAT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach




        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
    {{-- //end --}}



    {{-- Vidio --}}
    {{-- <div class="tp-event-title-wrap mb-40 mt-40">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="tp-event-title-box text-center">
                    <span class="tp-section-subtitle">KATEGORI</span>
                    <h4 class="tp-section-title">VIDIO</h4>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div id="carouselExampleDark" class="tp-event-area  p-relative carousel carousel-dark slide "
        data-bs-ride="carousel">

        <div class="carousel-inner container grey-bg-3">

            @foreach ($chunks_pv as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                    <div class="row">
                        @foreach ($chunk as $pariban)
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30 mt-30">
                                <div class="tp-event-item text-center">
                                    <div class="tp-event-thumb fix">
                                        <img style="height: 280px; object-fit:cover;"
                                            src="{{ $serverConfig['dispusar'] . '/assets/img/pariban/foto/' . $pariban['foto'] }}"
                                            alt="">
                                    </div>
                                    <div class="tp-event-content-wrap">
                                        <div class="tp-event-content">
                                            <div class="tp-event-meta">
                                                <span><i class="fa-regular fa-clock"></i> {{ $pariban['created_at']->format('H:i') }} </span>
                                                <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> {{ $pariban['created_at']->format('d-m-Y') }} </span>

                                            </div>
                                            <h4 class="tp-event-title-sm">
                                                <a href="event-details.html">{{ $pariban['judul'] }}</a>
                                            </h4>

                                            <p style="margin: 0;">Penerbit : {{ $pariban['author'] }}</p>
                                            <p style="margin: 0;">Sekolah : {{ $pariban['sekolah'] }}</p>
                                            <p style="margin: 0;">Kelas : {{ $pariban['kelas'] }}</p>


                                        </div>
                                        <div class="tp-event-link">
                                            <a href="/pariban/show/{{ $pariban['id'] }}">LIHAT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach




        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
    {{-- //end --}}
@endsection
