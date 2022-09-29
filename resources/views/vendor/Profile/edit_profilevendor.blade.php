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

                    <p style="color:rgb(85, 182, 91)"><i class="bi bi-geo-alt px-1"  style="color:rgb(85, 182, 91)"></i>Pengaturan profil</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/edit_profilevendor"><i class="bi bi-chevron-right"></i></a></p>
                </div>   
            </div>

            <div class="row" style="width: 300px">
                <div class="col-md">

                    <p href=""><i class="bi bi-bell px-1"  style="color:rgb(85, 182, 91)"></i>Notifikasi</p>
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
                    <p><i class='bx bx-log-out nav__icon link_name' style="color:rgb(85, 182, 91)" ></i>Logout</p>
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
              <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Profile</h5>
              <hr width="100%" color="#c0c0c0">
              <form action="">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Vendor</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rebbeca Howard">

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rebeccahow@gmail.com">
    
                        </div>
            
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CV Braxy mandiri">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">
    
                        </div>
              </form>
              
          </div>
        </div>
       
      </div>
    
</div></section>
@endsection