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
                        <form action="{{ route('tentangawal.update', $tentangawal->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="col-md-4 form-label" for="inputgambar" >Gambar</label>
                                <img src="{{ Storage::url('public/app/tentangawal/').$tentangawal->gambar }}" class="img-fluid mb-3 gambar-preview_new" id="tampilGambar">
                                <input type="file" class="form-control" id="gambar_new" name="gambar_new" onchange="previewImage()">
                                    @error('gambar')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $tentangawal->judul }}">
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 1</label>
                                <input type="text" name="deskripsi1" class="form-control @error('deskripsi1') is-invalid @enderror" value="{{ $tentangawal->deskripsi1 }}">
                                @error('deskripsi1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 2</label>
                                <input type="text" name="deskripsi2" class="form-control @error('deskripsi2') is-invalid @enderror" value="{{ $tentangawal->deskripsi2 }}">
                                @error('deskripsi2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <script type="text/javascript">
                                function previewImage() {
                                        const image = document.querySelector("#gambar_new");
                                        const imgPreview = document.querySelector(".gambar-preview_new");
                                        imgPreview.style.display = "block";
                                        const oFReader = new FileReader();
                                        oFReader.readAsDataURL(image.files[0]);
                                        oFReader.onload = function(oFREvent) {
                                            imgPreview.src = oFREvent.target.result;
                                            $("#tampilGambar").addClass('mb-3');
                                            $("#tampilGambar").width("100%");
                                            $("#tampilGambar").height("300");
                                        }
                                }
                            </script>
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
