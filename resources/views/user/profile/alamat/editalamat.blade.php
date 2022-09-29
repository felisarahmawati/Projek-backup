@extends("layouts.user")
@section('container')

    <section id="services" class="services section-bg" style="padding-top: 100px">
        <div class="container mt-4 mb-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @include('partials.profile')

                <div class="col" style="width: 700px">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-arrow-left px-2"></i>Edit Alamat</h5>
                            <hr width="100%" color="#c0c0c0">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" value=""> 
                                    </div>

                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label">No Telepon</label>
                                        <input type="text" name="no_telp" value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="detail_alamat" class="form-label">Alamat Lengkap</label>
                                        <input type="text" name="detail_alamat" value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="catatan" class="form-label">Catatan</label>
                                        <input type="text" name="catatan" value="">
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection