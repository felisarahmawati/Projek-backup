@extends('layouts.vendor')

    <!--hero section-->
    @section('container')
    <section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
        <div class="">
            <div class="cardBox1">
                <div class="card1">
                    <div>
                        <a href="/orderan_baru" style="text-decoration:none">
                            <div class="cardName1">Kendaraan
                            </div>
                        </a>
                    </div>
                </div>
        
                <div class="card2">
                    <div>
                        <a href="/orderan_bangunan" style="text-decoration:none">
                            <div class="cardName2">Bangunan
                            </div>
                        </a>
                    </div>
                </div>
        
                <div class="card1">
                    <div>
                        <a href="/orderan_barang" style="text-decoration:none">
                            <div class="cardName1">Barang
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card1">
                    <div>
                        <a href="/orderan_pickup" style="text-decoration:none">
                            <div class="cardName1">Pick Up
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center m-auto">
            <div class="col-md-9">
                <div class="card" style="background-color: #fff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md" style="padding-top: 25px; font-size:20px">
                                <h3><b>Today</b></h3>
                            </div>
                        </div>
                            <div class="card-body justify-content-center" style="margin-top: 10px; width:70%; margin:auto">
                                <div class="card mt-2 shadow rounded-3">
                                    <div class="row align-items-center">
                                    <div class="col text-center">
                                        <img src="../assets/img/icon_bangunann.png" class="img-fluid rounded" alt="..." style="width: 30%; height:30%; padding-top: 15px">
                                        <p style="padding-top: 15px">Bangunan</p>
                                        <p><b>Mori Ucing</b></p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md">
                                                    <p>Rumah</p>
                                                </div>
                                                <div class="col-md-3">
                                                    3
                                                </div>   
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Kosan</p>
                                                </div>
                                                <div class="col-md-3">
                                                    3
                                                </div>   
                                            </div>
                                            
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <a class="btn btn-outline-success" href="/rincian_bangunan" role="button">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="container">
                        <div class="card-body mt-10" style="margin-top: 10px; width:70%; margin:auto">
                            <div class="card shadow rounded-3">
                                <div class="row align-items-center">
                                <div class="col text-center">
                                    <img src="../../assets/img/icon_bangunann.png" class="img-fluid rounded" alt="..." style="width: 30%; height:30%; padding-top: 15px">
                                    <p style="padding-top: 15px">Bangunan</p>
                                    <p><b>Mori Ucing</b></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Rumah</p>
                                            </div>
                                            <div class="col-md-3">
                                                3
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Apartemen</p>
                                            </div>
                                            <div class="col-md-3">
                                                3
                                            </div>   
                                        </div>
                                        
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a class="btn btn-outline-success" href="/rincian_bangunan" role="button">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="card-body justify-content-center" style="margin-top: 10px; width:70%; margin:auto">
                            <div class="card mb-4 shadow rounded-3">
                                <div class="row align-items-center">
                                <div class="col text-center">
                                    <img src="../../assets/img/icon_bangunann.png" class="img-fluid rounded" alt="..." style="width: 30%; height:30%; padding-top: 15px">
                                    <p style="padding-top: 15px">Bangunan</p>
                                    <p><b>Mori Ucing</b></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Rumah</p>
                                            </div>
                                            <div class="col-md-3">
                                                3
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Apartemen</p>
                                            </div>
                                            <div class="col-md-3">
                                                3
                                            </div>   
                                        </div>
                                        
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a class="btn btn-outline-success" href="/rincian_bangunan" role="button">Detail</a>
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