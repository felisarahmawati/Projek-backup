@extends('finance.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h2>Data Transaksi</h2>
            </div>
        </div>
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="/finance/transaksi/transaksiuser" style="text-decoration:none">
                        <div class="cardName2">User
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="/finance/transaksi/transaksivendor" style="text-decoration:none">
                        <div class="cardName1">Vendor
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader">
                                <div class="cardHeader">
                                    <!-- Search -->
                                    <div class="search" data-aos="fade-left" data-aos-duration="1000">
                                        <label>
                                            <input type="text" placeholder="Cari Disini">
                                            <ion-icon name="search-outline"></ion-icon>
                                        </label>
                                    </div>
                                    {{-- <a href="#" class="btn btn-thema">View All</a> --}}
                                </div>
                                {{-- <h2>Data Orderan Kendaraan</h2> --}}
                                <div class="rincian d-inline">
                                {{-- <a href="#" class="btn btn-thema">Filter All<i class="bi bi-caret-down"></i></a> --}}
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success fw-bold rounded-pill px-4 shadow float-end">Filter All</button>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nama user</td>
                                        <td>ID</td>
                                        <td>Total</td>
                                        <td>Jam</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Samantha william</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Delivered</span></td>
                                        
                                        <td class="td" style="size: 30px;">
                                            {{-- <button class="btnedit">
                                                <i class='bx bx-edit'></i>
                                            </button> --}}
        
                                            {{-- <button class="btndelete">
                                                <i class='bx bx-trash'></i>
                                            </button> --}}
        
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
                <!-- /.box -->
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 30%">
        <div class="modal-content">
            {{-- <div class="modal-header hader">
            <h3 class="modal-title" id="exampleModalLabel">Data Pengambilan Uang</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body">
                <div class="cardHeader1" style="margin-top: 10px;">
                    Client
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="cardHeader1" style="margin-top: 10px;">
                    Vendor
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div><br>
                <label for="filter" class="form-label">FILTER BERDASARKAN STATUS</label><br>
                <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      On process
                    </label>
                </div>
                <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      Done
                    </label>
                </div>
                <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      Pending
                    </label>
                </div><div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      Cancel
                    </label>
                </div><br>
                <label for="filter" class="form-label">FILTER BERDASARKAN RENTANG WAKTU</label>
                <div class="form-check">
                    <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                    Enable
                    </label>
                </div>
                {{-- <label class="label mb-2">Status</label> --}}
                {{-- <select class="form-select" id="status" style="width: 50%">
                    <option value="terlama">Terlama</option>
                    <option value="disetujui">Disetujui</option>
                    <option value="ditolak">Ditolak</option>
                </select>
                <select class="form-select" id="status" style="width: 30%">
                    <option value="week">Week</option>
                    <option value="disetujui">Disetujui</option>
                    <option value="ditolak">Ditolak</option>
                </select> --}}
                <div class="col-md-5">
                    <select id="inputState" class="form-select">
                      <option selected>Terlama</option>
                      <option>Terlambat</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <select id="inputState" class="form-select">
                      <option selected>Week</option>
                      <option>Month</option>    
                    </select>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button>
                {{-- <button type="button" class="btn btn-danger btn-sm">TIDAK</button> --}}
            {{-- </div> --}}
        </div>
        </div>
    </div>
</section>
@endsection

@section('java')
<!-- DataTables -->
<script src="{!! asset('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
<script type="text/javascript">
    $(function () {
        $('#example1').DataTable()
    })
</script>
@endsection
