@extends('superadmin.Layouts.superadminlayout')

@section('content')
<section class="home-section">

<body>
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class="bx bx-menu"></i>
            </div>
        </div>

        <div class="details3">
            <div class="recentOrders3">
                <div class="cardHeader">
                    <h4>Data Admin</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal7" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end"><b>Tambah +</b></a>
                </div>
                <br>

                <!-- Alert -->
                @if (session('berhasil'))
                    <div class="alert alert-success">
                        {{ session('berhasil') }}
                    </div>
                @endif

                <table>
                    <thead>
                        <tr>
                            <td class="text-center">No.</td>
                            <td class="text-center">Nama</td>
                            <td class="text-center">Email</td>
                            <td class="text-center">No Telp</td>
                            <td class="text-center">Aksi</td>
                        </tr>
                    </thead>
                </table>

                
            </div>
        </div>
    </div>
</body>
</section>
@endsection