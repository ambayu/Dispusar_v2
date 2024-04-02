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
                                                        href="https://www.youtube.com/watch?v=K527oNxtO7o"><i
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
                                                        href="https://www.youtube.com/watch?v=K527oNxtO7o"><i
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
                                                        href="/buletin/show/{{ $buletin['id'] }}">{{ $buletin['judul'] }}</a></h4>
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
                            muncul karya-karya literasi siswa-i SMP yang ada di Kota Medan.


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
                    <span class="tp-section-subtitle">KATEGORI</span>
                    <h4 class="tp-section-title">PUISI</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleDark" class="tp-event-area  p-relative  carousel carousel-dark slide "
        data-bs-ride="carousel">

        <div class="carousel-inner container grey-bg-3 " >

            @foreach ($chunks_pp as $key => $chunk)
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
                                                <span><i class="fa-regular fa-clock"></i>08:00 am</span>
                                                <div class="row ">
                                                    <div class="col-md-2 text-right">
                                                        Penerbit:
                                                    </div>
                                                    <div class="col-md-10 text-left">
                                                        {{ $pariban['author'] }}
                                                    </div>
                                                </div>

                                                {{-- <span><i class="fa-light fa-location-dot"></i><a
                                            href="https://www.google.com/maps/@23.8202709,90.2804172,9z?entry=ttu"
                                            target="_blank">Watsica 24, USA</a></span> --}}
                                            </div>
                                            <h4 class="tp-event-title-sm"><a
                                                    href="event-details.html">{{ $pariban['judul'] }}</a></h4>
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
    </div>
    {{-- //end --}}



    {{-- cerpen --}}
    <div class="tp-event-title-wrap mb-40 mt-40">
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
                                                <span><i class="fa-regular fa-clock"></i>08:00 am</span>


                                                {{-- <span><i class="fa-light fa-location-dot"></i><a
                                            href="https://www.google.com/maps/@23.8202709,90.2804172,9z?entry=ttu"
                                            target="_blank">Watsica 24, USA</a></span> --}}
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
    </div>
    {{-- //end --}}


    {{-- lukisan --}}
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
                                                <span><i class="fa-regular fa-clock"></i>08:00 am</span>
                                                <div class="row ">
                                                    <div class="col-md-2 text-right">
                                                        Penerbit:
                                                    </div>
                                                    <div class="col-md-10 text-left">
                                                        {{ $pariban['author'] }}
                                                    </div>
                                                </div>

                                                {{-- <span><i class="fa-light fa-location-dot"></i><a
                                            href="https://www.google.com/maps/@23.8202709,90.2804172,9z?entry=ttu"
                                            target="_blank">Watsica 24, USA</a></span> --}}
                                            </div>
                                            <h4 class="tp-event-title-sm"><a
                                                    href="event-details.html">{{ $pariban['judul'] }}</a></h4>
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
    </div>
    {{-- //end --}}



    {{-- Vidio --}}
    <div class="tp-event-title-wrap mb-40 mt-40">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="tp-event-title-box text-center">
                    <span class="tp-section-subtitle">KATEGORI</span>
                    <h4 class="tp-section-title">VIDIO</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleDark" class="tp-event-area  p-relative carousel carousel-dark slide "
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
                                                <span><i class="fa-regular fa-clock"></i>08:00 am</span>
                                                <div class="row ">
                                                    <div class="col-md-2 text-right">
                                                        Penerbit:
                                                    </div>
                                                    <div class="col-md-10 text-left">
                                                        {{ $pariban['author'] }}
                                                    </div>
                                                </div>

                                                {{-- <span><i class="fa-light fa-location-dot"></i><a
                                            href="https://www.google.com/maps/@23.8202709,90.2804172,9z?entry=ttu"
                                            target="_blank">Watsica 24, USA</a></span> --}}
                                            </div>
                                            <h4 class="tp-event-title-sm"><a
                                                    href="event-details.html">{{ $pariban['judul'] }}</a></h4>
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
    </div>
    {{-- //end --}}
@endsection
