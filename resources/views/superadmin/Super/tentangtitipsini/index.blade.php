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

        <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader" >
                        <h4>Tentang Titipsini</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal7" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end"><b>Tambah +</b></a>
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
                                <td>No.</td>
                                <td>Gambar</td>
                                <td>Judul</td>
                                <td>Baris 1</td>
                                <td>Baris 2</td>
                                <td>Baris 3</td>
                                <td>Baris 4</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                                $no = 1;
                            @endphp
                            @forelse ($tentang as $index)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                {{-- <td><img src="{{ url('/storage/' .$index->gambar) }}" style="width:50px;"></td> --}}
                                <td><img src="{{ Storage::url('public/app/tentangtitipsini/').$index->gambar }}" class="rounded" style="width: 80px"></td>
                                <td>{{ $index->judul }}</td>
                                <td>{{ $index->baris1 }}</td>
                                <td>{{ $index->baris2 }}</td>
                                <td>{{ $index->baris3 }}</td>
                                <td>{{ $index->baris4 }}</td>
                                <td class="td" style="size: 25px;">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tentang.destroy', $index->id) }}" method="POST">
                                        <a href="{{ route('tentang.edit', $index->id) }}" class="btn btn-sm btn-warning">
                                            <i class='bx bx-edit'></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i></button>
                                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> --}}
                                            {{-- <i class='bx bx-edit'></i></a> --}}
                                          </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $tentang->links() }}
                </div>
            </div>
        </div>

    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Tambah Home</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Baris 1</label>
                            <input type="text" name="baris1" class="form-control @error('baris1') is-invalid @enderror" value="{{ old('baris1') }}" required>
                            @error('baris1')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Baris 2</label>
                            <input type="text" name="baris2" class="form-control @error('baris2') is-invalid @enderror" value="{{ old('baris2') }}" required>
                            @error('baris2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Baris 3</label>
                            <input type="text" name="baris3" class="form-control @error('baris3') is-invalid @enderror" value="{{ old('baris3') }}">
                            @error('baris3')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Baris 4</label>
                            <input type="text" name="baris4" class="form-control @error('baris4') is-invalid @enderror" value="{{ old('baris4') }}">
                            @error('baris4')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 form-label" for="inputgambar" >Gambar</label>
                            <input type="file" class="form-control" name="gambar" required>
                            @error('gambar')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:45%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Tentang Titipsini</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/tentang/store') }}" method="POST" enctype="multipart/form-data">
                    @method("PUT")
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- JS delete --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#deleteTentang').click(function(){
                var id = $(this).attr('rel');
                var deleteFunction = $(this).attr('rel1')
                swal({
                    title: "Are you sure?",
                    text: "Your will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    window.location.href="/delete/"+deleteFunction+"/"+id;
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });
        });
    
        function previewImage() {
            const gambar = document.queryselector('#gambar');
            const imgPreview = document.queryselector('.img-preview');
    
            imgPreview.styp.display = 'block';
    
            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);
    
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    


<script type="text/javascript">
    function editTentang(id) {
        $.ajax({
            url: "{{ url('/superadmin/super/tentangtitipsini/edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }

    function detailTentang(id) {
        $.ajax({
            url: "{{ url('/superadmin/super/tentangtitipsini/detail') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-detail").html(data);
                return true;
            }
        })
    }
</script>

   

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

<script>
@if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
@endif
</script>
</section>
@endsection