<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" width="100%">
            <img src="{{ Storage::url('public/app/tentangawal/').$detail->gambar }}" class="img-fluid animated" style="width: 200px; height: 200px">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h3 data-aos="fade-up">{{ $detail->judul }}</h3>
            <p data-aos="fade-up" data-aos-delay="100">
               {{ $detail->deskripsi1 }}</p>
            <p data-aos="fade-up" data-aos-delay="100">
                {{ $detail->deskripsi2 }}</p>
        </div>
    </div>
</div>