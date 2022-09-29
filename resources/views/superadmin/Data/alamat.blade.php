@extends('superadmin.Layouts.superadminlayout')
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-10 ms-5">
                        <h3>Pilih Kota List Admin</h3>
                        <div class="col-10 mt-4">
                            <select class="form-select form-select-md" aria-label="Default select example">
                                <option selected>Provinsi</option>
                                <option value="1">Jawa Tengah</option>
                                <option value="2">Jawa Barat</option>
                                <option value="3">Jawa Timur</option>
                            </select>
                        </div>
                        <div class="col-10 mt-3">
                            <select class="form-select form-select-md" aria-label="Default select example">
                                <option selected>Kabupaten</option>
                                <option value="1">Sleman</option>
                                <option value="2">Bantul</option>
                                <option value="3">Batang</option>
                            </select>
                        </div>
                        <div class="col-10 mt-3">
                            <select class="form-select form-select-md" aria-label="Default select example">
                                <option selected>Kecamatan</option>
                                <option value="1">Adimulyo</option>
                                <option value="2">Adiparna</option>
                                <option value="3">Adiwerna</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 mt-3">
                        <table class="table mt-3 ms-5">
                            <thead class="table table-success">
                                <tr>
                                    <td>Account</td>
                                    <td>Account id</td>
                                    <td>Responsible party</td>
                                    <td>Latitude</td>
                                    <td>Longiotude</td>
                                    <td>Value(USD)</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>231544</td>
                                    <td>32554246</td>
                                    <td>Titipsini.com</td>
                                    <td>78.83787</td>
                                    <td>42.782275</td>
                                    <td>$ 2,522,525</td>
                                </tr>
                                <tr>
                                    <td>231544</td>
                                    <td>32554246</td>
                                    <td>Titipsini.com</td>
                                    <td>78.83787</td>
                                    <td>42.782275</td>
                                    <td>$ 2,522,525</td>
                                </tr>
                                <tr>
                                    <td>231544</td>
                                    <td>32554246</td>
                                    <td>Titipsini.com</td>
                                    <td>78.83787</td>
                                    <td>42.782275</td>
                                    <td>$ 2,522,525</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </section>
@endsection