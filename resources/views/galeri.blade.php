@extends('layouts.app')

@section('content')
    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri1.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri1.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri2.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri2.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri3.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri3.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri4.PNG') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri4.PNG') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri5.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri5.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri6.png') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri6.png') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri7.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri7.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front/assets/img/gallery/galeri8.png') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('front/assets/img/gallery/galeri8.png') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

            </div>

        </div>

    </section><!-- /Gallery Section -->
@endsection
