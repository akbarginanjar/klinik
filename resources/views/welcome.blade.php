@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <img src="{{ asset('front/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container position-relative">

            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h2>SELAMAT DATANG DI KLINIK HEGAR</h2>
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
                            {{-- <a href="#about" class="more-btn"><span>Learn More</span> <i
                                    class="bi bi-chevron-right"></i></a> --}}
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
                    {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
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
                    {{-- <ul>
                        <li>
                            <i class="fa-solid fa-vial-circle-check"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-pump-medical"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-heart-circle-xmark"></i>
                            <div>
                                <h5>Voluptatem et qui exercitationem</h5>
                                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam
                                </p>
                            </div>
                        </li>
                    </ul> --}}
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

    <!-- Stats Section -->
    {{-- <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-solid fa-user-doctor"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Doctors</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-regular fa-hospital"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Departments</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fas fa-flask"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Research Labs</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fas fa-award"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section --> --}}

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

    <!-- Appointment Section -->
    {{-- <section id="appointment" class="appointment section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Appointment</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone"
                            placeholder="Your Phone" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                            placeholder="Appointment Date" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="department" id="department" class="form-select" required="">
                            <option value="">Select Department</option>
                            <option value="Department 1">Department 1</option>
                            <option value="Department 2">Department 2</option>
                            <option value="Department 3">Department 3</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="doctor" id="doctor" class="form-select" required="">
                            <option value="">Select Doctor</option>
                            <option value="Doctor 1">Doctor 1</option>
                            <option value="Doctor 2">Doctor 2</option>
                            <option value="Doctor 3">Doctor 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="mt-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    <div class="text-center"><button type="submit">Make an Appointment</button></div>
                </div>
            </form>

        </div>

    </section><!-- /Appointment Section --> --}}

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
                                    <img src="{{ asset('front/assets/img/departments-1.jpg') }}" alt=""
                                        class="img-fluid">
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
                                    <img src="{{ asset('front/assets/img/departments-2.jpg') }}" alt=""
                                        class="img-fluid">
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
                                    <img src="{{ asset('front/assets/img/departments-3.jpg') }}" alt=""
                                        class="img-fluid">
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
                                    <img src="{{ asset('front/assets/img/departments-4.jpg') }}" alt=""
                                        class="img-fluid">
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
                                    <img src="{{ asset('front/assets/img/departments-5.jpg') }}" alt=""
                                        class="img-fluid">
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

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                    <h3>Testimonials</h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('front/assets/img/testimonials/testimonials-1.jpg') }}"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('front/assets/img/testimonials/testimonials-2.jpg') }}"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                            quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                            irure amet legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('front/assets/img/testimonials/testimonials-3.jpg') }}"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                            quis sint minim.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('front/assets/img/testimonials/testimonials-4.jpg') }}"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                            fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                            quem dolore labore illum veniam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('front/assets/img/testimonials/testimonials-5.jpg') }}"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                            noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                            esse veniam culpa fore nisi cillum quid.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Testimonials Section --> --}}



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
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat Lengkap</h3>
                                <p>Jl. Bojong Koneng No.160, Rancamanyar, Kec. Baleendah, Kabupaten Bandung, Jawa Barat
                                    40375</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                    <div class="col-sm">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>No Whatsapp</h3>
                                <p>082117105560</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                    <div class="col-sm">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-instagram flex-shrink-0"></i>
                            <div>
                                <h3>Instagram</h3>
                                <p>@klinikpratamahegar</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                {{-- <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form --> --}}

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
