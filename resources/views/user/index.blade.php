@extends('layouts.main')
@extends('partials.header')

<!-- ======= Hero Section ======= -->
@section('container')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{ $data['hero1'] }}</h1>

                    <h2>{{ $data['hero2'] }}</h2>

                    <h2>{{ $data['hero3'] }}</h2>
                    <div>
                        <a href="/user/layanan" class="btn-get-started scrollto">Titip Sekarang!</a>
                    </div>

                    <div class="icon" class="back-in-time" style="margin-top: 30px;">
                        <img src="../assets/img/reload.png" width="37" height="37">
                        <span style="font-size: large;"> Melayani 24 Jam</span>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="../assets/img/illust.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="container mt-2 mb-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/coba.jpg') }}" class="d-block img-fluid" alt="..." style="width: 100%; height: 50%;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/coba.jpg') }}" class="d-block img-fluid" alt="..." style="width: 100%; height: 50%;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/coba.jpg') }}" class="d-block img-fluid" alt="..." style="width: 100%; height: 50%;">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="section-title">
                <h2>Layanan</h2>
                <p>Silahkan pilih Layanan yang kamu butuhkan</p>
            </div>

            <div class="row align-items-center" style=" margin-left:70px;">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="img mb-3">
                            <a href="#"><img src="{{ asset('assets/img/icon_kendaraan.png') }}" alt="..."></a>
                        </div>
                        <h4 class="title"><a href="">Kendaraan</a></h4>
                        <b>
                            <p class="description">Layanan yang kami sediakan</p>
                        </b>
                        <p class="description"></p>
                        <p class="description">- Free cuci kendaraan</p>
                        <p class="description">- Kendaraan dibersihkan</p>
                        <p class="description">- Kontrol mesin setiap pagi</p>
                        <p class="description">- Keamanan terjaga</p>
                        <p class="description">- Konsultasi & Support</p>
                    </div>
                    <div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="img mb-3">
                            <a href="#"><img src="{{ asset('assets/img/icon_bangunann.png') }}" alt="..."></a>
                        </div>
                        <h4 class="title"><a href="">Rumah</a></h4>
                        <b>
                            <p class="description">Layanan yang kami sediakan</p>
                        </b>
                        <p class="description"></p>
                        <p class="description">- Rumah bersih</p>
                        <p class="description">- Kontrol rumah setiap pagi</p>
                        <p class="description">- Rumah dibersihkan</p>
                        <p class="description">- Konsultasi & Support</p>
                        <p class="description">- Keamanan terjaga</p>

                        <!-- <a href="#services" class="btn btn-primary" style="margin-top: 10px; background:#00B56A;">Pilih Paket</a> -->
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="img mb-3">
                            <a href="#"><img src="{{ asset('assets/img/icon_barang.png') }}" alt="..."></a>
                        </div>
                        <h4 class="title"><a href="">Barang</a></h4>
                        <b>
                            <p class="description">Layanan yang kami sediakan</p>
                        </b>
                        <p class="description"></p>
                        <p class="description">- Barang terjaga</p>
                        <p class="description">- Kontrol setiap pagi</p>
                        <p class="description">- Barang dibersihkan</p>
                        <p class="description">- Keamanan terjaga</p>
                        <p class="description">- Konsultasi & Support</p>
                        <!-- <a href="#services" class="btn btn-primary" style="margin-top: 10px; background:#00B56A;">Pilih Paket</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- End Hero -->