@extends('finance.adminlayout')
@section('content')
    <section class="home-section">

        <div class="main">
            {{-- <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <!-- Search -->
                <div class="search" data-aos="fade-left" data-aos-duration="1000">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div> --}}
            <div class="card">
                <div class="col-md-15">
                    <div class="alert text-left bg-success">
            
                    </div>
                </div>
            </div>
            {{-- Card User Profile --}}
            <div class="row g-3" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
            data-aos-duration="1000">
            <div class="col-lg-4 col-md-6 mt-4 pe-2">
                <div
                    class="card-profile d-flex justify-content-center align-items-center py-2 rounded-lg flex-column">
                    <div class="person-img px-xl-5">
                        <img src="../img/aa.png" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="person-name">
                        <h2 class="text-center fs-4 my-2"></h2>
                    </div>
                    <div class="person-email">
                        <h3 class="text-center fs-5 fw-normal mb-3"></h3>
                    </div>
                    <div class="bt">
                        <button class="btn btn-outline-thema"> Edit </button>
                    </div>
                    <hr width="100%" color="#c0c0c0">
                </div>
            </div>

            <div class="cardBox" style="justify-content: center" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="cardName">Total Views</div>
                        <div class="numbers">345.000</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <ion-icon name="chatbubbles"></ion-icon>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="cardName">Total Views</div>
                        <div class="numbers">345.000</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <ion-icon name="chatbubbles"></ion-icon>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="cardName">Total Views</div>
                        <div class="numbers">345.000</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <ion-icon name="chatbubbles"></ion-icon>
                    </div>
                </div>
            </div>
    
            <div class="container-fluid">
                <div class="details3">
                    <div class="recentOrders3">
                        <div class="cardHeader">
                            <div class="cardHeader">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Kode Transaksi</td>
                                            <td>Tanggal</td>
                                            <td>Pemasukan</td>
                                            <td>Pengeluaran</td>
                                            <td>Saldo</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TAQWA-0002</td>
                                            <td>Penitipan Motor</td>
                                            <td>01-11-2013</td>
                                            <td>Rp250.875</td>
                                            <td></td>
                                            <td>Rp250.875</td>
                                            <td class="td" style="size: 30px;">
                                            <button class="btndetail"><a href="/finance/transaksi/detailtransaksiuser">
                                                Detail</a>
                                            </button>
                                            </td>
                                        </tr>
                                    </tbody>        
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>
@endsection
