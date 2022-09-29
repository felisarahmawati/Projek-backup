@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center"  id="services" style="padding-top: 100px;" data-aos-delay="50"> 
<div class="container mt-4 mb-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="width: 400px">
          
            <div
                       class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                       <div class="person-img px-xl-5"><br>
                           <img src="{{ asset('../../assets/img/team-4.jpg') }}" class="img-fluid rounded-circle" alt="">
                       </div>
                       <div class="person-name">
                           <h2 class="text-center fs-4 my-2">CV. Braxy Panda</h2>
                       </div>
                       <hr width="100%" color="#c0c0c0"> 
            <div class="card-body ">
          
            <div class="row" style="width: 300px">
                <div class="col-md">

                    <p><i class="bi bi-geo-alt px-1"  style="color:rgb(85, 182, 91)"></i>Pengaturan profil</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/edit_profilevendor"><i class="bi bi-chevron-right"></i></a></p>
                </div>   
            </div>

            <div class="row" style="width: 300px">
                <div class="col-md">

                    <p href="" style="color:rgb(85, 182, 91)"><i class="bi bi-bell px-1"  style="color:rgb(85, 182, 91)"></i>Notifikasi</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/Notifikasi"><i class="bi bi-chevron-right"></i></a></p>
                </div>   
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Kebijakan Privasi</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/Kebijakan_privasi"><i class="bi bi-chevron-right"></i></a></p>
                </div>   
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Ketentuan Layanan</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/Ketentuan_layanan"><i class="bi bi-chevron-right"></i></a></p>
                </div>    
            </div>
          
            <div class="row " data-bs-toggle="modal" data-bs-target="#ModalLogout">
                <div class="col-md">
                    <p><i class='bx bx-log-out nav__icon link_name'  style="color:rgb(85, 182, 91)"></i>Logout</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end "><i class="bi bi-chevron-right"></i></p>
                </div>    
            </div>

            </div>
          </div>
        </div>
        <div class="col" style="width: 700px">
         <div class="card">
            <div class="card-body">

              <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Notifikasi</h5>
              <hr width="100%" color="#c0c0c0">
            <div class=" mb-3" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-1">
                    <img src="{{ asset('../../assets/img/notif.png') }}" class="img-fluid rounded-start" style="width:30px"alt="...">
                  </div>
                    <div class="col-md ">
                        <p><b>Update Penting</b></p>
                        <p class="card-text pl-8 mt-1"><small class="text-muted">Berisi update perihal pesanan, penitipan, transaksi, <br>dan info akun. Jadi harus diaktifin. </small></p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-1">
                  <img src="{{ asset('../../assets/img/mail.png') }}" class="img-fluid rounded-start" style="width:30px" alt="...">
                </div>
                  <div class="col-md ">
                      <p><b>Email</b></p>
                      <p class="card-text pl-8 mt-1"><small class="text-muted">Berisi update perihal perubahan akun, <br>password, dan perubahan data pengguna.  </small></p>
                  </div>
                  
                <div class="col-md-2">
                     <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                    </label>
                </div>
        
            </div>
            <div class="row g-0">
                <div class="cardHeader1" style="margin-top: 30px;">
                <div class="col-md-1">
                    <img src="{{ asset('../../assets/img/pesan.png') }}" class="img-fluid rounded-start" style="width:30px" alt="...">
                </div>
                <div class="col-md">
                         <p><b>Pesan</b></p>
                    <p class="card-text mt-1"><small class="text-muted">Berisi update perihal perubahan akun, <br>password, dan perubahan data pengguna. </small></p>
                </div>
                <div class="col-md-2">
                    
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
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