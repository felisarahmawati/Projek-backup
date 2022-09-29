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
                        <form action="{{ route('homeawal.update', $homeawal->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="col-md-4 form-label" for="inputimage">Gambar</label>
                                <img src="{{ Storage::url('public/homeawal/').$homeawal->image }}" class="img-fluid mb-3 gambar-preview_new" style="width: 20%">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Hero 1</label>
                                <input class="form-control @error('content1') is-invalid @enderror" name="content1" rows="5" value="{{ $homeawal->content1 }}">
                            
                                <!-- error message untuk content1 -->
                                @error('content1')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Hero 2</label>
                                <input class="form-control @error('content2') is-invalid @enderror" name="content2" rows="5" value="{{ $homeawal->content2 }}">
                            
                                <!-- error message untuk content2 -->
                                @error('content2')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Hero 3</label>
                                <input class="form-control @error('content3') is-invalid @enderror" name="content3" rows="5" value="{{ $homeawal->content3 }}">
                            
                                <!-- error message untuk content3 -->
                                @error('content3')
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