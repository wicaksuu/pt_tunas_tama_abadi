<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Kami Adalah Perusahaan Cetak Berkualitas Tinggi Yang Beroprasi Di Kabupaten Madiun.">
    <meta name="keywords" content="printing desain grafis grafiti">
    <meta name="author" content="Wicaksu">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="PT. Tunas Tama Abadi">
    <meta property="og:description"
        content="Kami Adalah Perusahaan Cetak Berkualitas Tinggi Yang Beroprasi Di Kabupaten Madiun.">
<meta property="og:image" content="{{ url('/') }}/assets/mokeup.png">
    <meta property="og:url" content="https://tunastamaabadi.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

<link rel=icon href="{{ url('/') }}/assets/images/favicons.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">

        {{--
        <!-- preloader area start --> --}}
        <div class="preloader" id="preloader"></div>
        <!-- preloader area end -->
        <div class="body-overlay" id="body-overlay"></div>


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>
        <!-- navbar start -->
        <div class="navbar-top style-one text-white bgs-cover"
            style="background-image: url(assets/images/background/header-top-bg.jpg);">
            <div class="container container-1570">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="topbar-left text-lg-start text-center">
                            <span class="off">{{ $aplikasi->top_banner_merah }}</span>
                            <span>{{ $aplikasi->top_banner_text }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="topbar-right justify-content-center justify-content-lg-end">
                            <li><i class="fal fa-phone"></i> <b>Telp :<a target="_blank"
                                        href="https://wa.me/62{{ $aplikasi->phone }}"> +62{{
                                        $aplikasi->phone }}</a></b></li>
                            <li class="social-style-one">
                                <a target="_blank" href="{{ $aplikasi->facebook }}"><i class="fab fa-facebook-f"
                                        aria-hidden="true"></i></a>
                                <a target="_blank" href="{{ $aplikasi->twiter }}"><i class="fab fa-twitter"
                                        aria-hidden="true"></i></a>
                                <a target="_blank" href="{{ $aplikasi->tiktok }}"><i class="fab fa-tiktok"
                                        aria-hidden="true"></i></a>
                                <a target="_blank" href="{{ $aplikasi->instagram }}"><i class="fab fa-instagram"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar style-one navbar-area navbar-expand-lg py-20">
            <div class="container container-1570">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#Iitechie_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="{{ route('landing-page') }}"><img src="{{ $aplikasi->logo }}" alt="Logo Perusahaan"></a>
                </div>
                <div class="collapse navbar-collapse" id="Iitechie_main_menu">
                    <ul class="navbar-nav menu-open text-lg-end">

                        <li>
                            <a href="{{ route('landing-page') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('hasil-proyek') }}">Hasil Project</a></li>
                        <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- navbar end -->

        <main>
            @yield('content')
        </main>

        <!-- footer area start -->
        <footer class="footer-area pt-80">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="widget widget_about wow fadeInUp delay-0-2s">
                            <div class="footer-logo mb-25">
                                <a href="{{ url('/') }}"><img src="{{ $aplikasi->logo }}" alt="Logo"></a>
                            </div>
                            <p>{{ $aplikasi->deskripsi }}</p>
                            <div class="social-style-two mt-15">
                                <a target="_blank" href="{{ $aplikasi->facebook }}"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="{{ $aplikasi->twiter }}"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="{{ $aplikasi->tiktok }}"><i class="fab fa-tiktok"></i></a>
                                <a target="_blank" href="{{ $aplikasi->instagram }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="widget widget_nav_menu wow fadeInUp delay-0-4s">
                            <h4 class="widget-title">Daftar Link</h4>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('hasil-proyek') }}">Hasil Project</a></li>
                                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="widget widget_contact_info wow fadeInUp delay-0-6s">
                            <h4 class="widget-title">Support</h4>
                            <p>Butuh Bantuan Untuk Pekerjaan Anda ?</p>
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i> {{ $aplikasi->alamat }}</li>
                                <li><i class="far fa-envelope"></i> <a href="mailto:{{ $aplikasi->email }}">{{
                                        $aplikasi->email }}</a></li>
                                <li><i class="far fa-phone"></i> <a target="_blank"
                                        href="https://wa.me/62{{ $aplikasi->phone }}"> +62{{
                                        $aplikasi->phone }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom mt-15 pt-25 pb-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text text-center text-lg-start">
                                <p><a href="{{ route('landing-page') }}">PT. Tunas Tama Abadi</a> © Copyright 2023, Al
                                    Right
                                    Reserved</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="payment-method-image mb-15 text-center text-lg-end">
                                <a href="#"><img src="assets/images/footer/payment-method.png" alt="Payment Method"></a>
                            </div>
                        </div>
                    </div>

                    <!-- back to top area start -->
                    <div class="back-to-top">
                        <span class="back-top"><i class="fa fa-angle-up"></i></span>
                    </div>
                    <!-- back to top area end -->
                </div>
            </div>
        </footer>
        <!-- footer area end -->


    </div>
    <!--End pagewrapper-->

    <!-- all plugins here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/skill.bars.jquery.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

</html>