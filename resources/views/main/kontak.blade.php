@extends('layouts.aplikasi')
@section('content')
<!-- Page Banner Start -->
<div class="hero-area pt-100 rel z-1">
    <section class="page-banner bgs-cover text-white pt-65 pb-75"
        style="background-image: url(assets/images/banner.jpg);">
        <div class="container">
            <div class="banner-inner">
                <h2 class="page-title wow fadeInUp delay-0-2s">Kontak Kami</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{route('landing-page')}}">Home</a></li>
                        <li class="breadcrumb-item active">Kontak Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
</div>
<!-- Page Banner End -->
<!-- Contact Feature Area start -->
<section class="contact-feature pt-130 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-item-two style-two wow fadeInUp delay-0-2s">
                    <div class="icon">
                        <i class="flaticon-technical-support"></i>
                    </div>
                    <div class="content">
                        <h4>{{ $konten->suport_h4 }}</h4>
                        <p>{{ $konten->suport_p }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-item-two style-two wow fadeInUp delay-0-2s">
                    <div class="icon">
                        <i class="flaticon-chat"></i>
                    </div>
                    <div class="content">
                        <h4>{{ $konten->service_h4 }}</h4>
                        <p>{{ $konten->service_p }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Feature Area end -->
<!-- Contact Info Area start -->
<section class="contact-info-area mb-130">
    <div class="container">
        <div class="row no-gap">
            <div class="col-lg-6">
                <div class="contact-info-content wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-25">
                        <span class="sub-title mb-15">Kontak Kami</span>
                        <h2>{{ $konten->deskripsi_h2 }}</h2>
                    </div>
                    <p>{{ $konten->deskripsi_p }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-wrap wow fadeInRight delay-0-2s">
                    <div class="contact-info-item">
                        <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                        <div class="content">
                            <h4>Lokasi</h4>
                            <a target="_blank" href="https://goo.gl/maps/TJaRagNpjc6et3eFA">
                                <p>{{ $aplikasi->alamat }}</p>
                            </a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><i class="far fa-envelope-open"></i></div>
                        <div class="content">
                            <h4>Email Us</h4>
                            <a href="mailto:{{ $aplikasi->email }}">{{ $aplikasi->email }}</a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><i class="far fa-phone"></i></div>
                        <div class="content">
                            <h4>Phone No</h4>
                            <a href="callto:+62{{ $aplikasi->phone }}">+62{{ $aplikasi->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Info Area end -->
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
                <a target="_blank" href="https://wa.me/62{{ $aplikasi->phone }}" class="theme-btn">Tanyakan Sekarang <i
                        class="far fa-long-arrow-right"></i></a>
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
<!-- CTA Area end -->
@endsection