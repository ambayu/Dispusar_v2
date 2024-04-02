@extends('layouts.app', ['tittle' => ' Pariban'])
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
                        <h3 class="breadcrumb__title"> Pariban</h3>
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
    <div class="tp-team-details-area pt-120 pb-120">
        <div class="container">
            <div class="tp-team-details-bg mb-80 p-relative">
                <div class="tp-team-details-bg-shape d-none d-md-block">
                    <img src="/assets/img/team/team-bg-shape.png" alt="">
                </div>
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-5">
                        <div class=" text-center text-md-start p-relative">
                            <img style=" padding:50px; height: 552px; " src="{{ $serverConfig['dispusar'] . '/assets/img/pariban/foto/' . $data_pariban['foto'] }}" alt="">
                            <div class="tp-team-details-thumb-shape d-none d-md-block">
                                <img src="/assets/img/team/team-bg-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-team-details-info-box">
                            <div class="tp-team-details-title-box">
                                <h4 class="tp-team-details-title">{{ $data_pariban['author'] }}</h4>
                                <span>Asal Sekolah dari {{ $data_pariban['sekolah'] }}</span>
                                <p>{{ $data_pariban['deskripsi'] }}</p>
                            </div>
                            <div class="tp-team-details-personal-info-wrap">
                                <div class="tp-team-details-personal-info">
                                    <span><b>Kelas :</b>{{ $data_pariban['kelas'] }}</span>
                                </div>
                                <div class="tp-team-details-personal-info">
                                    <span><b>NIS/NISN :</b>{{ $data_pariban['nis'] }}</span>
                                </div>
                                <div class="tp-team-details-personal-info">
                                    <span><b>Alamat Email:</b><a
                                            href="mailto:{{ $data_pariban['email'] }}">{{ $data_pariban['email'] }}</a></span>
                                </div>



                            </div>
                            <div class="tp-team-details-social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-team-details-text-box mb-60">
                        <h4 class="tp-team-details-title">Karya Siswa</h4>

                        <embed src="{{ $serverConfig['dispusar'] . '/assets/pariban/files/' . $data_pariban['file'] }}"
                        type="application/pdf" width="100%" height="800px" />


                    </div>
                </div>


                <div class="co-xl-12">
                    <div class="tp-team-details-contact-box grey-bg-2">
                        <h4 class="tp-team-details-title pb-20">Kirim Pesan dan Masukan</h4>
                        <form action="#">
                            <div class="tp-contact-2-form">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-contact-2-input p-relative">
                                            <input type="text" placeholder="Nama">
                                            <span><i class="fal fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-contact-2-input p-relative">
                                            <input type="email" placeholder="Email">
                                            <span><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="tp-contact-2-input p-relative">
                                            <textarea placeholder="Tulis Pesan"></textarea>
                                            <span class="icon-1"><i class="fa-light fa-pen"></i></span>
                                        </div>
                                    </div>
                                    <div class="tp-contact-2-btn">
                                        <button class="tp-btn-xl green-anim">Kirim Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
