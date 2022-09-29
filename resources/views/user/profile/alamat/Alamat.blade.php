@extends("layouts.user")
@section('container')
    
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">

        <div class="row row-cols-1 row-cols-md-2 g-4">
            
            @include('partials.profile')

            <div class="col" style="width: 700px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Alamat Saya {{Auth::user()->id}}</h5>
                        <!--Alert-->
                        @if($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif

                        <hr width="100%" color="#c0c0c0">
                        <div class="row" style="width: 650px">
                            @if(Auth::user()->id)
                            @foreach ($alamats as $alamat)

                            <div class="row" style="width: 650px">
                                <div class="col-md">
                                    <p><b>{{ $alamat->nama_lengkap }}</b></p>
                                    <p>{{ $alamat->no_telp }}</p>
                                    <p>{{ $alamat->detail_alamat }}
                                    <p class="card-text"><small class="text-muted">catatan : {{ $alamat->catatan }}</small></p>
                                </div>
                                <div class="col-1">
                                    <p class="text-end"><a href="#"><i class="bi bi-pencil-square"></i></a></p>
                                </div> 
                                <div class="col-1">
                                    <p class="text-end"><a href="#"><i class="bi bi-trash"></i></a></p>
                                </div> 
                       
                            </div> 

                            @endforeach
                            @endif

                            <a href="/user/profile/alamat/Tambah_alamat"><button type="button" class="btn btn-outline-success col-md-12 mt-3">Tambah Alamat Baru</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection