@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href="Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName2">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
         <div class="container-fluid" style="width: 50%">

    <div class="row">
        <div class="col" style="">
          

                    <div class="row ">
                        <div class="col-lg-18">
                            <div class="card" style="background-color: #fff;">
                                <div class="card-body">

                                <form action="/signup/index" method="POST" enctype="multipart/form-data" class="mb-5">
                                @csrf
                                    <label for="faq" class="form-label"><i class="bi bi-arrow-left px-2 "></i><b>Kelola Barang</b></label><hr>
                                
                                    <p><b>Tambah layanan lahan parkir</b>
                                    <p>Daftarkan tempat parkir anda dengan mengisi data dibawah ini</p>
                                    </p><br>
                                    <h6><b>Alamat lahan parkir</b></h6>
                                    <div class="row">
                                        <div class="col-lg-8 mb-3">
                                            <p class="">Untuk mengatur lokasi dan detail lahan parkir</p>
                                        </div>
                                        <div class="col-md-4">
                                           <button class="btn btn-success">Mulai</button>
                                        </div>   
                                        <hr>
                                    </div>
                                    <div class="text-muted">
                                        <h6><b>Jenis barang</b></h6>
                                     <div class="row">
                                        <div class="col-md-8  mb-3">
                                            <p class="">Mengatur jenis barang yang dititipkan</p>
                                        </div>
                                        <div class="col-md-4">
                                           <button class="btn btn-secondary">Mulai</button>
                                        </div>   
                                        <hr>
                                     </div>
                                    </div>
                                    <div class="text-muted">
                                     <h6><b>Alamat lahan parkir</b></h6>
                                     <div class="row">
                                        <div class="col-md-8  mb-3">
                                            <p class="">Untuk mengatur lokasi dan detail lahan parkir</p>
                                        </div>
                                        <div class="col-md-4">
                                           <button class="btn btn-secondary">Mulai</button>
                                        </div>   
                                        <hr>
                                     </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
          </div>
        </div>
    </section>
            
        @endsection