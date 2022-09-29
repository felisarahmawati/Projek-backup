
@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="p-3">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">barang
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href="Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName2">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Barang
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
        <div class="card mt-3 ">
            <h5 class="card-header bg-success text-white">Detail kelola bangunan</h5>
            <div class="card-body">
                <div class="mb-3" style="max-width: auto;">
                    <div class="row g-0">
                      <div class="col-md-auto">
                        <h5><i class="bi bi-geo-fill p-2" style="font-size: 25px; color:  #ce4c15;"></i><b>Alamat Gudang</b></h5>
                        <div class="card-body">
                            <p class="card-text">Karangjambe, Gg Arjuna No.59, Jaranan,Banguntapan, kec.Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198</p>
                       
                          </div>
                </div>   
                            <h5><i class="bi bi-building p-2" style="font-size: 25px; color:  #ce4c15; "></i><b>Jenis bangunan</b></h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <p>Bangunan</p>
                                    </div>
                                    <div class="col-md-auto">
                                        <p class="text-end">: Kost-Kostan</p>
                                    </div>   
                                </div>
                                
                             </div>          
                

                    </div>
                    <a href="#" class="btn btn-outline-success  col-md-2"  data-bs-toggle="modal" data-bs-target="#Modal">Hapus</a>
                  <a href="#" class="btn btn-outline-success  col-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                </div>
                </div>
            </div>
            
                 
                    <div class="card mt-3">
                    <h5 class="card-header bg-success text-white">Detail kelola bangunan</h5>
                    <div class="card-body">
                        <div class="mb-3" style="max-width: auto;">
                            <div class="row g-0">
                              <div class="col-md-auto">
                                <h5><i class="bi bi-geo-fill p-2" style="font-size: 25px; color: #ce4c15; "></i><b>Alamat Gudang</b></h5>
                                <div class="card-body">
                                    <p class="card-text">Karangjambe, Gg Arjuna No.59, Jaranan,Banguntapan, kec.Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198</p>
                               
                                  </div>
                        </div>   
                                    <h5><i class="bi bi-building p-2" style="font-size: 25px; color: #ce4c15;"></i><b>Jenis Bangunan</b></h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                                <p>Bangunan</p>
                                            </div>
                                            <div class="col-md-auto">
                                                <p class="text-end">: Apartement</p>
                                            </div>   
                                        </div>
                                    </div>
                        </div>          
                        
                            <a href="#" class="btn btn-outline-success  col-md-2"  data-bs-toggle="modal" data-bs-target="#Modal">Hapus</a>
                          <a href="#" class="btn btn-outline-success  col-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                        </div>
                        </div>
                    
                    </div>
                        <a href="/Vendor/Kelola-Bangunan/layanan_step1"><button class="col-sm-12 btn btn-outline-success mt-5">Tambah Layanan</button></a>
                        </div>
                      
                        </div>
                        

                        <!--MODAL HAPUS-->
                        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p><b>Anda yakin ingin menghapus data ini? </b></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                  </div>
                                </div>
                            </div>
                        </div>

                       
                        <!--modal edit-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Form Edit</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h3 style="color:  #999">Edit Alamat</h3>
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-md-12 g-4">
                                        <form action="">
                                                <div class="col-sm-12">
                                                  <label for="inputState" class="form-label">Provinsi</label>
                                                  <select id="inputState" class="form-select" placeholder="DI Yogyakarta">
                                                    <option selected>Pilih provinsi</option>
                                                    <option>DKI Jakarta</option>
                                                    <option>Jawa Barat</option>
                                                    <option>Jawa Tengah</option>
                                                    <option>DI Yogyakarta</option>
                                                    <option>Jawa Timur</option>
                                                    <option>Kalimantan Timur</option>
                          
                                                  </select>
                                                </div>
                          
                                                <div class="col-sm-12">
                                                  <label for="inputState" class="form-label">Kabupaten</label>
                                                  <select id="inputState" class="form-select" placeholder="Bantul">
                                                    <option selected>Pilih Kabupaten</option>
                                                    <option>Bantul</option>
                                                    <option>Sleman</option>
                                                    <option>Kulon Progo</option>
                                                    <option>Gunung Kidul</option>
                                                    <option>Kota Yogyakarta</option>
                          
                                                  </select>
                                                </div>
                                                
                                                <div class="col-sm-12">
                                                  <label for="inputState" class="form-label">Kecamatan</label>
                                                  <select id="inputState" class="form-select" placeholder="Banguntapan">
                                                    <option selected>Pilih Kecamatan</option>
                                                    <option>Baguntapan</option>
                                                    <option>Bambanglipuro</option>
                                                    <option>Bantul</option>
                                                    <option>Dlingo</option>
                                                    <option>Imogiri</option>
                                                    <option>Jetis</option>
                                                    <option>Kasihan</option>
                                                    <option>Kretek</option>
                                                    <option>Pajangan</option>
                                                    <option>Pandak</option>
                                                    <option>Piyungan</option>
                                                    <option>Pundong</option>
                                                    <option>Sanden</option>
                                                    <option>Sedayu</option>
                                                    <option>Sewon</option>
                                                    <option>Srandakan</option>
                                                    
                          
                                                  </select>
                                                </div>
                                              
                                
                                                <div class="mb-3">
                                                  <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                                                  <p><small class="text-muted">Deskripsikan Alamat gudang Anda agar mudah ditemukan(opsional)</small></p>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Karangjambe, Gg Arjuna No.59, Jaranan"></textarea>
                                                </div>
                                                <h3 style="color:  #999">Jenis barang</h3>
                                                
                                                       
                                                    <div class="col-md-8">
                                                       
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                     Rumah
                                                     </label>
                                                     </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                    Apartemen
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
                                                    Kontrakan
                                                        </label>
                                                    </div>
                                             
                                          </form>
                                        </div>
                                        
                                <div>
                               
                                    <a href=" /Vendor/Kelola_Barang/setelah_input"><button type="button" class="btn btn-outline-success col-md-12 mt-3">Save</button></a>
                                    
                                        
                                 </div>
                                
                                </div>
                                </div>
                               
                              </div>
                            </div>
                        </div>
</section>
@endsection