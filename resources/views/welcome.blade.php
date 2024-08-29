@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <img src="{{ asset('images/header.jpg') }}" alt="" data-aos="fade-in">

        <div class="container position-relative p-5" style="background: rgba(0, 0, 0, 0.45); border-radius: 20px;">

            <div class="welcome position-relative text-white" data-aos="fade-down" data-aos-delay="100">
                <h2 class="text-white">SELAMAT DATANG DI KLINIK HEGAR</h2>
                <p>Klinik Pratama Hegar merupakan fasilitas kesehatan tingkat
                    pertama (FKTP) swasta dengan fasilitas layanan rawat jalan</p>
            </div><!-- End Welcome -->

            <div class="content row gy-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                        <h3>Kenapa Klinik Hegar?</h3>
                        <p>
                            Memberikan layanan yang
                            cepat, aman, nyaman
                            dengan biaya terjangkau
                            Mengutamakan
                            keselamatan pasien dan
                            kepuasan pasien
                        </p>
                        <div class="text-center">
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Profesional</h4>
                                    <p>Mengerjakan segala pekerjaan sesuai dengan
                                        kewenangan dan kompetensinya
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="bi bi-gem"></i>
                                    <h4>Responsif</h4>
                                    <p>Membentuk sifat yang dapat memberikan kesan
                                        baik untuk pasien dan/atau keluarga pasien
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Optimis</h4>
                                    <p>Berprasangka baik dalam menghadapi segala hal
                                        untuk mendapatkan hasil yang maksimal</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>
                </div>
            </div><!-- End  Content-->

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4 gx-5">

                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/tentang-kami.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    {{-- <h3>Tentang Kami</h3> --}}
                    <p>
                        <br>
                        Klinik Pratama Hegar merupakan fasilitas kesehatan tingkat
                        pertama (FKTP) swasta dengan fasilitas layanan rawat jalan yang
                        berlokasi di Jl. Bojong Koneng No. 160 Desa Rancamanyar
                        Kecamatan Baleendah, Kabupaten Bandung. <br><br>
                        Dengan semangat Rise and Shine, Klinik Pratama Hegar
                        mewujudkan layanan kesehatan dan manajemen pelayanan yang
                        dekat dengan masyarakat. Hal tersebut dilandasi dengan fakta
                        saat ini, bahwa Klinik Pratama Hegar menjadi satu-satunya Klinik
                        Swasta diwilayah Rancamanyar yang menerima kepesertaan BPJS
                        Kesehatan dan telah terakreditasi oleh Kementrian Kesehatan
                        dengan hasil Paripurna. <br><br>
                        Maka dengan pencapaian tersebut, kami berkomitmen dan
                        memiliki tujuan memberikan layanan kesehatan dengan aman,
                        nyaman, dan tejangkau sehingga peningkatan mutu layanan dan
                        nilai tambah bagi masyarakat dalam bidang kesehatan dapat
                        diterima sepenuhnya.
                        <br><br>
                        Regards.
                        dr. Ajat Iskandar, M.M.RS
                    </p>
                </div>

            </div>
            <br><br>
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                    <h4><b>Visi</b></h4>
                    <ul>
                        <li>Menjadikan Klinik Pratama
                            Hegar sebagai Klinik dengan
                            pelayanan Profesional,
                            Humanis dan Terbaik di
                            wilayah Rancamanyar</li>
                    </ul><br>
                    <h4><b>Misi</b></h4>
                    <ul>
                        <li>Memberikan layanan yang
                            cepat, aman, nyaman
                            dengan biaya terjangkau</li>
                        <li>Mengutamakan
                            keselamatan pasien dan
                            kepuasan pasien</li>
                        <li>Melaksanakan pekerjaan
                            dengan tim yang
                            profesional, inovatif, dan
                            berdedikasi tinggi</li>
                        <li>Mendukung program
                            pemerintah dalam
                            peningkatan kesehatan
                            masyarakat</li>
                    </ul>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Kami</h2>
            <p>Klinik Pratama Hegar</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>TINDAKAN MINOR DAN <br>
                                NEBULIZER</h3>
                        </a>
                        <p></p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>PEMERIKSAAN UMUM</h3>
                        </a>
                        <p></p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>PEMERIKSAAN BPJS</h3>
                        </a>
                        <p></p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>USG 2D/4D DAN UMUM</h3>
                        </a>
                        <p></p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-wheelchair"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>PEMERIKSAAN
                                LABORATORIUM</h3>
                        </a>
                        <p></p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>PUSAT KHITAN</h3>
                        </a>
                        <p></p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->


    <!-- Departments Section -->
    <section id="departments" class="departments section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Produk
                Kerja Sama</h2>
            <p>Klinik Pratama Hegar</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Program Hegar
                                Jalan-Jalan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Program Hegar
                                Berjejaring</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Program Hegar
                                Berwirausaha</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Program Hegar Masuk
                                Kantor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Program Kartu Berobat</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="departments-tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Program Hegar Jalan-Jalan</h3>
                                    <p>Suatu program yang diinisasi oleh tim Promosi
                                        Kesehatan untuk layanan Promotif dan Preventif,
                                        dan Kuratif diluar Klinik. Kegiaran tersebut
                                        dilaksanakan sesuai dengan jadwal yang tersedia
                                        setiap bulannya meliputi pemeriksaan kesehatan
                                        secara gratis. Sasarannya adalah; Posyandu, Dewan
                                        Kemakmuran Masjid (DKM), Sekolah, Komplek dan
                                        Perumahan</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('images/jalanjalan.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Program Hegar
                                        Berjejaring</h3>
                                    <p>Suatu program kerjasama dengan Bidan Praktek
                                        Mandiri untuk layanan Kesehatan Ibu dan Anak.
                                        Sesuai dengan anjuran pemerintah untuk
                                        menurunkan resiko kematian ibu dan anak,
                                        kolaborasi tersebut menjadi suatu langkah yang
                                        dilakukan dalam penerapan ANC Terpadu oleh
                                        bidan dan ANC USG oleh dokter umum di Klinik
                                        Hegar.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('images/berjejaring.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Program Hegar Berwirausaha</h3>
                                    <p>Suatu program kolaborasi dengan UMKM
                                        menggunakan media sosial sebagai perantara
                                        promosi melalui giveaway yang diadakan oleh Klinik
                                        Hegar. Selain promosi, program lainnya adalah
                                        cashback fee setiap bulan secara kumulatif untuk
                                        rujukan berobat yang berasal dari UMKM tersebut
                                        dengan kartu identitas yang dibuat secara khusus.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('images/berwirausaha.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Program Hegar Masuk Kantor</h3>
                                    <p>...</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('images/kantor.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Program Kartu Berobat</h3>
                                    <p>...</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('images/berobat.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Departments Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Pertanyaan dari masyarakat</h2>
            <p>Klinik Pratama Hegar</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>Apakah klinik ini menyediakan layanan tes darah lengkap?</h3>
                            <div class="faq-content">
                                <p>Ya, kami menyediakan layanan tes darah lengkap. Hasil tes akan tersedia dalam 1-2 hari
                                    kerja.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana cara mendaftar untuk konsultasi di klinik ini?</h3>
                            <div class="faq-content">
                                <p>Ada dua cara untuk mendaftar: Anda bisa mendaftar langsung di klinik dengan membawa kartu
                                    identitas, atau Anda bisa mendaftar secara online melalui website kami. Pendaftaran
                                    online memungkinkan Anda memilih jadwal yang tersedia dan langsung mendapatkan
                                    konfirmasi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Jika saya punya resep dari dokter lain, apakah saya bisa menebusnya di klinik ini?</h3>
                            <div class="faq-content">
                                <p>Tentu saja, Anda bisa menebus resep dari dokter lain di apotek kami. Harap bawa resep
                                    asli dan kartu identitas untuk verifikasi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Apakah klinik menyediakan layanan vaksinasi untuk dewasa?</h3>
                            <div class="faq-content">
                                <p>Ya, kami menyediakan berbagai jenis vaksinasi untuk dewasa, termasuk vaksin flu,
                                    hepatitis, dan COVID-19. Anda bisa datang langsung atau membuat janji temu untuk layanan
                                    vaksinasi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Berapa lama waktu yang dibutuhkan untuk mendapatkan hasil tes lab?</h3>
                            <div class="faq-content">
                                <p>Untuk tes lab standar, hasil biasanya keluar dalam 1-2 hari kerja. Untuk tes yang lebih
                                    kompleks, waktu tunggu bisa lebih lama, tetapi kami akan memberi tahu Anda estimasi
                                    waktunya saat pengambilan sampel.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->


                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->



    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak Kami</h2>
            <p>Klinik Pratama Hegar</p>
        </div><!-- End Section Title -->

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.128906694068!2d107.5962703!3d-6.994095499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e941b8b82c3d%3A0x90aa678e653cc1d8!2sKlinik%20Hegar!5e0!3m2!1sid!2sid!4v1724693428109!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="d-flex justify-content-center">

                <div class="row">
                    <div class="col-sm-6">
                        <a href="https://maps.app.goo.gl/gZkp8NRfMewwWbXb6" target="_blank">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Alamat Lengkap</h3>
                                    <p>Jl. Bojong Koneng No.160, Rancamanyar, Kec. Baleendah, Kabupaten Bandung, Jawa Barat
                                        40375</p>
                                </div>
                            </div><!-- End Info Item -->
                        </a>
                    </div>

                    <div class="col-sm">
                        <a href="https://wa.me/6282117105560?text=Halo admin, saya ingin berkonsultasi" target="_blank">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>No Whatsapp</h3>
                                    <p>082117105560</p>
                                </div>
                            </div><!-- End Info Item -->
                        </a>
                    </div>

                    <div class="col-sm">
                        <a href="https://www.instagram.com/klinikpratamahegar" target="_blank">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-instagram flex-shrink-0"></i>
                                <div>
                                    <h3>Instagram</h3>
                                    <p>@klinikpratamahegar</p>
                                </div>
                            </div><!-- End Info Item -->
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
