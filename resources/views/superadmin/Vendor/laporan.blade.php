@extends('superadmin.Layouts.superadminlayout')
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="border border-light card mb-3 mt-4 mx-5 my-5" style="max-width: 1080px;">
                <div class="row g-0">
                <div class="col-lg-4">
                    <img src="../../assets/img/bank.png" class="img-fluid rounded-start" 
                    style="width: 300px; height: 180px" alt="...">
                </div>
                <div class="col-lg-3">
                    <div class="card-body">
                    <h5 class="card-title">Available Balance</h5>
                    <h5 class="card-text">$ 12,676,17</h5>
                    <br>
                    <h5 class="card-title">Spent Today</h5>
                    <h6 class="card-text">Retail</h6>
                    <h6 class="card-text"><b>$ 12,676,17</b></h6>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h5 class="card-text"></h5>
                    <br><br><br><br><br>
                    <h6 class="card-text">Online</h6>
                    <h6 class="card-text"><b>$ 21,35</b></h6>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h5 class="card-text"></h5>
                    <br><br><br>
                    <h5 class="card-text">Daily Limits</h5>
                    <p class="card-text">Cash WithDramal</p>
                    <h6 class="card-text"><b>$ 25/268</b></h6>
                    </div>
                </div>
                </div>
            </div>
            <div class="details1">
                <div class="recentOrders">
                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Invoice id</td>
                            <td>Nama</td>
                            <td>Status</td>
                            <td>Due Date</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>INV-24</td>
                            <td>Basanii</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-warning">Upload
                            </button></td>
                            <td>Juni,18,2021</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-success">Detail
                            </button></td>
                        </tr>
                        <tr>
                            <td>INV-24</td>
                            <td>Basanii</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-warning">Upload
                            </button></td>
                            <td>Juni,18,2021</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-success">Detail
                            </button></td>
                        </tr>
                        <tr>
                            <td>INV-24</td>
                            <td>Basanii</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-warning">Upload
                            </button></td>
                            <td>Juni,18,2021</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-success">Detail
                            </button></td>
                        </tr>
                        <tr>
                            <td>INV-24</td>
                            <td>Basanii</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-warning">Upload
                            </button></td>
                            <td>Juni,18,2021</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-success">Detail
                            </button></td>
                        </tr>
                        <tr>
                            <td>INV-24</td>
                            <td>Basanii</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-warning">Upload
                            </button></td>
                            <td>Juni,18,2021</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-success">Detail
                            </button></td>
                        </tr>
                        <tr>
                            <td>INV-24</td>
                            <td>Basanii</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-warning">Upload
                            </button></td>
                            <td>Juni,18,2021</td>
                            <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-success">Detail
                            </button></td>
                        </tr>
            
                    </tbody>
                </table>
                        {{-- <table class="table-borderless mt-3 w-auto">
                            <thead class="">
                                <tr>
                                    <td>Invoice id</td>
                                    <td>Nama</td>
                                    <td>Status</td>
                                    <td>Due Date</td>
                                    <td>Action</td>
                                    
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td>INV-24</td>
                                    <td>Basanii</td>
                                    <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btn btn-warning">Upload
                                    </button>
                                    </td>
                                    <td>Juni,18,2021</td>
                                    <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btn btn-success">Detail
                                    </button>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>INV-24</td>
                                    <td>Basanii</td>
                                    <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btn btn-warning">Upload
                                    </button>
                                    </td>
                                    <td>Juni,18,2021</td>
                                    <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btn btn-success">Detail
                                    </button>
                                    </td>
                                   
                                </tr>
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection