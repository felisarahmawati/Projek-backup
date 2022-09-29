@extends('layouts.main')
@extends('partials.header')
@section('container')
    <section id="about" class="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" width="100%">
                    <img src="../assets/img/about-p.png" class="img-fluid" width="100%" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h3 data-aos="fade-up">{{ $data['title'] }}</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                       {{ $data['desc'] }}</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        {{ $data['desc2'] }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection