<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $tittle }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('') }}assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/flaticon_statex.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/custom-animation.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/pameran.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style type="text/css" id="jarallax-clip-0">
        #jarallax-container-0 {
            clip: rect(0px 1536px 594px 0);
            clip: rect(0px, 1536px, 594px, 0);
        }
    </style>
    <script>
        var serverConfig = {!! json_encode(config('servers')) !!};
    </script>


</head>

<body style="">

    <!-- pre loader area start -->
    <div id="loading" style="">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper back-to-top-btn-show">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
    <!-- back to top end -->




    <!-- tp-offcanvus-area-start -->
    @include('.partials.mobile_nav')
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <header class="tp-header-height" style="height: 150px;">

        <!-- header top area start -->
        <div class="tp-header-top__area tp-header-top__space d-none d-md-block theme-bg-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-lg-7 col-md-9">
                        <div class="tp-header-top__left-info">
                            <ul>
                                <li>
                                    <i class="flaticon-map"></i>
                                    <a href="https://www.google.com/maps?ll=3.585316,98.661735&z=16&t=m&hl=en-US&gl=US&mapclient=embed&q=Jl.+Iskandar+Muda+No.270+Petisah+Tengah+Kec.+Medan+Petisah+Kota+Medan,+Sumatera+Utara+20151"
                                        target="_blank">Jl. Iskandar Muda No.270,Kota Medan, Indonesia</a>
                                </li>
                                <li>
                                    <i class="flaticon-envelope"></i>
                                    <a href="mailto:disperpustakaanarsip@pemkomedan.go.id">
                                        disperpustakaanarsip@pemkomedan.go.id</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-3">

                        <div class="tp-header-top__right-social">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- header top area end -->

        <!-- header area end -->
        @include('partials.navbar')
        <!-- header area end -->


    </header>


    <main>
        @yield('header')

        @yield('content')

        <!-- blog area end -->
    </main>

    <footer>

        <!-- footer-top area start -->
        <div id="footer-one-page" class="tp-footer-top-area tp-footer-top-bdr-bottom pt-35 theme-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-footer-top-item tp-footer-top-space-1 d-flex align-items-center">
                            <div class="tp-footer-top-info-icon">
                                <i class="flaticon-globe"></i>
                            </div>
                            <div class="tp-footer-top-info">
                                <h4 class="tp-footer-top-info-title">Alamat</h4>
                                <span>
                                    <a href="https://www.google.com/maps?ll=3.585316,98.661735&z=16&t=m&hl=en-US&gl=US&mapclient=embed&q=Jl.+Iskandar+Muda+No.270+Petisah+Tengah+Kec.+Medan+Petisah+Kota+Medan,+Sumatera+Utara+20151"
                                        target="_blank"> Jl. Iskandar Muda No.270, Petisah Tengah, Kec. Medan Petisah,
                                        Kota Medan, Sumatera Utara 20111, Indonesia
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-footer-top-item tp-footer-top-space-2 d-flex align-items-center">
                            <div class="tp-footer-top-info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="tp-footer-top-info">
                                <h4 class="tp-footer-top-info-title">Contact</h4>
                                <span>
                                    <a href="mailto:disperpustakaanarsip@pemkomedan.go.id">disperpustakaanarsip <br> @pemkomedan.go.id</a>
                                </span>
                                <br>
                                <span>
                                    <a href="tel: +62 61 4568694"> +62 61 4568694</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-footer-top-item tp-footer-top-space-3 d-flex align-items-center">
                            <div class="tp-footer-top-info-icon">
                                <i class="flaticon-fast-time"></i>
                            </div>
                            <div class="tp-footer-top-info">
                                <h4 class="tp-footer-top-info-title">Clock</h4>
                                <span>
                                    Senin sampai Sabtu <br> 8 pagi hingga 5 sore <br>
                                    Sabtu-Minggu: Closed
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top area end -->

        <!-- footer area start -->
        <div class="tp-footer-area theme-bg-2 pt-110 pb-60 p-relative z-index">
            <div class="tp-footer-shape">
                <img src="{{ asset('') }}assets/img/footer/footer-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s"
                        style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: none;">
                        <div class="tp-footer-widget footer-col-1">
                            <div class="tp-footer-widget-logo">
                                <a href="/"><img src="{{ asset('') }}assets/img/logo/logo-white.png"
                                        alt=""></a>
                            </div>
                            <div class="tp-footer-widget-content">
                                <p class="mb-40">Portal ini merupakan website yang berfungsi sebagai pintu gerbang
                                    untuk melihat beberapa website maupun sistem yang ada di lingkungan Dinas
                                    Perpustakaan dan Kearsipan Pemerintah Kota Medan NPM 127119E1019260.
                                </p>
                                <a class="tp-btn white-anim" href="/">JELAJAHI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s"
                        style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: none;">
                        <div class="tp-footer-widget footer-col-2">
                            <h4 class="tp-footer-widget-title"> Link Fitur</h4>
                            <div class="tp-footer-widget-menu">
                                <ul>
                                    <li><a href="#">Buletin</a></li>
                                    <li><a href="#">Kontak</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s"
                        style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: none;">
                        <div class="tp-footer-widget footer-col-3">
                            <h4 class="tp-footer-widget-title">Instagram</h4>
                            <div class="tp-footer-widget-instagram">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('') }}assets/img/instagram/insta-1.jpg"
                                                alt="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('') }}assets/img/instagram/insta-2.jpg"
                                                alt="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('') }}assets/img/instagram/insta-3.jpg"
                                                alt="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('') }}assets/img/instagram/insta-4.jpg"
                                                alt="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('') }}assets/img/instagram/insta-1.jpg"
                                                alt="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('') }}assets/img/instagram/insta-2.jpg"
                                                alt="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".9s"
                        style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: none;">
                        <div class="tp-footer-widget footer-col-4">
                            <h4 class="tp-footer-widget-title">Kabar Terbaru </h4>
                            <div class="tp-footer-widget-content">
                                <p class="mb-25">
                                    Informasi terbaru mengenai artikel dan berita terkini dapat kami kirimkan
                                    setiap bulannya melalui form email yang kamu kirimkan dibawah
                                </p>
                            </div>
                            <form action="#">
                                <div class="tp-footer-mail-box p-relative">
                                    <input type="text" placeholder=" Email Kamu">
                                    <button class="tp-btn-subscribe-sm">SUBSCRIBE</button>
                                </div>
                                <div class="tp-footer-check-box">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Saya setuju dengan data yang saya kirimkan
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer area end -->

        <!-- copy-right area start -->
        <div class="tp-copyright-area tp-copyright-space green-bg pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="tp-copyright-left-text text-center text-md-start">
                            <p>© Copyright 2024 by <a href="#">Dinasperpustakaan dan Kearsipan Kota Medan</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 d-none col-sm-6 d-sm-block">
                        <div class="tp-copyright-right-social text-center text-md-end">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copy-right area end -->

    </footer>



    <!-- JS here -->
    <script src="{{ asset('') }}assets/js/vendor/jquery.js"></script>
    <script src="{{ asset('') }}assets/js/vendor/waypoints.js"></script>
    <script src="{{ asset('') }}assets/js/bootstrap-bundle.js"></script>
    <script src="{{ asset('') }}assets/js/meanmenu.js"></script>
    <script src="{{ asset('') }}assets/js/gsap.min.js"></script>
    <script src="{{ asset('') }}assets/js/ScrollTrigger.min.js"></script>
    <script src="{{ asset('') }}assets/js/split-text.min.js"></script>
    <script src="{{ asset('') }}assets/js/swiper-bundle.js"></script>
    <script src="{{ asset('') }}assets/js/slick.js"></script>
    <script src="{{ asset('') }}assets/js/range-slider.js"></script>
    <script src="{{ asset('') }}assets/js/magnific-popup.js"></script>
    <script src="{{ asset('') }}assets/js/nice-select.js"></script>
    <script src="{{ asset('') }}assets/js/purecounter.js"></script>
    <script src="{{ asset('') }}assets/js/countdown.js"></script>
    <script src="{{ asset('') }}assets/js/jequery-knob.js"></script>
    <script src="{{ asset('') }}assets/js/jequery-appear.js"></script>
    <script src="{{ asset('') }}assets/js/wow.js"></script>
    <script src="{{ asset('') }}assets/js/jarallax.js"></script>
    <script src="{{ asset('') }}assets/js/isotope-pkgd.js"></script>
    <script src="{{ asset('') }}assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{ asset('') }}assets/js/ajax-form.js"></script>
    <script src="{{ asset('') }}assets/js/main.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            let customCarousel = document.getElementById('custom_carousel');
            let carousel = new bootstrap.Carousel(customCarousel);

            customCarousel.addEventListener('slide.bs.carousel', function (event) {
                let activeControl = customCarousel.querySelector('.controls button.active');
                if (activeControl) {
                    activeControl.classList.remove('active');
                }

                let index = event.to;
                let controls = customCarousel.querySelectorAll('.controls button');
                controls[index].classList.add('active');
            });
        });
    </script>

    <script src="moz-extension://0e4a74e3-3973-4b68-932b-d2f0a3f9b917/js/app.js" type="text/javascript"></script>
</body>

</html>
