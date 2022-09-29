@extends('finance.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h2>Detail Transaksi</h2>
            </div>
        </div>
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="/finance/transaksi/detailtransaksiuser" style="text-decoration:none">
                        <div class="cardName2">User
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="/finance/transaksi/detailtransaksivendor" style="text-decoration:none">
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
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success fw-bold rounded-pill px-4 shadow float-end">Filter All</button>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Kode Transaksi</td>
                                        <td>Transaksi</td>
                                        <td>Tanggal</td>
                                        <td>Pengeluaran</td>
                                        <td>Pemasukan</td>
                                        <td>Saldo</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TAQWA-0002</td>
                                        <td>Penitipan motor</td>
                                        <td>01-11-2013</td>
                                        <td>RP 250.875</td> 
                                        <td>RP 250.875</td>
                                        <td>RP 250.875</td>
        
                                        <td class="td" style="size: 30px;">
                                            {{-- <button class="btnedit">
                                                <i class='bx bx-edit'></i>
                                            </button> --}}
        
                                            {{-- <button class="btndelete">
                                                <i class='bx bx-trash'></i>
                                            </button> --}}
        
                                            {{-- <button     class="btndetail">Detail
                                                {{-- <i class='bx bx-detail'></i> --}}
                                            {{-- </button>  --}}
                                            {{-- <div class="btndetail"> --}}
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-success fw-bold rounded-pill px-4 shadow float-end">Detail</button>
                                            {{-- </div> --}}
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
        <div class="modal-dialog modal-dialog-scrollable" style="width: 30%">
        <div class="modal-content">
            {{-- <div class="modal-header hader">
            <h3 class="modal-title" id="exampleModalLabel">Data Pengambilan Uang</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body">
                <div class="alert text-center bg-success" style=" color:#fff;">
                    Semua Kategori
                </div>
                <div class="mb-3 row">
                    <label for="inputPemasukan" class="col-4 col-form-label">Pemasukan</label>
                    <div class="col-sm-8">
                      <input type="pemasukan" class="form-control" id="inputPemasukan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPengeluaran" class="col-4 col-form-label">Pengeluaran</label>
                    <div class="col-sm-8">
                      <input type="pengeluaran" class="form-control" id="inputPengeluaran">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputKode" class="col-4 col-form-label">Kode</label>
                    <div class="col-sm-8">
                      <input type="kode" class="form-control" id="inputKode">
                    </div>
                </div>
                {{-- <label class="label mb-2">Status</label> --}}
                <div class="mb-3 row">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal">
                      </div>
                </div>
            </div>
                <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button>
                {{-- <button type="button" class="btn btn-danger btn-sm">TIDAK</button> --}}
            {{-- </div> --}}
        </div>
        </div>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 28%">
            <div class="modal-content">
                <img src="{{ asset('assets/img/Rectangle77.png') }}" class="rounded mx-auto d-block" alt="image">
                {{-- <img src="../assets/img/ic2.png" class="rounded mx-auto d-block" alt="gambar" width="100px"> --}}
                <p class="penitipan" style="padding-top: 20px"><b>Penitipan Kendaraan</b></p>
                <div class="row">
                    <div class="col-md">
                        <p>Tanggal penitipan</p>
                    </div>
                    <div class="col-md-5">
                        01-11-2022
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Tanggal pengambilan</p>
                    </div>
                    <div class="col-md-5">
                        07-11-2022
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>No. rekening</p>
                    </div>
                    <div class="col-md-5">
                        2323-14553-2452-21
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Dari Bank</p>
                    </div>
                    <div class="col-md-5">
                        BRI
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Ke Bank</p>
                    </div>
                    <div class="col-md-5">
                        BRI
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Nama Pengirim</p>
                    </div>
                    <div class="col-md-5">
                        Angelie Silubun
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Nama Penerima</p>
                    </div>
                    <div class="col-md-5">
                        Alvi Nuebetri
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Rekening Tujuan</p>
                    </div>
                    <div class="col-md-5">
                        2323-14553-2452-21
                    </div>   
                </div>
                <p class="jenis" style="padding-top: 20px"><b>Jenis Kendaraan</b></p>
                <div class="row">
                    <div class="col-md">
                        <p>Mobil (x2)</p>
                    </div>
                    <div class="col-md-5">
                        200.000
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Motor (x2)</p>
                    </div>
                    <div class="col-md-5">
                        100.000
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p><b>Total Kendaraan</b></p>
                    </div>
                    <div class="col-md-5">
                        <b>4 buah</b>
                    </div>   
                </div><hr>
                <div class="row">
                    <div class="col-md">
                        <p><b>Total</b></p>
                    </div>
                    <div class="col-md-5">
                        <b>230.000</b>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Diskon</p>
                    </div>
                    <div class="col-md-5">
                        5%
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Potongan Harga</p>
                    </div>
                    <div class="col-md-5">
                        17%
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Diskon</p>
                    </div>
                    <div class="col-md-5">
                        -
                    </div>   
                </div>
                {{-- <div class="card text-center"> --}}
                    {{-- <div class="card-body"> --}}
                      {{-- <img src="assets/img/centanghijauuu.png" alt="centangHijau" width="120px" height="100px"> --}}
                      <p class="bukti text-center" style="padding-top: 20px"><b>Anda dapat menyimpan tanda terima ini
                        sebagai bukti transaksi yang sah<b></p>
                    {{-- </div> --}}
                {{-- </div> --}}
                    {{-- <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button> --}}
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
