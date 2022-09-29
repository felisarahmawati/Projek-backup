@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center  services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="card" style="background-color: #fff;">
                            <div class="card-body rounded-3">
                                <div class="row">
                                    <div class="col-md">
                                        <label for="faq" class="form-label" style="font-size: 20px"><b>Status Vendor</b></label>
                                        <p class="text-secondary" style="margin-left:10px; font-size:15px;"><i class="bi bi-geo-fill p-1"></i>Umbulharjo, Yogyakarta</p>
                                    </div>
                                    <div class="form-check form-switch col-md-2">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked style="margin-left: 1px"><br>
                                        <label class="form-check-label text-right" for="flexSwitchCheckChecked">
                                            <b>Buka</b>
                                        </label>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="card-body rounded" style="background: #F2F2F2E3">
                                        <div class="row">
                                            <div class="col-md">
                                                <p class="mb-1"><b>Earnings</b></p>
                                                <b><p>Rp 10.000.000</p></b>
                                            </div>
                                            <div class="col-md-1 text-success">
                                                <a href="/earning">
                                                <h3><i class="bi bi-arrow-right"></i></h3>
                                                </a>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md" style="padding-top: 25px">
                                            <b><p>Pesanan Baru</p></b>
                                        </div>  
                                        <div class="col-md-2" style="padding-top: 25px; padding-left: 55px">
                                            <a href="/orderan_baru"><p class="text-dark">See All</p></a>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="card-body mt-10" style="margin-top: 10px; width:80%; margin:auto">
                                            <div class="card shadow rounded-3">
                                                <div class="row align-items-center">
                                                    <div class="col text-center">
                                                        <img src="../assets/img/icon_barang.png" class="img-fluid rounded" alt="..." style="width: 40%; height:40%; padding-top: 15px">
                                                        <p style="padding-top: 15px">Kendaraan</p>
                                                        <p><b>Mori Ucing</b></p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Mobil</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    3
                                                                </div>   
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <p>Motor</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    3
                                                                </div>   
                                                            </div>
                                                            <span class="border bg-warning text-center rounded-3">Pick Up</span>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <a class="btn btn-success" href="/rincian_baru" role="button">Terima</a>
                                                                <button class="btn btn-outline-secondary" type="button">Tolak</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body mt-10" style="margin-top: 10px; width:80%; margin:auto">
                                            <div class="card shadow rounded-3">
                                                <div class="row align-items-center">
                                                    <div class="col text-center">
                                                        <img src="../assets/img/icon_barang.png" class="img-fluid rounded" alt="..." style="width: 40%; height:40%; padding-top: 15px">
                                                        <p style="padding-top: 15px">Kendaraan</p>
                                                        <p><b>Mori Ucing</b></p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Mobil</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    3
                                                                </div>   
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <p>Motor</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    3
                                                                </div>   
                                                            </div>
                                                            <span class="border bg-warning text-center rounded-3">Pick Up</span>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <a class="btn btn-success" href="/rincian_baru" role="button">Terima</a>
                                                                <button class="btn btn-outline-secondary" type="button">Tolak</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body mt-10" style="margin-top: 10px; width:80%; margin:auto">
                                            <div class="card shadow rounded-3">
                                                <div class="row align-items-center">
                                                    <div class="col text-center">
                                                        <img src="../assets/img/icon_barang.png" class="img-fluid rounded" alt="..." style="width: 40%; height:40%; padding-top: 15px">
                                                        <p style="padding-top: 15px">Kendaraan</p>
                                                        <p><b>Mori Ucing</b></p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Mobil</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    3
                                                                </div>   
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <p>Motor</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    3
                                                                </div>   
                                                            </div>
                                                            <span class="border bg-warning text-center rounded-3">Pick Up</span>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <a class="btn btn-success" href="/rincian_baru" role="button">Terima</a>
                                                                <button class="btn btn-outline-secondary" type="button">Tolak</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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