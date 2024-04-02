@extends('layouts.app', ['tittle' => ' Buletin'])
<?php $serverConfig = config('servers'); ?>

@section('header')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
        data-background="assets/img/breadcurmb/breadcurmb.jpg"
        style="background-image: url(&quot;assets/img/breadcurmb/breadcurmb.jpg&quot;);">
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
        <div class="container">
            <div class="row">
                @foreach ($data_buletin['data'] as $formulir)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                        <div class="tp-service-standard-item p-relative">
                            <div class="tp-service-standard-img">
                                <img style="height: 500px;" src="{{ $serverConfig['dispusar'] . '/assets/img/covers/' . $formulir['cover'] }}" alt="">
                            </div>
                            <div class="tp-service-standard-content-wrap z-index">
                                <div class="tp-service-standard-content-main">
                                    <div class="tp-service-standard-content">
                                        <span><i class="flaticon-corporate"></i></span>
                                        <h4 class="tp-service-standard-title"><a href="service-details.html">{{ $formulir['judul'] }}</a></h4>
                                    </div>
                                    <div class="tp-service-standard-link">
                                        <a href="/buletin/show/{{ $formulir['id'] }}">Lihat <i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Display pagination links -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                        @foreach ($data_buletin['links'] as $link)
                            <li class="page-item {{ $link['active'] ? 'active' : '' }}">
                                <a class="page-link" href="/buletin?current_page={{ $loop->iteration -1 }}">{!! $link['label'] !!}</a>
                            </li>
                        @endforeach

            </div>
        </div>
    </div>
@endsection
