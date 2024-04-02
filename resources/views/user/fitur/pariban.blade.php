@extends('layouts.app', ['tittle' => ' Pariban'])
<?php $serverConfig = config('servers'); ?>

@section('header')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
        data-background="/assets/img/breadcurmb/breadcurmb.jpg"
        style="background-image: url(&quot;assets/img/breadcurmb/breadcurmb.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content z-index text-center">
                        <h3 class="breadcrumb__title"> PARIBAN</h3>
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
        <h4 class="tp-section-title">{{ $title }}</h4>

    </div>
    <!-- contact area start -->
    <div class="tp-service-standard-area pt-120 pb-90">
        <div class="container">
            <div class="row">

                @foreach ($data_pariban['data'] as $pariban)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
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
                                            href="/pariban/show/{{ $pariban['id'] }}">{{ $pariban['judul'] }}</a>
                                    </h4>
                                </div>
                                <div class="tp-event-link">
                                    <a href="/pariban/show/{{ $pariban['id'] }}">LIHAT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Display pagination links -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                        @foreach ($data_pariban['links'] as $link)
                            <li class="page-item {{ $link['active'] ? 'active' : '' }}">
                                <a class="page-link"
                                    href="/pariban/category/{{ $title }}?current_page={{ $loop->iteration - 1 }}">{!! $link['label'] !!}</a>
                            </li>
                        @endforeach

            </div>
        </div>
    </div>
@endsection
