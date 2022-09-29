<input type="hidden" name="id" value="{{ $edit->id }}">
{{-- <input type="hidden" name="gambarLama" value="{{ $edit->gambar }}"> --}}
<div class="form-group">
    <label>Hero 1</label>
    <input type="text" name="judul1" class="form-control @error('judul1') is-invalid @enderror" value="{{ $edit->judul1 }}" required>
    @error('judul1')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Hero 2</label>
    <input type="text" name="judul2" class="form-control @error('judul2') is-invalid @enderror" value="{{ $edit->judul2 }}">
    @error('judul2')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Hero 3</label>
    <input type="text" name="judul3" class="form-control @error('judul3') is-invalid @enderror" value="{{ $edit->judul3 }}">
    @error('judul3')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-4 form-label" for="inputgambar" >Gambar</label>
    <img src="{{ Storage::url('public/app/home/').$edit->gambar }}" class="img-fluid mb-3 gambar-preview_new" id="tampilGambar">
    <input type="file" class="form-control" id="gambar_new" name="gambar_new" onchange="previewImage()">
        @error('gambar')
            <p class="text-danger">{{$message}}</p>
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
