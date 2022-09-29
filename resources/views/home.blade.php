@extends('layouts.main')
@extends('partials.header')

<!-- ======= Hero Section ======= -->
@section('container')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Bingung Mau nitip barang dimana?</h1>

                    <h2>Titipsini aja</h2>
    
                    <h2>Semua bisa dititipkan termasuk barang, rumah
                        atau kendaraan.</h2>
                    <div>
                        <a href="/user/layanan" class="btn-get-started scrollto">Titip Sekarang!</a>
                    </div>

                    <div class="icon" class="back-in-time" style="margin-top: 30px;">
                        <img src="../assets/img/reload.png" width="37" height="37">
                        <span style="font-size: large;"> Melayani 24 Jam</span>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="../assets/img/illust.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
    
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>titipsini.com</h3>
                        <p>
                            Gg. Puntodewo 212, Modalan, Banguntapan, Kec. Banguntapan <br>
                            Bantul, Yogyakarta<br>
                            Indonesia, 55198<br><br>
                            <strong>Phone:</strong> +62 8589 5548 2234<br>
                            <strong>Email:</strong> titipsiniofficial@main.com<br>
                        </p>
                    </div>
    
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media Kami</h4>
                        <p>follow sosial media kami untuk update berita terbaru</p>
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                            <a href="https://m.facebook.com/profile.php?id=100060690075937" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/titipsini.co/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCuAqwTJYTXP9i45XLeNVYlQ"
                                class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container py-2">
            <div class="copyright">
                &copy; Copyright <strong><span>titipsini.com</span></strong>. All Rights Reserved
            </div>
    
        </div>
    
    </footer>
    
@endsection
<!-- End Hero -->