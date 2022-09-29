<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="mb-3">
    <label for="pertanyaan" class="form-label">Pertanyaan</label>
    {{-- <input type="text" name="pertanyaan" class="form-control @error('pertanyaan') is-invalid @enderror" value="{{ old('judul') }}" required> --}}
    <select class="form-select" aria-label="Default select example" name="pertanyaan"  @error('pertanyaan') is-invalid @enderror>
        <option selected value="">{{ $edit->pertanyaan }}</option>
        <option>Apa itu titipsini.com?</option>
        <option>Bagaimana cara membayar?</option>
        <option>Bagaimana melihat profil Anda?</option>
        <option>Bagaimana cara pesan penitipan?</option>
        <option>Mengapa syaa tidak menerima kode OTP?</option>
    </select>
</div>

<div class="mb-3">
    <label for="inputjawaban" class="form-label">Jawaban</label>
    <textarea type="text" name="jawaban" class="my-editor form-control" id="my-editor" cols="30" rows="10">{!! $edit->jawaban !!}</textarea>
</div>