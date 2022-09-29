<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $edit->judul }}" required>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Isi</label>
    {{-- <textarea type="text" name="isi" class="form-control @error('isi') is-invalid @enderror" value="{!! $edit->isi !!}"></textarea> --}}
    <textarea type="text" name="isi" class="my-editor form-control" id="my-edit" cols="30" rows="10" >{!! $edit->isi !!}</textarea>
    @error('isi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
