
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
                            </div> 
                        
                      </div>
                </div>   
                                  
                 </div>
                </div>
                </div>
                </div>
                </div>
            </div>

        <!--modal pilih baragng-->
        <div class="modal fade p-5" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Pilih barang yang ada di layanan Anda.</b>
                      <p class="text-muted">Silahkan centang barang yang ada dan 
                        sesuai untuk lahan anda  </p>
                  </label>
                    </div>
                    <form action="">
                        
                            <div class="mb-3 mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Tuliskan barang yang akan ditambahkan di layanan Anda</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="tas">
                            </div>
                          
                          <button type="button" class="btn btn-success col-md-12 mt-3">Tambahkan</button><br><br>
                        
                          <div class="mb-3">
                           
                            <input type="email" class="form-control border-success" id="exampleFormControlInput1" placeholder="tas">
                        </div>
                        <div class="mb-3">
                           
                            <input type="email" class="form-control border-success" id="exampleFormControlInput1" placeholder="tas">
                        </div>
                        <div class="mb-3">
                          
                            <input type="email" class="form-control border-success" id="exampleFormControlInput1" placeholder="tas">
                        </div><br><br>

                       <a href="/Vendor/Kelola_Barang/layanan_step3"><button type="button" class="btn btn-success col-md-12 mt-3">Lanjutkan</button><br><br></a>
                        
                    </form>
                   
                </div>
            </div>
        </div>
                    
        <!--modal pilih paket-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" >Pilih Jenis Paket</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><b>Pilih barang yang ada di layanan Anda sesuai dengan keinginan Anda.</b>
                        <p class="text-muted">Pilih fasilitas yang ada dan sesuai dengan lahan yang terserdia</p>
                    </label>
  
                      </div>
                <P><b>Jenis paket</b></P>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Rumah
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Kost-Kostan
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Apartement
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Kontrakan
                  </label>
                </div><br>

                
                
                <a href="/Vendor/Kelola_Barang/layanan_step3"><button type="button" class="btn btn-success col-md-12 mt-3">Lanjutkan</button><br><br></a>
              </div>
            </div>
        </div>
    
</section>
@endsection