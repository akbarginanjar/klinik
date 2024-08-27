@extends('layouts.app')

@section('content')
    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Dokter</h2>
            <p>Klinik Pratama Hegar</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Feny.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Fenny</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Ajat.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Ajat</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Ayu.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Ayu</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Fifi.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Fifi</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Rena.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Rena</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Maretta.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Maretta</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Nafsia.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Nafsia</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Rahmaniati.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Rahmaniati</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Yudi Garnadi.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Yudi Garnadi</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Yuniarni.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Yuniarni</b></h4>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('images/dr. Feny.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Dr. Fenny</h4>
                            <span>Chief Medical Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('front/assets/img/doctors/doctors-2.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Anesthesiologist</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('front/assets/img/doctors/doctors-3.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cardiology</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('front/assets/img/doctors/doctors-4.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Neurosurgeon</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member --> --}}

            </div>

        </div>

    </section><!-- /Doctors Section -->
@endsection
