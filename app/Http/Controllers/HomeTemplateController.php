<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTemplateController extends Controller
{
    public function index()
    {
        $aplikasi = [
            'logo' => url('/') . '/assets/images/logos/logos.png',
            'phone' => '822444566708',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang bergerak pada bidang percetakan yang beralamat di kabupaten madiun',
            'alamat' => 'Jl. Raya Sidomulyo Wonoasri Rt.001 Rw.001 - Madiun (Kab.)',
            'email' => 'cs@tunastamaabadi.com',

            'top_banner_merah' => 'Selamat Datang',
            'top_banner_text' => 'PT. Tunas Tama Abadi'
        ];
        $konten = [
            'hero' => 'https://demo.webtend.net/html/printco/assets/images/hero/hero-right.jpg',
            'hero1' => 'https://demo.webtend.net/html/printco/assets/images/hero/hero-1.png',
            'hero2' => 'https://demo.webtend.net/html/printco/assets/images/hero/hero-2.png',

            'text_red' => 'PT. Tunas Tama Abadi',
            'text_bold' => 'Kami Adalah Perusahaan Cetak Berkualitas Tinggi',
            'padding_text' => 'disisi lain kami mengedepankan keramahan dalam pelayanan',
            'list_1' => 'Kualitas Pelayanan',
            'list_2' => 'Kualitas Hasil Cetak dan Pengiriman',


            'text_red2' => "Kami Menyediakan",
            'text_bold2' => "Kategori Dalam Percetakan",
            'list_layanan' => [
                [
                    'icon' => 'flaticon-t-shirt',
                    'nama' => 'T-Shart Print'
                ],
                [
                    'icon' => 'flaticon-logo',
                    'nama' => 'Logo Design'
                ],
                [
                    'icon' => 'flaticon-banner',
                    'nama' => 'Banner Print'
                ],
                [
                    'icon' => 'flaticon-reading-book',
                    'nama' => 'Books Print'
                ],
                [
                    'icon' => 'flaticon-debit-card',
                    'nama' => 'Card Print'
                ],
                [
                    'icon' => 'flaticon-award',
                    'nama' => 'Trophy Print'
                ],
                [
                    'icon' => 'flaticon-banner',
                    'nama' => 'Banner Print'
                ]
            ],

            'about_1' => 'https://demo.webtend.net/html/printco/assets/images/about/about-1.jpg',
            'about_2' => 'https://demo.webtend.net/html/printco/assets/images/about/about-2.jpg',
            'about_3' => 'https://demo.webtend.net/html/printco/assets/images/about/about-video.jpg',
            'tentang' => 'Tentang Perusahaan',
            'tentang_singkat' => 'PT. Tunas Tama Abadi',
            'tahun' => '2',
            'lanjutan_tahun' => 'Tahun Pengalaman Pada Bidang Percetakan Digital',
            'deskripsi_singkat' => 'perusahaan yang beroperasi di bidang percetakan dengan fokus utama pada produksi beragam produk cetakan, seperti kaos, buku, banner, dan lain-lain. Sebagai perusahaan percetakan, PT Tunas Tama Abadi bertekad memberikan layanan berkualitas tinggi dalam mencetak produk yang kreatif dan bervariasi.',


            'daftar_service' => 'Daftar Layanan',
            'daftar_service_h1' => 'Pelayanan Terbaik Untuk Percetakan',
            'daftar_service_h6' => 'Percetakan Tersertifikasi',
            'daftar_service_p' => 'Buktikan Kualitas Layanan Kami',
            'list_service' => [
                [
                    'icon' => 'flaticon-print',
                    'h3' => 'Paper Printing',
                    'p' => 'Percetakan kertas terbaik untuk semua dokumen anda, buktikan layanan kami'
                ],
                [
                    'icon' => 'flaticon-3d-printer',
                    'h3' => '3D Printing',
                    'p' => 'Percetakan 3 dimensi terbaik untuk semua dokumen anda, buktikan layanan kami'
                ],
                [
                    'icon' => 'flaticon-print-1',
                    'h3' => 'Banner Printing',
                    'p' => 'Percetakan banner terbaik untuk semua dokumen anda, buktikan layanan kami'
                ],
                [
                    'icon' => 'flaticon-focus',
                    'h3' => 'Desain dan Branding',
                    'p' => 'Jasa desain dan branding terbaik untuk semua dokumen anda, buktikan layanan kami'
                ]
            ],
            'last_project' => [
                [
                    'id' => 1,
                    'icon' => 'flaticon-tshirt',
                    'image' => 'https://demo.webtend.net/html/printco/assets/images/projects/project8.jpg',
                    'title' => 'Cetak Baju',
                    'span' => 'Desain dan Cetak'
                ],
                [
                    'id' => 2,
                    'icon' => 'flaticon-credit-cards',
                    'image' => 'https://demo.webtend.net/html/printco/assets/images/projects/project7.jpg',
                    'title' => 'Kartu Bisnis',
                    'span' => 'Desain dan Cetak'
                ],
                [
                    'id' => 3,
                    'icon' => 'flaticon-tea-cup',
                    'image' => 'https://demo.webtend.net/html/printco/assets/images/projects/project5.jpg',
                    'title' => 'Mug Printing',
                    'span' => 'Desain dan Cetak'
                ],
                [
                    'id' => 4,
                    'icon' => 'flaticon-book',
                    'image' => 'https://demo.webtend.net/html/printco/assets/images/projects/project9.jpg',
                    'title' => 'Cetak Buku',
                    'span' => 'Desain dan Cetak'
                ]
            ],
        ];


        $data = ['aplikasi' => json_decode(json_encode($aplikasi)), 'konten' => json_decode(json_encode($konten))];
        return view('main.home', $data);
    }
    public function about()
    {
        $aplikasi = [
            'logo' => url('/') . '/assets/images/logos/logos.png',
            'phone' => '822444566708',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang bergerak pada bidang percetakan yang beralamat di kabupaten madiun',
            'alamat' => 'Jl. Raya Sidomulyo Wonoasri Rt.001 Rw.001 - Madiun (Kab.)',
            'email' => 'cs@tunastamaabadi.com',

            'top_banner_merah' => 'Selamat Datang',
            'top_banner_text' => 'PT. Tunas Tama Abadi'
        ];
        $konten = [
            'text_red' => 'PT. Tunas Tama Abadi',
            'text_bold' => 'Kami Adalah Perusahaan Cetak Berkualitas Tinggi',
            'padding_text' => 'perusahaan yang beroperasi di bidang percetakan dengan fokus utama pada produksi beragam produk cetakan, seperti kaos, buku, banner, dan lain-lain. Sebagai perusahaan percetakan, PT Tunas Tama Abadi bertekad memberikan layanan berkualitas tinggi dalam mencetak produk yang kreatif dan bervariasi.',
            'visi' => 'Denounce with righteous indign and dislike men beguiled',
            'misi' => 'Denounce with righteous indign and dislike men beguiled',

            'pilih_kami' => 'Kenapa Memilih Kami',
            'kata_pilih_kami' => 'Fitur-Fitur Unggulan Untuk Desain dan Layanan Percetakan',
            'list_pilih_kami' => [
                [
                    'icon'  => 'flaticon-network',
                    'title' => 'Tim Profesional',
                    'sllug' => 'kami memiliki tim yang mumpuni pada bisang nya'
                ],
                [
                    'icon'  => 'flaticon-air-plane',
                    'title' => 'Free Transport',
                    'sllug' => 'Gratis biaya pengiriman, di seluruh wilayah Kabupaten Madiun'
                ],
                [
                    'icon'  => 'flaticon-award',
                    'title' => 'Kualitas Layanan',
                    'sllug' => 'Kami mengedepankan layanan terbaik untuk anda'
                ],
                [
                    'icon'  => 'flaticon-technical-support',
                    'title' => 'Suport 24 jam',
                    'sllug' => 'Tim kami siap melayani anda 24 jam selama 7 hari non stop'
                ],
            ],

        ];


        $data = ['aplikasi' => json_decode(json_encode($aplikasi)), 'konten' => json_decode(json_encode($konten))];
        return view('main.about', $data);
    }

    public function hasil_proyek()
    {
        $aplikasi = [
            'logo' => url('/') . '/assets/images/logos/logos.png',
            'phone' => '822444566708',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang bergerak pada bidang percetakan yang beralamat di kabupaten madiun',
            'alamat' => 'Jl. Raya Sidomulyo Wonoasri Rt.001 Rw.001 - Madiun (Kab.)',
            'email' => 'cs@tunastamaabadi.com',

            'top_banner_merah' => 'Selamat Datang',
            'top_banner_text' => 'PT. Tunas Tama Abadi'
        ];
        $konten = [
            'last_project' => [
                [
                    'image' => 'https://demo.webtend.net/html/printco/assets/images/projects/project1.jpg',
                    'title' => 'Kartu Bisnis',
                    'kategori'  =>
                    [
                        [
                            'kode' => 'logoo',
                            'title' => 'Desain Logo'
                        ],
                        [
                            'kode' => 'branding',
                            'title' => 'Branding'
                        ]
                    ],
                ],
                [
                    'image' => 'https://demo.webtend.net/html/printco/assets/images/projects/project2.jpg',
                    'title' => 'Cetak Baju',
                    'kategori'  =>
                    [
                        [
                            'kode' => 'tshirt',
                            'title' => 'Cetak Baju'
                        ],
                    ],
                ],
                [
                    'image' => 'https://demo.webtend.net/html/printco/assets/images/projects/project3.jpg',
                    'title' => 'Kartu Bisnis',
                    'kategori'  =>
                    [
                        [
                            'kode' => 'logoo',
                            'title' => 'Desain Logo'
                        ],
                        [
                            'kode' => 'branding',
                            'title' => 'Branding'
                        ],
                    ],
                ],
            ],

        ];


        $data = ['aplikasi' => json_decode(json_encode($aplikasi)), 'konten' => json_decode(json_encode($konten))];
        return view('main.hasil_proyek', $data);
    }
    public function kontak()
    {
        $aplikasi = [
            'logo' => url('/') . '/assets/images/logos/logos.png',
            'phone' => '822444566708',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang bergerak pada bidang percetakan yang beralamat di kabupaten madiun',
            'alamat' => 'Jl. Raya Sidomulyo Wonoasri Rt.001 Rw.001 - Madiun (Kab.)',
            'email' => 'cs@tunastamaabadi.com',

            'top_banner_merah' => 'Selamat Datang',
            'top_banner_text' => 'PT. Tunas Tama Abadi'
        ];
        $konten = [
            'suport_h4' => 'Butuh Bantuan Kami',
            'suport_p' => 'Segera hubungi kami pada kontak yang tertera di bawah ini.',
            'service_h4' => 'Kritik dan Saran',
            'service_p' => 'Kritik dan Saran anda sangat berarti bagi kami.',
            'deskripsi_h2' => 'Kami Siap Membantu! Jangan Ragu Untuk Menghubungi Kami',
            'deskripsi_p' => 'Tim kami siap membantu semua permasalahan anda',
        ];


        $data = ['aplikasi' => json_decode(json_encode($aplikasi)), 'konten' => json_decode(json_encode($konten))];
        return view('main.kontak', $data);
    }
}
