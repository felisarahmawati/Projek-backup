@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center  services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="">
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="/Vendor/Kelola-kendaraan/kelola_kendaraan" style="text-decoration:none">
                        <div class="cardName2">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>  
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="/Vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
    <div class="p-5 container card " style="width: 70%" >    
        <div class="card mt-3">
            <h5 class="card-header bg-success text-white">Detail kelola Kendaraan</h5>
            <div class="card-body">
                <div class="mb-3" style="max-width: auto;">
                    <div class="row g-0">
                      <div class="col-md-auto">
                        <h5><i class="bi bi-geo-fill p-2" style="font-size: 25px; color: #fd7e14;"></i><b>Alamat lahan parkir</b></h5>
                        <div class="card-body">
                            <p class="card-text">Karangjambe, Gg Arjuna No.59, Jaranan,Banguntapan, kec.Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198</p>
                       
                          </div>
                </div>   
                <h5><svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" fill="currentColor" style="color:#fd7e14" class="bi bi-car-front p-2" viewBox="0 0 16 16">
                    <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                    <path fill-rule="evenodd" d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                  </svg><b>Jenis Kendaraan</b></h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <p>Kendaraan roda 2 </p>
                                    </div>
                                    <div class="col-md-auto">
                                        <p class="text-end">: motor, Delman</p>
                                    </div>   
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Kendaraan roda 3 </p>
                                    </div>
                                    <div class="col-md-auto">
                                        <p class="text-end">: becak</p>
                                    </div>   
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3">
                                        <p>Kendaraan roda 4 </p>
                                    </div>
                                    <div class="col-md-auto">
                                        <p class="text-end">: mobil, Truk</p>
                                    </div>   
                                  </div>
                              </div>
                </div>          
                

                <h5><i class="bi bi-house p-2" style="font-size: 25px; color: #fd7e14;"></i><b>Kapasitas Parkir</b></h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p>Mobil </p>
                        </div>
                        <div class="col-md-auto">
                            <p class="text-end">: 2 buah</p>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Truk </p>
                        </div>
                        <div class="col-md-auto">
                            <p class="text-end">: 1 buah</p>
                        </div>   
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                            <p>Bus</p>
                        </div>
                        <div class="col-md-auto">
                            <p class="text-end">: mobil, Truk</p>
                        </div>   
                      </div>
                  </div>
                    <a href="#" class="btn btn-outline-success  col-md-2"  data-bs-toggle="modal" data-bs-target="#Modal">Hapus</a>
                  <a href="#" class="btn btn-outline-success  col-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                </div>
                </div>
            </div>
            
                 
                    <div class="card mt-5">
                    <h5 class="card-header bg-success text-white">Detail kelola Kendaraan</h5>
                    <div class="card-body">
                        <div class="mb-3" style="max-width: auto;">
                            <div class="row g-0">
                              <div class="col-md-auto">
                                <h5><i class="bi bi-geo-fill p-2" style="font-size: 25px; color: #fd7e14;"></i><b>Alamat lahan parkir</b></h5>
                                <div class="card-body">
                                    <p class="card-text">Karangjambe, Gg Arjuna No.59, Jaranan,Banguntapan, kec.Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198</p>
                               
                                  </div>
                        </div>   
                                    <h5><svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" fill="currentColor" style="color:#fd7e14" class="bi bi-car-front p-2" viewBox="0 0 16 16">
                                        <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                                        <path fill-rule="evenodd" d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                                      </svg><b>Jenis Kendaraan</b></h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                                <p>Kendaraan roda 2 </p>
                                            </div>
                                            <div class="col-md-auto">
                                                <p class="text-end">: motor, Delman</p>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Kendaraan roda 3 </p>
                                            </div>
                                            <div class="col-md-auto">
                                                <p class="text-end">: becak</p>
                                            </div>   
                                          </div>
                                          <div class="row">
                                            <div class="col-md-3">
                                                <p>Kendaraan roda 4 </p>
                                            </div>
                                            <div class="col-md-auto">
                                                <p class="text-end">: mobil, Truk</p>
                                            </div>   
                                          </div>
                                      </div>
                        </div>          
                        
        
                        <h5><i class="bi bi-house p-2" style="font-size: 25px; color: #fd7e14; "></i><b>Kapasitas Parkir</b></h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Mobil </p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="text-end">: 2 buah</p>
                                </div>   
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Truk </p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="text-end">: 1 buah</p>
                                </div>   
                              </div>
                              <div class="row">
                                <div class="col-md-3">
                                    <p>Bus</p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="text-end">: mobil, Truk</p>
                                </div>   
                              </div>
                          </div>
                            <a href="#" class="btn btn-outline-success  col-md-2"  data-bs-toggle="modal" data-bs-target="#Modal">Hapus</a>
                          <a href="#" class="btn btn-outline-success  col-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                        </div>
                        </div>
                        </div>
                       <a href="/Vendor/Kelola-Kendaraan/layanan_step1"><button class="col-sm-12 btn btn-outline-success mt-5">Tambah Layanan</button></a> 
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
                                                  <p><small class="text-muted">Deskripsikan Alamat lahan parkir Anda agar mudah ditemukan(opsional)</small></p>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Karangjambe, Gg Arjuna No.59, Jaranan"></textarea>
                                                </div>
                                                <h3 style="color:  #999">Jenis Kendaraan</h3>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <P><b>Roda 2</b></P>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                          Motor
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                          Sepeda
                                                          </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                          Delman
                                                          </label>
                                                        </div><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <P><b>Roda 3</b></P>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                     Bajaj
                                                     </label>
                                                     </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        Becak
                                                        </label>
                                                    </div>
                                                    </div>   
                                                    <div class="col-md-4">
                                                        <P><b>Roda 4</b></P>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                     Mobil
                                                     </label>
                                                     </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        Truk
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        Bus
                                                        </label>
                                                    </div>
                                                    </div>   
                                                </div><hr>
                                          </form>
                                        </div>
                                        
                                <div>
                                <h3 style="color:  #999">Kapasitas parkir</h3>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Mobil</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2 buah">
                                        </div>
                                          
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Truk</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2 buah">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Motor</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="3 buah">
                                        </div>
                                    </div>
                        
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Bus</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="3 buah">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Becak</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="3 buah">
                                        </div>
                                    </div>
                                   
                        
                                    <button type="button" class="btn btn-outline-success col-md-12 mt-3">Save</button>
                                        
                                 </div>
                                
                                </div>
                                </div>
                               
                              </div>
                        </div>
     
                        </div>               </div>
                
</section>
@endsection