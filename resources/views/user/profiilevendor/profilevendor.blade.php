@extends('layouts.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
            
            <div class="container mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ asset('assets/img/ninja.png') }}" style="width: 150px; padding-top: 15px">
                            </div>
                            <div class="col-4">
                                <p style="font-size: 17px"><b>Wijaya - titipsini</b><br>
                                    <i class="bi bi-geo-alt-fill" style="color: #F24E1E"></i>Kec.BangunTapan
                                </p>
                                <a class="btn btn-success btn-sm mb-2" href="#" role="button">Chat vendor</a>
                                <a class="btn btn-success btn-sm mb-2" role="button" data-bs-toggle="modal" data-bs-target="#infoToko">Tentang toko</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="infoToko" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-white bg-success">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b>Tentang Toko</b></h5>
                                                    <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6><b>Deskripsi Toko</b></h6>
                                                    <p>Wijaya - titipsini menyediakan layanan penitipan kendaraan  
                                                        kecil hingga kendaraan besar, dengan kapasitas lahan 250m x 
                                                        250m. Mampu menampung kendaraan hingga 20 kendaraan kecil 
                                                        dan besar. Wijaya - titipsini juga menyediakan layanan konsul untuk
                                                        semua jenis kendaraan
                                                    </p>
                                                    <h6><b>Bergabung</b></h6>
                                                    <p>Agustus 2020</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-2">
                                <p style="font-size: 50px">|</p>
                            </div>
                            <div class="col-4">
                                <h6 style="padding-top: 20px">Nilai kualitas layanan</h6>
                                <div class="rate text-warning">
                                    <p style="font-size: 20px"><b>4,5</b>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i> (270)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Some representative placeholder content for the first slide.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Second slide label</h5>
                                  <p>Some representative placeholder content for the second slide.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Third slide label</h5>
                                  <p>Some representative placeholder content for the third slide.</p>
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <p class="subkat mt-4" style="font-size: 20px"><b>Menyediakan Layanan</b></p>
                        <div class="row mb-3">
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 15rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 15rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 15rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 15rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
    </section>
@endsection