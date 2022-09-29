@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="card">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">barang
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
    
    
    <div class="p-5 container card" style="width: 70%" >    
            <div class="card ">
            <h5 class="card-header">Pilih jenis pengelolaan barang</h5>
            <div class="card-body">
                <div class="mb-3" style="max-width: auto;">
                        
                        <p><b>Pengelolaan Barang!</b>
                            <p class="text-muted">Masukkan data layanan barang yang akan dikelola</p>
                            </p><br>
                            <h6 class="mt-3"><i class="bi bi-plus-circle-fill" style="font-size: 25px; color:#198754; p-3"></i><b> Pilih Barang</b></h6>
                            <div class="row ">
                                <div class="col-md-10 mb-3">
                                    <p class="">Mengatur jenis barang yang dititipkan</p>
                                </div>
                                <div class="col-md-2">
                                    <i class="bi bi-chevron-right" style="font-size: 25px; color:black; p-2"  data-bs-toggle="modal" data-bs-target="#Modal"></i>
                                </div> 
                                <hr>
                          </div>

                          <h6 class="mb-3"><b><i class="bi bi-plus-circle-fill" style="font-size: 25px; color:#198754; p-3"></i> Pilih Paket Barang</b></h6>
                          <div class="row ">
                            <div class="col-md-10 mb-3">
                                <p class="">Menambah paket barang yang
                                    bisa dititipkan</p>
                            </div>
                            <div class="col-md-2">
                                <i class="bi bi-chevron-right" style="font-size: 25px; color:black; p-2"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                            </div> <br><br><br>
                            
                        <a href=" /Vendor/Kelola_Barang/layanan_step3 "><button class="btn btn-success col-md-12">Selanjutnya</button></a>
                      </div>
                </div>   
                                  
                 </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </section>
        @endsection