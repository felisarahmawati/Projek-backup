@extends('superadmin.Layouts.superadminlayout')
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="details1">
                <div class="recentOrders">
                    <div class="col-lg-8">
                        <table class="table-borderless mt-3">
                            <thead class="text-start">
                                <tr>
                                    <td>Nama Admin</td>
                                    <td>Alamat Admin Kantor</td>
                                    <td>Id Admin</td>
                                    <td>Pelanggaran</td>
                                    <td>Hapus Admin</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Robecca Howard</td>
                                    <td>Yogyakarta</td>
                                    <td>123432</td>
                                    <td>Tidak membuat bukti pembayaran</td>
                                    <td>
                                        <button class="btn btn-success">
                                            Hapus<i class='bx bx-trash'></i>
                                        </button> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <!-- New Customer -->
    
            </div>
        </div>
    </section> 
@endsection