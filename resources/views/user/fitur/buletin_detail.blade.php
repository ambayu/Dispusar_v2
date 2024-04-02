@extends('layouts.app', ['tittle' => ' Buletin'])
<?php $serverConfig = config('servers'); ?>

@section('header')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
        data-background="/assets/img/breadcurmb/breadcurmb.jpg"
        style="background-image: url(&quot;/assets/img/breadcurmb/breadcurmb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content z-index text-center">
                        <h3 class="breadcrumb__title"> BULETIN</h3>
                        <div class="breadcrumb__list">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span>buletin</span>
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
    <!-- contact area start -->
    <div class="tp-service-standard-area pt-120 pb-90">
        <div class="container-fluid">
            <div class="row">


                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="tp-service-details-left-box">
                            <div class="tp-service-details-widget mb-30">
                                <div class="tp-service-details-category">
                                    <img style="height: 500px;"
                                        src="{{ $serverConfig['dispusar'] . '/assets/img/covers/' . $data_buletin['cover'] }}"
                                        alt="">

                                </div>
                            </div>
                            <div class="tp-service-details-widget mb-30">
                                <h4 class="tp-service-details-title">Saran Dan Masukan</h4>
                                <div class="tp-service-details-form">
                                    <form action="#">
                                        <div class="tp-service-details-input">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="tp-service-details-input">
                                            <input type="text" placeholder="Your Email Address">
                                        </div>
                                        <div class="tp-service-details-input">
                                            <textarea placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="tp-service-details-input">
                                            <input class="btn" value="Submit" type="submit"></input>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tp-service-details-widget mb-30">
                                <h4 class="tp-service-details-title">Dapat Di Downloads</h4>
                                <div class="tp-service-details-download-box mb-20 d-flex align-items-center">
                                    <div class="tp-service-details-download-icon">
                                        <span><i class="fa-light fa-file-pdf"></i></span>
                                    </div>
                                    <div class="tp-service-details-download-info">
                                        <h5>{{ $data_buletin['judul'] }}</h5>
                                        <span>Last update {{ $data_buletin['updated_at']->format('Y-m-d') }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="tp-service-details-right-wrap">
                            <div class="tp-service-details-right-thumb mb-30">
                                <img class="w-100" src="assets/img/service/sv-details-1.jpg" alt="">
                            </div>
                            <div class="tp-service-details-right-text mb-30">
                                <h4 class="tp-service-details-right-title mb-15">{{ $data_buletin['judul'] }}</h4>
                                <small>{{ $data_buletin['created_at']->format('Y-m-d') }}</small>
                                <p>
                                    {{ $data_buletin['deskripsi'] }}
                                </p>
                            </div>
                            <div class="tp-service-details-right-quote-text">
                                <p>Author : {{ $data_buletin['author'] }}</p>
                            </div>
                            <div class="tp-service-details-right-text mt-30">
                                <embed src="{{ $serverConfig['dispusar'] . '/assets/files/' . $data_buletin['file'] }}"
                                    type="application/pdf" width="100%" height="800px" />
                            </div>
                            {{-- tampilkan pdf file --}}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
