@extends('finance.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h4><i class="bi bi-people"></i>Vendor Penarikan</h4>
            </div>
            
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="rincian d-inline mb-2">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success fw-bold px-2 shadow float-end"><a href="/finance/DataPenarikan/konfirmasi">Konfirmasi</a></button>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Nama user</td>
                                        <td>ID</td>
                                        <td>Total</td>
                                        <td>Jam</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Samantha william</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Delivered</span></td>
                                        
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
                                        <td>Kevin Andreson</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Done</span></td>
                                        
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
</section>
@endsection