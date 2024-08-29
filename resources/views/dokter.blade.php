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
                            <img src="{{ asset('images/dr. Ajat.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Ajat Iskandar</b></h4>
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
                            <img src="{{ asset('images/dr. Ayu.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Ayu Junita</b></h4>
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
                            <img src="{{ asset('images/dokter-L.png') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Mochamad Adrian</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Nafsia.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Nafsia Hikma</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dokter-P.png') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Pradnyamita</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dokter-P.png') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Nada Gusneli</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dokter-L.png') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Lukman Hifi</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dr. Fifi.jpg') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Fifi Veronica</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/dokter-P.png') }}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="rounded" alt="">
                            <h4 class="text-center mt-3"><b>Dr. Tria Wijayanti</b></h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Doctors Section -->
@endsection
