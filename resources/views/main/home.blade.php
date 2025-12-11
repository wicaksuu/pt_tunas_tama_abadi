@extends('layouts.aplikasi')
@section('content')
<!-- hero Area start -->
<div class="hero-area pt-145 pb-75 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">{{ $konten->text_red }}</span>
                    <h1>{{ $konten->text_bold }}</h1>
                    <p>{{ $konten->padding_text }}</p>
                    <ul class="list-style-one pt-10 wow fadeInUp delay-0-3s">
                        <li>{{ $konten->list_1 }}</li>
                        <li>{{ $konten->list_2 }}</li>
                    </ul>
                    <div class="hero-btns pt-25 wow fadeInUp delay-0-4s">
                        <a target="_blank" href="https://wa.me/62{{ $aplikasi->phone }}" class="theme-btn">Order <i
                                class="far fa-long-arrow-right"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-images wow fadeInLeft delay-0-2s">
                    <img class="w-100" src="{{ $konten->hero }}" alt="Hero Image">
                    <img class="image-one wow fadeInRight delay-0-6s" src="{{ $konten->hero1 }}" alt="Hero Image">
                    <img class="image-two wow fadeInDown delay-0-8s" src="{{ $konten->hero2 }}" alt="Hero Image">
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
            </div>
        </div>
    </div>
</div>
<!-- hero Area end -->


<!-- What We Profide start -->
<section class="what-we-provide bgc-lighter pt-75 pb-80"
    style="background-image: url(assets/images/background/what-we-provide.png);">
    <div class="container">
        <div class="section-title text-center mb-20 wow fadeInUp delay-0-2s">
            <span class="sub-title mb-10">{{ $konten->text_red2 }}</span>
            <h2>{{ $konten->text_bold2 }}</h2>
        </div>
        <div class="what-we-provide-active">
            @foreach ( $konten->list_layanan as $index => $hit)
            <div class="what-we-provide-item wow fadeInUp delay-0-{{ $index + 2 }}s">
                <i class="{{ $hit->icon }}"></i>
                <h6>{{ $hit->nama }}</h6>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- What We Profide end -->


<!-- About Area start -->
<div class="about-area py-130 rel z-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="about-images rmb-65">
                    <div class="row align-items-end justify-content-center">
                        <div class="col-6">
                            <div class="image wow fadeInLeft delay-0-4s">
                                <img src="{{ $konten->about_1 }}" alt="About">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="image wow fadeInDown delay-0-2s">
                                <img src="{{ $konten->about_2 }}" alt="About">
                            </div>
                        </div>
                        <div class="col-sm-9 col-11">
                            <div class="about-video wow fadeInRight delay-0-6s">
                                <video class="w-100" controls style="border-radius: 8px;">
                                    <source src="{{ $konten->videos['company_video_1'] }}" type="video/mp4">
                                    <img src="{{ $konten->about_3 }}" alt="About">
                                </video>
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
            </div>
            <div class="col-lg-6">
                <div class="about-content wow fadeInUp delay-0-2s">
                    <div class="section-title mb-20">
                        <span class="sub-title mb-15">{{ $konten->tentang }}</span>
                        <h2>{{ $konten->tentang_singkat }}</h2>
                    </div>
                    <div class="experience-year mb-20">
                        <h6>Kami Memiliki Lebih Dari</h6>
                        <span class="number">{{ $konten->tahun }}</span>
                        <h6>{{ $konten->lanjutan_tahun }}</h6>
                    </div>
                    <p>{{$konten->deskripsi_singkat}}</p>
                    <div class="about-btns pt-5">
                        <a href="{{ route('about') }}" class="theme-btn mt-20">Tentang Kami <i
                                class="far fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area end -->


<!-- Services Area start -->
<div class="services-area rel z-1">
    <div class="container-fluid">
        <div class="services-inner text-white bgc-black">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-7">
                    <div class="service-content rel p-100 py-130 rpb-100 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title mb-15">{{ $konten->daftar_service }}</span>
                            <h2>{{ $konten->daftar_service_h1 }}</h2>
                        </div>
                        <h6>{{ $konten->daftar_service_h6 }}</h6>
                        <p>{{ $konten->daftar_service_p }}</p>
                        <a target="_blank" href="https://wa.me/62{{ $aplikasi->phone }}"
                            class="theme-btn hover-two mt-20">Order <i class="far fa-long-arrow-right"></i></a>
                        <div class="circle-shapes no-animation">
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
                <div class="col-xl-8">
                    <div class="row no-gap">
                        @foreach ( $konten->list_service as $list_service)
                        <div class="col-md-6">
                            <div class="service-item wow fadeInDown delay-0-4s">
                                <div class="icon">
                                    <i class="{{ $list_service->icon }}"></i>
                                </div>
                                <h3>{{ $list_service->h3 }}</h3>
                                <p>{{ $list_service->p }}</p>
                                <div class="bg-image"
                                    style="background-image: url(assets/images/services/service-bg.jpg);">
                                </div>
                            </div>
                        </div>@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area end -->


<!-- Latest Project start -->
<section class="latest-project-area pt-90 pb-130">
    <div class="container">
        <div class="row justify-content-between align-items-center pb-45">
            <div class="col-lg-6">
                <div class="section-title mb-15 wow fadeInLeft delay-0-2s">
                    <span class="sub-title mb-10">Projek Terakhir</span>
                    <h2>Lihat dan Bandingkan Daftar Project Terakhir Kami!</h2>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a target="_blank" href="https://wa.me/62{{ $aplikasi->phone }}"
                    class="theme-btn mt-15 wow fadeInRight delay-0-2s">Order
                    <i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4">
                <div class="tab-btns-one rmb-75 nav flex-column nav-pills wow fadeInRight delay-0-2s">
                    @foreach($konten->last_project as $index => $button)
                    @php
                    $activeClass = $index === 0 ? 'active' : '';
                    @endphp

                    <button class="nav-link {{ $activeClass }}" data-bs-toggle="pill"
                        data-bs-target="#project-tab-{{ $button->id }}">
                        <i class="{{ $button->icon }}"></i>
                        <span class="title">{{ $button->title }}</span>
                    </button>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7">
                <div class="project-tab-content rel wow fadeInLeft delay-0-2s">
                    <div class="tab-content">
                        @foreach($konten->last_project as $index => $button)
                        @php
                        $activeClass = $index === 0 ? 'active' : '';
                        @endphp
                        <div class="tab-pane fade show {{ $activeClass }}" id="project-tab-{{ $button->id }}">
                            <div class="project-active">
                                <div class="project-item">
                                    <img src="{{ $button->image }}" alt="Project">
                                    <div class="content">
                                        <div class="text">
                                            <h4><a href="project-details.html">{{ $button->title }}</a></h4>
                                            <span>{{ $button->span }}</span>
                                        </div>
                                        <a class="plus" href="project-details.html">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

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
            </div>
        </div>
    </div>
</section>
<!-- Latest Project end -->


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