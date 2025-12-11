<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTemplateController extends Controller
{
    public function index()
    {
        $aplikasi = [
            'logo' => url('/') . '/assets/images/logos/logos.png',
            'phone' => '85736477779',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang fokus bergerak di bidang perdagangan/pertokoan yang beralamat di kabupaten madiun',
            'alamat' => 'Jl. Raya Sidomulyo Wonoasri Rt.001 Rw.001 - Madiun (Kab.)',
            'email' => 'cs@tunastamaabadi.com',

            'top_banner_merah' => 'Selamat Datang',
            'top_banner_text' => 'PT. Tunas Tama Abadi'
        ];
        $konten = [
            'hero' => '/assets/images/hero/hero-right.jpg',
            'hero1' => '/assets/images/hero/hero-1.png',
            'hero2' => '/assets/images/hero/hero-2.png',

            'text_red' => 'PT. Tunas Tama Abadi',
            'text_bold' => 'Toko Modern Melayani Seluruh Kebutuhan Anda',
            'padding_text' => 'Kami menyediakan kebutuhan rumah tangga, sembako, alat listrik, dan jasa pembayaran tagihan dengan pelayanan prima',
            'list_1' => 'Kualitas Pelayanan Terbaik',
            'list_2' => 'Produk Terjamin dan Harga Terjangkau',


            'text_red2' => "Kami Menyediakan",
            'text_bold2' => "Kategori Produk dan Layanan",
            'list_layanan' => [
                [
                    'icon' => 'flaticon-merchandising',
                    'nama' => 'Sembako'
                ],
                [
                    'icon' => 'flaticon-clean-clothes',
                    'nama' => 'Kebutuhan Rumah Tangga'
                ],
                [
                    'icon' => 'flaticon-focus',
                    'nama' => 'Alat Listrik'
                ],
                [
                    'icon' => 'flaticon-debit-card',
                    'nama' => 'Pembayaran Tagihan'
                ],
                [
                    'icon' => 'flaticon-network',
                    'nama' => 'Paket Data'
                ],
                [
                    'icon' => 'flaticon-card',
                    'nama' => 'Perbankan/Leasing'
                ],
                [
                    'icon' => 'flaticon-award',
                    'nama' => 'Modal Penyertaan'
                ]
            ],

            'about_1' => '/assets/images/about/about-1.jpg',
            'about_2' => '/assets/images/about/about-2.jpg',
            'about_3' => '/assets/images/about/about-video.jpg',
            'tentang' => 'Tentang Perusahaan',
            'tentang_singkat' => 'PT. Tunas Tama Abadi',
            'tahun' => '2',
            'lanjutan_tahun' => 'Tahun Pengalaman Melayani Kebutuhan Masyarakat',
            'deskripsi_singkat' => 'Perusahaan yang beroperasi di bidang perdagangan/pertokoan dengan fokus utama pada perdagangan kebutuhan rumah tangga, sembako, alat listrik dan segala kebutuhan rumah tangga. Kami juga melayani jasa pembayaran berbagai tagihan, paket data, listrik, PAM dan perbankan/leasing. PT Tunas Tama Abadi bertekad memberikan layanan prima dan berkualitas tinggi dengan produk yang kreatif dan bervariasi.',


            'daftar_service' => 'Daftar Layanan',
            'daftar_service_h1' => 'Pelayanan Terbaik Untuk Kebutuhan Anda',
            'daftar_service_h6' => 'Toko Modern Terpercaya',
            'daftar_service_p' => 'Buktikan Kualitas Layanan Kami',
            'list_service' => [
                [
                    'icon' => 'flaticon-merchandising',
                    'h3' => 'Kebutuhan Rumah Tangga',
                    'p' => 'Menyediakan berbagai kebutuhan rumah tangga dan sembako dengan kualitas terbaik'
                ],
                [
                    'icon' => 'flaticon-focus',
                    'h3' => 'Alat Listrik',
                    'p' => 'Perlengkapan dan peralatan listrik berkualitas untuk kebutuhan Anda'
                ],
                [
                    'icon' => 'flaticon-debit-card',
                    'h3' => 'Pembayaran Tagihan',
                    'p' => 'Layanan pembayaran listrik, PAM, paket data, dan perbankan/leasing'
                ],
                [
                    'icon' => 'flaticon-award',
                    'h3' => 'Modal Penyertaan',
                    'p' => 'Kesempatan kemitraan investasi untuk konsumen aktif kami'
                ]
            ],
            'last_project' => [
                [
                    'id' => 1,
                    'icon' => 'flaticon-merchandising',
                    'image' => '/assets/images/projects/project8.jpg',
                    'title' => 'Sembako Lengkap',
                    'span' => 'Kebutuhan Harian'
                ],
                [
                    'id' => 2,
                    'icon' => 'flaticon-clean-clothes',
                    'image' => '/assets/images/projects/project7.jpg',
                    'title' => 'Perlengkapan Rumah',
                    'span' => 'Peralatan Rumah Tangga'
                ],
                [
                    'id' => 3,
                    'icon' => 'flaticon-focus',
                    'image' => '/assets/images/projects/project5.jpg',
                    'title' => 'Alat Listrik',
                    'span' => 'Elektronik & Listrik'
                ],
                [
                    'id' => 4,
                    'icon' => 'flaticon-debit-card',
                    'image' => '/assets/images/projects/project9.jpg',
                    'title' => 'Layanan Pembayaran',
                    'span' => 'Tagihan & Pulsa'
                ]
            ],
            'videos' => [
                'company_video_1' => '/assets/videos/company-video-01.mp4',
                'company_video_2' => '/assets/videos/company-video-02.mp4'
            ],
        ];


        $data = ['aplikasi' => json_decode(json_encode($aplikasi)), 'konten' => json_decode(json_encode($konten))];
        return view('main.home', $data);
    }
    public function about()
    {
        $aplikasi = [
            'logo' => url('/') . '/assets/images/logos/logos.png',
            'phone' => '85736477779',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang fokus bergerak di bidang perdagangan/pertokoan yang beralamat di kabupaten madiun',
            'alamat' => 'Jl. Raya Sidomulyo Wonoasri Rt.001 Rw.001 - Madiun (Kab.)',
            'email' => 'cs@tunastamaabadi.com',

            'top_banner_merah' => 'Selamat Datang',
            'top_banner_text' => 'PT. Tunas Tama Abadi'
        ];
        $konten = [
            'text_red' => 'PT. Tunas Tama Abadi',
            'text_bold' => 'Toko Modern Melayani Seluruh Kebutuhan Masyarakat',
            'padding_text' => 'Perusahaan yang beroperasi di bidang perdagangan/pertokoan dengan fokus utama pada perdagangan kebutuhan rumah tangga, sembako, alat listrik dan segala kebutuhan rumah tangga. Kami juga melayani jasa pembayaran berbagai tagihan, paket data, listrik, PAM dan perbankan/leasing. PT Tunas Tama Abadi bertekad memberikan layanan prima dan berkualitas tinggi dengan produk yang kreatif dan bervariasi.',
            'visi' => 'Terlengkap, tetap terbaik dan semakin terjangkau',
            'misi' => 'Menciptakan toko berbasis modern yang melayani seluruh kebutuhan masyarakat dengan mengutamakan pelayanan prima, bersahabat dengan harga yang terjangkau',

            'pilih_kami' => 'Kenapa Memilih Kami',
            'kata_pilih_kami' => 'Fitur-Fitur Unggulan Toko Modern Kami',
            'list_pilih_kami' => [
                [
                    'icon'  => 'flaticon-award',
                    'title' => 'Produk Berkualitas',
                    'sllug' => 'Barang yang kami sediakan terjamin kualitasnya melalui pengawasan berkala dengan sistem digitalisasi modern'
                ],
                [
                    'icon'  => 'flaticon-network',
                    'title' => 'Tim Profesional',
                    'sllug' => 'Kami memiliki tim yang mumpuni pada bidangnya'
                ],
                [
                    'icon'  => 'flaticon-air-plane',
                    'title' => 'Free Transport',
                    'sllug' => 'Gratis biaya pengiriman di seluruh wilayah Kabupaten Madiun'
                ],
                [
                    'icon'  => 'flaticon-target',
                    'title' => 'Modal Penyertaan',
                    'sllug' => 'Kesempatan kemitraan modal penyertaan untuk konsumen aktif kami'
                ],
            ],
            'videos' => [
                'company_video_1' => '/assets/videos/company-video-01.mp4',
                'company_video_2' => '/assets/videos/company-video-02.mp4'
            ],

        ];


        $data = ['aplikasi' => json_decode(json_encode($aplikasi)), 'konten' => json_decode(json_encode($konten))];
        return view('main.about', $data);
    }

    public function hasil_proyek()
    {
        $aplikasi = [
            'logo' => url('/') . '/assets/images/logos/logos.png',
            'phone' => '85736477779',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang fokus bergerak di bidang perdagangan/pertokoan yang beralamat di kabupaten madiun',
            'alamat' => 'Jl. Raya Sidomulyo Wonoasri Rt.001 Rw.001 - Madiun (Kab.)',
            'email' => 'cs@tunastamaabadi.com',

            'top_banner_merah' => 'Selamat Datang',
            'top_banner_text' => 'PT. Tunas Tama Abadi'
        ];
        $konten = [
            'last_project' => [
                [
                    'image' => '/assets/images/projects/project1.jpg',
                    'title' => 'Sembako & Kebutuhan Harian',
                    'kategori'  =>
                    [
                        [
                            'kode' => 'sembako',
                            'title' => 'Sembako'
                        ],
                        [
                            'kode' => 'rumah-tangga',
                            'title' => 'Kebutuhan Rumah Tangga'
                        ]
                    ],
                ],
                [
                    'image' => '/assets/images/projects/project2.jpg',
                    'title' => 'Alat Listrik & Elektronik',
                    'kategori'  =>
                    [
                        [
                            'kode' => 'listrik',
                            'title' => 'Alat Listrik'
                        ],
                    ],
                ],
                [
                    'image' => '/assets/images/projects/project3.jpg',
                    'title' => 'Layanan Pembayaran',
                    'kategori'  =>
                    [
                        [
                            'kode' => 'pembayaran',
                            'title' => 'Pembayaran Tagihan'
                        ],
                        [
                            'kode' => 'pulsa',
                            'title' => 'Paket Data & Pulsa'
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
            'phone' => '85736477779',
            'facebook' => '',
            'instagram' => '',
            'twiter' => '',
            'tiktok' => '',

            'deskripsi' => 'Kami adalah perusahaan yang fokus bergerak di bidang perdagangan/pertokoan yang beralamat di kabupaten madiun',
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
