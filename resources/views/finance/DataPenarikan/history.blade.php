@extends('finance.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h4><i class="bi bi-people"></i>History Penarikan</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="details3">
                    <div class="recentOrders3">
                        <table>
                            <div class="recentOrders mb-2"> 
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                      Select All
                                    </label>
                                </div> --}}
                                <!-- Search -->
                                <div class="search" data-aos="fade-left" data-aos-duration="1000">
                                    <label>
                                        <input type="text" placeholder="Cari Disini">
                                        <ion-icon name="search-outline"></ion-icon>
                                    </label>
                                </div>
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>No</td>
                                        <td>ID</td>
                                        <td>Nama Vendor</td>
                                        <td>No Rek</td>
                                        <td>Bank</td>
                                        <td>Jam</td>
                                        <td>Jumlah</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                            </div>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>1</td>
                                        <td>0001</td>
                                        <td>Bastomy</td>
                                        <td>193140911</td>
                                        <td>BCA</td>
                                        <td>21:00</td>
                                        <td>200.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>2</td>
                                        <td>0001</td>
                                        <td>Bastomy</td>
                                        <td>193140911</td>
                                        <td>BCA</td>
                                        <td>21:00</td>
                                        <td>200.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection