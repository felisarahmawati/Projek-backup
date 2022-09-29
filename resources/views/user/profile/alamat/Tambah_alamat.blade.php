@extends("layouts.user")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;">
  <div class="container mt-4 mb-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @include('partials.profile')
          <div class="col" style="width: 700px">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Tambah Alamat</h5>
                <hr width="100%" color="#c0c0c0">
                <form action="{{ route('store.alamat') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" aria-label="Disabled input example" > 
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                    <input class="form-control" type="number" name="no_telp" placeholder="Nomor Telepon" aria-label="Disabled input example">
                  </div>

                  {{-- <div class="mb-3">
                      <label for="text" class="col-sm-2 col-form-label">Provinsi</label>
                      <select class="form-select form-select-sm" id="provinsi">
                        <option selected>Pilih Provinsi....</option>
                        @foreach ($provinces as $provinsi)
                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Kabupaten</label>
                      <select class="form-select form-select-sm" id="kabupaten">
                        
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Kecamatan</label>
                      <select class="form-select form-select-sm" id="kecamatan">
                        
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Desa</label>
                      <select class="form-select form-select-sm" id="desa">
                        
                      </select>
                  </div> --}}

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail Alamat</label>
                    <textarea class="form-control" type="text" name="detail_alamat" placeholder="nama jln, no.rumah, kode pos" aria-label="Disabled input example"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Catatan</label>
                    <textarea class="form-control" type="text" name="catatan" placeholder="nama jln, no.rumah, kode pos" aria-label="Disabled input example"></textarea>
                  </div>
                  {{-- <div>
                    <a href="https://www.google.co.id/maps"><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</a>
                    <iframe style="width:100%" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                  </div>
                  <div class="cardHeader1" style="margin-top: 30px;">
                    <h6>Pilih sebagai alamat utama</h6>
                    <label class="switch">
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                  </div> --}}
                  {{-- <a class="btn btn-outline-success col-md-12 mt-3" href="/user/profile/Alamat" role="button">Simpan</a> --}}
                  <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection