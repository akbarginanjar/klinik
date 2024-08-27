<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <a href="https://www.instagram.com/klinikpratamahegar?igsh=MTdsODgwZGdyd3RubA==" target="_blank"><i
                        class="bi bi-instagram d-flex align-items-center ms-4"><span>@klinikpratamahegar</span></i></a>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>082117105560</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                {{-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename"><img src="{{ asset('images/logo-klinik-hegar.png') }}" alt=""> Klinik Hegar
                </h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="{{ Request::is('') ? 'active' : '' }}">Beranda<br></a></li>
                    @if (Request::is('dokter') && Request::is('galeri'))
                        <li><a href="#about">Tentang
                                Kami</a></li>
                    @else
                        <li><a href="/#about">Tentang
                                Kami</a></li>
                    @endif
                    @if (Request::is('dokter') && Request::is('galeri'))
                        <li><a href="#services">Layanan</a></li>
                    @else
                        <li><a href="/#services">Layanan</a></li>
                    @endif
                    @if (Request::is('dokter') && Request::is('galeri'))
                        <li><a href="#departments">Kerja Sama</a></li>
                    @else
                        <li><a href="/#departments">Kerja Sama</a></li>
                    @endif
                    <li><a href="/dokter" class="{{ Request::is('dokter') ? 'active' : '' }}">Dokter</a></li>
                    <li><a href="/galeri" class="{{ Request::is('galeri') ? 'active' : '' }}">Galeri</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}
                    @if (Request::is('dokter') && Request::is('galeri'))
                        <li><a href="#contact">Kontak Kami</a></li>
                    @else
                        <li><a href="/#contact">Kontak Kami</a></li>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            {{-- <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a> --}}

        </div>

    </div>

</header>
