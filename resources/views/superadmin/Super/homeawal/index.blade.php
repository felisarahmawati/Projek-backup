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
    <div class="details3">
        <div class="recentOrders3">
            <div class="cardHeader" >
                <h4>Data Home Awal</h4>
                <a href="" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal7" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end"><b>Tambah +</b></a>
                {{-- <a href="{{ route('homeawal.create') }}" class="btn btn-md btn-success mb-3">Tambah +</a> --}}
            </div>
            <br>
                
            <!--Alert-->
            @if (session('berhasil'))
                <div class="alert alert-success">
                    {{ session('berhasil') }}
                </div>
            @endif
            
            <table>
                <thead>
                    <tr>
                        <td class="text-center">No.</td>
                        <td class="text-center">Gambar</td>
                        <td class="text-center">Hero 1</td>
                        <td class="text-center">Hero 2</td>
                        <td class="text-center">Hero 3</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse($homeawal as $index)
                    <tr>
                        <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <img src="{{ Storage::url('public/homeawal/').$index->image }}" class="rounded" style="width: 25%">
                        </td>
                        <td class="text-center">{!! $index->content1 !!}</td>
                        <td class="text-center">{!! $index->content2 !!}</td>
                        <td class="text-center">{!! $index->content3 !!}</td>
                        <td class="text-center" >
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('homeawal.destroy', $index->id) }}" method="POST">
                                <a href="{{ route('homeawal.edit', $index->id) }}" class="btn btn-sm btn-warning">
                                    <i class='bx bx-edit'></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i></button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                    <i class='bx bx-edit'></i></a>
                                  </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Home belum Tersedia.
                    </div>
                @endforelse
                </tbody>
            </table>
            {{ $homeawal->links() }}
        </div>
    </div>
</div>

{{-- CREATE --}}
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">Tambah SubHome</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('homeawal.store') }}" method="POST" enctype="multipart/form-data">   
                @csrf
                <div class="modal-body" id="modal-content-edit">
                    <div class="form-group">
                        <label class="font-weight-bold">Gambar</label>
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
                        <input class="form-control @error('content1') is-invalid @enderror" name="content1" rows="5" placeholder="Masukkan Hero 1" value="{{ old('content1') }}">
                    
                        <!-- error message untuk content1 -->
                        @error('content1')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Hero 2</label>
                        <input class="form-control @error('content2') is-invalid @enderror" name="content2" rows="5" placeholder="Masukkan Hero 2" value="{{ old('content2') }}">
                    
                        <!-- error message untuk content2 -->
                        @error('content2')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Hero 3</label>
                        <input class="form-control @error('content3') is-invalid @enderror" name="content3" rows="5" placeholder="Masukkan Hero 3" value="{{ old('content3') }}">
                    
                        <!-- error message untuk content3 -->
                        @error('content3')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer d-md-block">
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:45%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">Edit Home</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ url('homeawal/{homeawal}') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="col-md-4 form-label" for="inputimage">Gambar</label>
                    {{-- <img src="{{ Storage::url('public/homeawal/').$homeawal->image }}" class="img-fluid mb-3 gambar-preview_new" style="width: 20%"> --}}
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
                    <input class="form-control @error('content1') is-invalid @enderror" name="content1" rows="5">
                
                    <!-- error message untuk content1 -->
                    @error('content1')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Hero 2</label>
                    <input class="form-control @error('content2') is-invalid @enderror" name="content2" rows="5">
                
                    <!-- error message untuk content2 -->
                    @error('content2')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Hero 3</label>
                    <input class="form-control @error('content3') is-invalid @enderror" name="content3" rows="5" >
                
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</section>
@endsection