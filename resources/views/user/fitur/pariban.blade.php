@extends('layouts.app', ['tittle' => ' Pariban', 'sub' => 'Pengembangan Literasi Bagi Siswa SMP Medan'])
<?php $serverConfig = config('servers'); ?>

@section('header')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
        data-background="/assets/img/breadcurmb/bread.jpg"
        style="background-image: url(&quot;assets/img/breadcurmb/bread.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content z-index text-center">
                        <h3 class="breadcrumb__title"> PARIBAN</h3>

                        <div class="breadcrumb__list">

                            <span>
                                Pengembangan Literasi Bagi Siswa SMP Medan

                            </span>
                        </div>
                        <br>
                        <div class="breadcrumb__list">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span>pariban</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- contact area end -->
@endsection


@section('content')
    <div class="container tp-event-title-box text-center mt-100">
        <h4 class="tp-section-title">{{ strtoupper($title) }}</h4>

    </div>
    <!-- contact area start -->
    <div class="tp-service-standard-area pt-120 pb-90">
        <div class="container">
            <div class="row">

                @foreach ($data_pariban['data'] as $pariban)
                    {{-- <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
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
                    {{-- </div>
                                    <h4 class="tp-event-title-sm"><a
                                            href="/pariban/show/{{ $pariban['id'] }}">{{ $pariban['judul'] }}</a>
                                    </h4>
                                </div>
                                <div class="tp-event-link">
                                    <a href="/pariban/show/{{ $pariban['id'] }}">LIHAT</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30" >
                        <div class="tp-blog__item">
                            <div class="tp-blog__thumb p-relative fix"
                                style="width: 100%;
                                        height: 200px;
                                        object-fit: cover;
                                        object-position: center;
                                    ">
                                <a href="#"><img class="w-100"
                                        src="{{ $serverConfig['dispusar'] . '/assets/img/pariban/foto/' . $pariban['foto'] }}"
                                        alt=""></a>
                                <span>
                                    <img src="{{ asset('assets/img/avata/avata-3.png') }}" alt="">
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
                <div class="basic-pagination " style="margin-top: 100px">
                    <!-- Display pagination links -->
                    <nav>
                        <ul>
                            @foreach ($data_pariban['links'] as $link)
                                <li>
                                    @php

                                    if ($link['label'] == '&laquo; Sebelumnya') {
                                        echo '<a href="/pariban/category/' . $title . '?current_page=' . ($loop->iteration - 1) . '"><i class="fa-regular fa-angles-left"></i></a>';
                                    } elseif ($link['label'] == 'Selanjutnya &raquo;') {
                                        echo '<a href="/pariban/category/' . $title . '?current_page=' . ($loop->iteration - 1) . '"><i class="fa-regular fa-angles-right"></i></a>';
                                    } else {
                                        echo '<a href="/pariban/category/' . $title . '?current_page=' . ($loop->iteration - 1) . '"><span class="' . ($link['active'] ? "current" : "") . '">' . $link['label'] . '</span></a>';
                                    }
                                @endphp
                          </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    @endsection
