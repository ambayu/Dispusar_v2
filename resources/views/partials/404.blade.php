@extends('layouts.app', ['tittle' => ' Error'])
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
                        <h3 class="breadcrumb__title"> ERROR</h3>
                        <div class="breadcrumb__list">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                            <span>ERROR</span>
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
    <div class="tp-errror-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-errror-wrap text-center">
                        <h4 class="text-top">Ooopps...</h4>
                        <img src="assets/img/404/error.png" alt="">
                        <h4 class="text-bottom">Sorry We Can't Find That Page! </h4>
                        <a class="tp-btn-xl green-anim" href="/">Back TO Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
