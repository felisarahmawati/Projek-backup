@extends('layouts.vendor')

    <!--hero section-->
    @section('container')
    <section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
        <div class="">
            <div class="cardBox1">
                <div class="card2">
                    <div>
                        <a href="/orderan_baru" style="text-decoration:none">
                            <div class="cardName2">Kendaraan
                            </div>
                        </a>
                    </div>
                </div>
        
                <div class="card1">
                    <div>
                        <a href="/orderan_bangunan" style="text-decoration:none">
                            <div class="cardName1">Bangunan
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
                                <h3><b>History</b></h3>
                            </div>
                        </div>
                        <hr width="100%" color="#c0c0c0">
                    

                        <div class="row">
                            <div class="col-2" style="padding-top: 25px; font-size:20px">
                                <p style="background: #D3FBE2; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: center; line-height: 23px; color: black; font-size: 18px"><b>Today</b></p>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-2" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_kendaraan"><img src="../assets/img/icon_kendaraan.png" alt="kendaraan" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                    <a href="/orderan_baru"><p class="text-muted">24 Jan 2021, 11.00 PM</p></a>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #D3FBE2; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #00B56A; font-size: 15px; width:100px">
                                                    <b>Selesai</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 83%"><b>Mori Ucing</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-bottom: 0px">
                                                    <a href="/orderan_baru"><p class="text-muted" style="padding-top: 0px">3 Items</p></a>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p style="padding-top: 0px">Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-3" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_kendaraan"><img src="../assets/img/icon_kendaraan.png" alt="kendaraan" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                    <p class="text-muted">24 Jan 2021, 11.00 PM</p>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #ef5656; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #ffffff; font-size: 15px; width:100px">
                                                    <b>Gagal</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body " style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 78%"><b>Anastasya Jay</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-top: 0px">
                                                    <a href="/orderan_baru"><p class="text-muted">3 Items</p></a>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p>Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2" style="padding-top: 25px; font-size:20px">
                                <p style="background: #D3FBE2; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: center; line-height: 23px; color: black; font-size: 18px"><b>23 Jan Wed</b></p>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-2" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_bangunan"><img src="../assets/img/icon_bangunann.png" alt="kendaraan" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                    <p class="text-muted">25 Jan 2021, 12.00 PM</p>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #D3FBE2; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #00B56A; font-size: 15px; width:100px">
                                                    <b>Selesai</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 83%"><b>Mori Ucing</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-bottom: 0px">
                                                    <a href="/orderan_baru"><p class="text-muted" style="padding-top: 0px">3 Items</p></a>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p style="padding-top: 0px">Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-3" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_bangunan"><img src="../assets/img/icon_bangunann.png" alt="kendaraan" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                   <p class="text-muted">25 Jan 2021, 13.00 PM</p>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #ef5656; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #ffffff; font-size: 15px; width:100px">
                                                    <b>Gagal</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body " style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 78%"><b>Anastasya Jay</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-top: 0px">
                                                    <a href="/orderan_baru"><p class="text-muted">3 Items</p></a>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p>Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2" style="padding-top: 25px; font-size:20px">
                                <p style="background: #D3FBE2; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: center; line-height: 23px; color: black; font-size: 18px"><b>23 Jan Wed</b></p>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-2" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_barang"><img src="../assets/img/icon_barang.png" alt="barang" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                    <p class="text-muted">23 Jan 2021, 12.00 PM</p>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #D3FBE2; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #00B56A; font-size: 15px; width:100px">
                                                    <b>Selesai</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 75%"><b>Tatang Sutatang</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-bottom: 0px">
                                                    <p class="text-muted" style="padding-top: 0px">3 Items</p>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p style="padding-top: 0px">Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-3" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_barang"><img src="../assets/img/icon_barang.png" alt="kendaraan" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                    <p class="text-muted">23 Jan 2021, 12.00 PM</p>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #ef5656; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #ffffff; font-size: 15px; width:100px">
                                                    <b>Gagal</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body " style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 83%"><b>Anastasya</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-top: 0px">
                                                   <p class="text-muted">3 Items</p>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p>Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2" style="padding-top: 25px; font-size:20px">
                                <p style="background: #D3FBE2; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: center; line-height: 23px; color: black; font-size: 18px"><b>23 Jan Wed</b></p>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-2" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_pickup"><img src="../assets/img/icon_pickup.png" alt="kendaraan" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                    <p class="text-muted">24 Jan 2021, 11.00 PM</p>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #D3FBE2; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #00B56A; font-size: 15px; width:100px">
                                                    <b>Selesai</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 78%"><b>Alvi Nurbaetri</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-bottom: 0px">
                                                    <a href="/orderan_baru"><p class="text-muted" style="padding-top: 0px">3 Items</p></a>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p style="padding-top: 0px">Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="card mb-3" style="width: 65%">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="/rincian_pickup"><img src="../assets/img/icon_pickup.png" alt="kendaraan" style="width:65px; height: 65px;"></a>
                                                </div>  
                                                <div class="col-md-5" style="padding-top: 18px; padding-left: 50px">
                                                    <p class="text-muted">24 Jan 2021, 11.00 PM</p>
                                                </div>
                                                <div class="col-md-5" style="padding-top: 5px; padding-left: 100px">
                                                    <p style="background: #ef5656; padding: 15px; border-radius: 15px; margin: 0; 
                                                    text-align: center; color: #ffffff; font-size: 15px; width:100px">
                                                    <b>Gagal</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body " style="padding-top: 0px; padding-bottom: 0px;">
                                            <p style="padding-right: 78%"><b>Leon Immanuel</b></p>
                                            <div class="row">
                                                <div class="col-md-3" style="padding-right: 70px; padding-top: 0px">
                                                    <a href="/orderan_baru"><p class="text-muted">3 Items</p></a>
                                                </div>
                                                <div class="col-8 text-end" style="padding-top: 0px padding-left: 100px;">
                                                    <p>Total</p>
                                                    <p class="text-success" style="padding-top: 0px; padding-bottom: 0px;"><b>Rp 500.000</b></p>
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