<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Klinik Hegar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('images/logo-klinik-hegar.png') }}" rel="icon">
    <link href="{{ asset('images/logo-klinik-hegar.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(128, 0, 0, 0.8);
            /* Navy dengan transparansi */
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .bottom-bar .text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .bottom-bar .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .bottom-bar .buttons a {
            background-color: white;
            color: #800000;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }

        .bottom-bar .buttons a:hover {
            background-color: #f1f1f1;
        }

        .bottom-bar .buttons a i {
            font-size: 18px;
        }
    </style>
</head>

<body class="index-page">

    @include('layouts.partials.navbar')

    <main class="main">
        @yield('content')
        <div class="bottom-bar">
            <div class="text">Chat & Konsultasi Dokter disini!</div>
            <div class="buttons">
                <a href="tel:+082117105560">
                    <i class="fas fa-phone-alt"></i>
                    Klik Telepon
                </a>
                <a href="https://wa.me/6282117105560?text=Halo admin, saya ingin berkonsultasi" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Klik WhatsApp
                </a>
            </div>
        </div>
    </main>

    @include('layouts.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>

</html>
