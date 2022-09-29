@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center"  id="services" style="padding-top: 100px;" data-aos-delay="50"> 
    <section id="services" class="services section-bg" style="padding-top: 100px;">
        <div class="container mt-9 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card" style="background-color: #fff;">
                        <div class="card-body">
                        <form action="/signup/index" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="faq" class="form-label"><b>FAQ</b></label><hr>
                        <div class="card">
                            <div class="card-body">
                            <a href="/Vendor/Profile/Jawaban1">Apa itu titipsini.com?</a>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <a href="/Vendor/Profile/Jawaban2">Bagaimana mengkonfirmasi ulang KTP? ?</a>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <a href="/Vendor/Profile/Jawaban3">Bagaimana cara menambahkan layanan?</a>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <a href="/Vendor/Profile/Jawaban4">Bagaimana jika KTP dan KK tidak sinkron?</a> 
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                               <p> <a href="/Vendor/Profile/Jawaban5">Mengapa saya tidak bisa membatalkan
                                pesanan yang terlanjur diambil?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                               <p> <a href="/Vendor/Profile/Jawaban6">Mengapa saya tidak mendapatkan
                                notifikasi penarikan?</a></p>
                            </div>
                        </div>
                        <br>
                        <label for="faq" class="form-label">Hubungi Kami</label><br><br>
                            <a href="#" class="btn btn-success"><i class="bi bi-envelope"></i> Send E-mail</a>
                            <a href="#" class="btn btn-success"><i class="bi bi-telephone"></i> Call Us</a>
                            <div class="d-grid gap-2 mt-2">
                                <button class="btn btn-success" type="button"  href="#"><img src="../assets/img/wa.png" width="20px"><b> WhatsApp</b></button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection