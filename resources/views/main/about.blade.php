@extends('layouts.aplikasi')
@section('content')
<!-- Page Banner Start -->
<div class="hero-area pt-100 pb-75 rel z-1">
    <section class="page-banner bgs-cover text-white pt-65 pb-75"
        style="background-image: url(assets/images/banner.jpg);">
        <div class="container">
            <div class="banner-inner">
                <h2 class="page-title wow fadeInUp delay-0-2s">Tentang Kami</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{route('landing-page')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tentang Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
</div>
<!-- Page Banner End -->


<!-- About Area start -->
<div class="about-page-area py-130 rpt-120 rel z-1">
    <div class="container">
        <div class="row large-gap justify-content-between">
            <div class="col-lg-6">
                <div class="about-page-content rmb-65 wow fadeInUp delay-0-2s">
                    <div class="section-title mb-20">
                        <span class="sub-title mb-15">{{ $konten->text_red }}</span>
                        <h2>{{ $konten->text_bold }}</h2>
                    </div>
                    <p>{{ $konten->padding_text }}</p>
                    <div class="about-btns pt-5">
                        <a href="{{ route('kontak') }}" class="theme-btn mt-20">Kontak Kami <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mission-vision-part">
                    <div class="mission-vision-item wow fadeInUp delay-0-4s">
                        <div class="progress-content one">
                            <i class="flaticon-target"></i>
                        </div>
                        <div class="content">
                            <h4>Visi Kami</h4>
                            <p>{{ $konten->visi }}</p>
                        </div>
                    </div>
                    <div class="mission-vision-item wow fadeInUp delay-0-6s">
                        <div class="progress-content two">
                            <i class="flaticon-mission"></i>
                        </div>
                        <div class="content">
                            <h4>Misi Kami</h4>
                            <p>{{ $konten->misi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area end -->

<!-- Why Choose Area start -->
<div class="why-choose-three pt-120 pb-100 rel z-1 bgc-black text-white">
    <div class="container">
        <div class="services-inner ">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title mb-15">{{ $konten->pilih_kami }}</span>
                        <h2>{{ $konten->kata_pilih_kami }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ( $konten->list_pilih_kami as $i=>$kon)
                <div class="col-xl-3 col-md-6">

                    <div class="service-item style-three wow fadeInUp delay-0-{{ $i+3 }}s">
                        <div class="icon">
                            <i class="{{ $kon->icon }}"></i>
                        </div>
                        <h5>{{ $kon->title }}</h5>
                        <p>{{ $kon->sllug }}</p>
                        <div class="bg-image"
                            style="background-image: url(assets/images/services/service-bg-three.jpg);"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="circle-shapes">
        <div class="shape-inner">
            <span class="dot-one"></span>
            <span class="dot-two"></span>
            <span class="dot-three"></span>
            <span class="dot-four"></span>
            <span class="dot-five"></span>
        </div>
    </div>
</div>
<!-- Why Choose Area end -->

<!-- CTA Area start -->
<section class="cta-area bgc-gradient">
    <div class="row">
        <div class="col-xl-4">
            <div class="cta-left-image rel z-1 wow fadeInLeft delay-0-4s">
                <img src="assets/images/cta/cta-left.png" alt="CTA Left">
                <div class="circle-shapes white-shape no-animation">
                    <div class="shape-inner">
                        <span class="dot-one"></span>
                        <span class="dot-two"></span>
                        <span class="dot-three"></span>
                        <span class="dot-four"></span>
                        <span class="dot-five"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 align-self-center">
            <div class="cta-content text-white py-55 wow fadeInUp delay-0-2s">
                <div class="section-title mb-35">
                    <span class="sub-title mb-10">Segera Hubungi Kami</span>
                    <h2>Ada Pertanyaan Dengan Percetakan Anda?</h2>
                </div>
                <a target="_blank" href="https://wa.me/62{{ $aplikasi->phone }}" class="theme-btn">Tanyakan Sekarang
                    <i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="cta-right-image rel z-1 wow fadeInRight delay-0-2s">
                <img src="assets/images/cta/cta-right.png" alt="CTA Right">
                <div class="circle-shapes white-shape no-animation">
                    <div class="shape-inner">
                        <span class="dot-one"></span>
                        <span class="dot-two"></span>
                        <span class="dot-three"></span>
                        <span class="dot-four"></span>
                        <span class="dot-five"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection