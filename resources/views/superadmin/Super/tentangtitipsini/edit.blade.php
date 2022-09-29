@extends('superadmin.Layouts.superadminlayout')

@section('content')
<section class="home-section">
<body>
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('tentang.update', $tentang->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $tentang->judul }}" required>
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Baris 1</label>
                                <input type="text" name="baris1" class="form-control @error('baris1') is-invalid @enderror" value="{{ $tentang->baris1 }}" required>
                                @error('baris1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Baris 2</label>
                                <input type="text" name="baris2" class="form-control @error('baris2') is-invalid @enderror" value="{{ $tentang->baris2 }}">
                                @error('baris2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Baris 3</label>
                                <input type="text" name="baris3" class="form-control @error('baris3') is-invalid @enderror" value="{{ $tentang->baris3 }}">
                                @error('baris3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Baris 4</label>
                                <input type="text" name="baris4" class="form-control @error('baris4') is-invalid @enderror" value="{{ $tentang->baris4 }}">
                                @error('baris4')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 form-label" for="inputimage">Gambar</label>
                                <img src="{{ Storage::url('public/app/tentangtitipsini/').$tentang->gambar }}" class="img-fluid mb-3 gambar-preview_new" style="width: 20%">
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                            
                                <!-- error message untuk title -->
                                @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</section>
@endsection