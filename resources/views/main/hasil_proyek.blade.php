@extends('layouts.aplikasi')
@section('content')
<!-- Page Banner Start -->
<div class="hero-area pt-100 rel z-1">
    <section class="page-banner bgs-cover text-white pt-65 pb-75"
        style="background-image: url(assets/images/banner.jpg);">
        <div class="container">
            <div class="banner-inner">
                <h2 class="page-title wow fadeInUp delay-0-2s">Project</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{route('landing-page')}}">Home</a></li>
                        <li class="breadcrumb-item active">Project</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
</div>
<!-- Page Banner End -->


<!-- Project Area start -->
<section class="project-page-area rel z-1 pt-120 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="section-title text-center mb-40 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-10">Our Latest Project</span>
                    <h2>Daftar Project yang telah Kami Selesaikan!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @php
        $dump= array();
        foreach ($konten->last_project as $values) {
        foreach ($values->kategori as $value) {
        $dump[$value->kode]=$value->title;
        }
        }
        @endphp
        <ul class="project-filter mb-50 wow fadeInUp delay-0-4s">
            <li data-filter="*" class="current">Show All</li>
            @foreach ( $dump as $kode=>$title)
            <li data-filter=".{{ $kode }}">{{ $title }}</li>
            @endforeach
        </ul>
        <div class="row project-two-active">
            @foreach ( $konten->last_project as $konteks)
            @php
            $kategoriString = '';
            $titleString = '';
            foreach ($konteks->kategori as $kategori) {
            $kategoriString .= $kategori->kode . ' ';
            $titleString .= $kategori->title . ', ';
            }
            $kategoriString = rtrim($kategoriString);
            $titleString = rtrim($titleString,', ');
            @endphp
            <div class="col-xl-3 col-lg-4 col-sm-6 item {{ $kategoriString }}">
                <div class="project-item-two">
                    <img src="{{ $konteks->image }}" alt="Project">
                    <div class="project-content">
                        <div class="left-part">
                            <h5><a href="project-details.html">{{ $konteks->title }}</a></h5>
                            <span>{{ $titleString }}</span>
                        </div>
                        <a target="_blank" href="https://wa.me/62{{ $aplikasi->phone }}" class="plus"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Project Area end -->
@endsection