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
            <div class="card1">
                <div>
                    <a href="/finance/transaksi/transaksiuser" style="text-decoration:none">
                        <div class="cardName1">User
                        </div>
                    </a>
                </div>
            </div>
            <div class="card2">
                <div>
                    <a href="/finance/transaksi/transaksivendor" style="text-decoration:none">
                        <div class="cardName2">Vendor
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
                            {{-- <div class="cardHeader3"> --}}
                                <div class="cardHeader">
                                    <h2>Data Transaksi Vendor</h2>
                                    {{-- <a href="#" class="btn btn-thema">View All</a> --}}
                                </div>
                            {{-- </div> --}}
                            <table>
                                <thead>
                                    <tr>
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
                                        <td>Samantha william</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>
                                        <td class="text-start"><span class="status inprogress">In Progress</span></td>

        
                                        <td class="td" style="size: 30px;">
                                            {{-- <button class="btnedit">
                                                <i class='bx bx-edit'></i>
                                            </button> --}}
        
                                            {{-- <button class="btndelete">
                                                <i class='bx bx-trash'></i>
                                            </button> --}}
        
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail"><a href="/finance/transaksi/detailtransaksivendor">Detail
                                                {{-- <i class='bx bx-detail'></i> --}}
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
