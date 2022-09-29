@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>SubKategori Layanan</h2>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h4>Sub Kategori</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
                </div>
                <table>
                <form method="post" action="">
                    @csrf
                    <thead>
                        <tr>
                            <td>Kategori</td>
                            <td>Sub Kategori</td>
                            <td>Gambar</td>
                            <td>Deskripsi</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kendaraan</td>
                            <td>Kendaraan roda 2</td>
                            <td><img src="{{asset('assets/img/foto1.jpg')}}" alt="" style="width: 20px;"></td>
                            <td>Sepeda Motor</td>

                            <td class="td" style="size: 30px;">
                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btndetail">
                                            <i class='bx bx-detail'></i>
                                        </button>
                                <button class="btndelete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kendaraan</td>
                            <td>Kendaraan roda 2</td>
                            <td><img src="{{asset('assets/img/foto1.jpg')}}" alt="" style="width: 20px;"></td>
                            <td>Sepeda Motor</td>

                            <td class="td" style="size: 30px;">
                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btndetail">
                                            <i class='bx bx-detail'></i>
                                        </button>
                                <button class="btndelete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kendaraan</td>
                            <td>Kendaraan roda 2</td>
                            <td><img src="{{asset('assets/img/foto1.jpg')}}" alt="" style="width: 20px;"></td>
                            <td>Sepeda Motor</td>

                            <td class="td" style="size: 30px;">
                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btndetail">
                                            <i class='bx bx-detail'></i>
                                        </button>
                                <button class="btndelete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kendaraan</td>
                            <td>Kendaraan roda 2</td>
                            <td><img src="{{asset('assets/img/foto1.jpg')}}" alt="" style="width: 20px;"></td>
                            <td>Sepeda Motor</td>

                            <td class="td" style="size: 30px;">
                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btndetail">
                                            <i class='bx bx-detail'></i>
                                        </button>
                                <button class="btndelete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kendaraan</td>
                            <td>Kendaraan roda 2</td>
                            <td><img src="{{asset('assets/img/ic2.png')}}" alt="" style="width: 20px;"></td>
                            <td>Sepeda Motor</td>

                            <td class="td" style="size: 30px;">
                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btndetail">
                                            <i class='bx bx-detail'></i>
                                </button>
                                <button class="btndelete" ><a href="#" class='bx bx-trash' onclick="return confirm('yakin?');"></a></button>
                            </td>
                        </tr>
                    </tbody>
                </form>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Tambah SubKategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="kategori">Kategori : </label>
                    <select class="form-control" name="kategori" style="width: 100%;">
                        <option selected="selected" value="">-- Kategori --</option>
                        <option>Kendaraan</option>
                        <option>Bangunan</option>
                        <option>Barang</option>
                    </select>
                    <label class="label">Sub Kategori</label>
                    <input class="form-control" type="text" id="id">
                    <label class="label">Gambar</label>
                    <input class="form-control" type="file" id="gambar">
                    <label class="label">Deskripsi</label>
                    <textarea name="isi" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:38%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Edit SubKategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="label">Kategori</label>
					<input type="text" class="form-control" name="judul" value="" required>
                    <label class="label">Sub Kategori</label>
                    <input class="form-control" type="text" id="id" placeholder="Kendaraan Roda 2">
                    <label class="label">Gambar</label><br>
                    <img src="{{ asset('assets/img/kaka.png') }}"><br>
                    <label class="label">Deskripsi</label>
                    <textarea name="isi" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 40%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Detail SubKategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="label">Sub Kategori</label>
                    <input type="text" class="form-control" id="id" placeholder="Kendaraan Roda 2">
                    <label class="label">Gambar</label><br>
                    <img src="{{ asset('assets/img/kaka.png') }}"><br>
                    <label class="label">Deskripsi</label>
                    <textarea name="isi" class="my-editor form-control" id="my-editor" cols="30" rows="10" ></textarea>
                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
    </script>
@endsection