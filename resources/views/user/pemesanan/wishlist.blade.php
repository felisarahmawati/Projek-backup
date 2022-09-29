@extends('layouts.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
            
            <div class="container mt-4 mb-4">
                <div class="card mb-4">
                    
                    <div class="container">
                        <div class=" mt-3 mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                          </div>
                                        </th>
                                        <th scope="col text-muted">Layanan</th>
                                        <th scope="col text-muted">Harga titip</th>
                                        <th scope="col text-muted">Quantity</th>
                                        <th scope="col text-muted">Total harga</th>
                                        <th scope="col text-muted">Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                          </div>
                                        </th>
                                        <td>
                                          <div class="mb-3" style="max-width: 430px">
                                            <div class="row g-0">
                                              <div class="col-4 mt-2">
                                                <img src="{{ asset('assets/img/z.png') }}" class="img-fluid rounded-start" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <p class="mb-2" style="font-size: 16px; margin-bottom: 9px">
                                                    <b>Motor | Wijaya - titipsini</b>
                                                  </p>
                                                  <p class="text-secondary" style="font-size: 13px">
                                                    <b>Layanan penitipan kendaraan golongan I</b>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                        <p class="text-dark" style="font-size: 15px; margin-bottom: 10px; padding-top: 25px">
                                          IDR 70.000 - 200.000 / hari
                                        </p>
                                        </td>
                                        <td>
                                          <div class="box text-dark">
                                              <div class="wrapper" style="width: 130px; padding-top: 25px">
                                                  <span class="minus">-</span>
                                                  <span class="num">01</span>
                                                  <span class="plus">+</span>
                                              </div>
                                          </div>
                                        </td>
                                        <td>
                                          <p class="text-dark" style="font-size: 15px; margin-bottom: 10px; padding-top: 25px">
                                            IDR 100.000
                                          </p>
                                        </td>
                                        <td>
                                          <h4 style="padding-top: 16px"><i class="bi bi-trash"></i></h4>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                          </div>
                                        </th>
                                        <td>
                                          <div class="mb-3" style="max-width: 430px">
                                            <div class="row g-0">
                                              <div class="col-4">
                                                <img src="{{ asset('assets/img/paj.png') }}" class="img-fluid rounded-start" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <p class="mb-2" style="font-size: 16px; margin-bottom: 10px">
                                                    <b>Mobil | Pelita</b>
                                                  </p>
                                                  <p class="text-secondary" style="font-size: 13px">
                                                    <b>Layanan penitipan kendaraan golongan II</b>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                        <p class="text-dark" style="font-size: 15px; margin-bottom: 10px; padding-top: 25px">
                                          IDR 100.000 - 250.000 / hari
                                        </p>
                                        </td>
                                        <td>
                                          <div class="box text-dark">
                                              <div class="wrapper" style="width: 130px; padding-top: 25px">
                                                  <span class="minus">-</span>
                                                  <span class="num">01</span>
                                                  <span class="plus">+</span>
                                              </div>
                                          </div>
                                        </td>
                                        <td>
                                          <p class="text-dark" style="font-size: 15px; margin-bottom: 10px; padding-top: 25px">
                                            IDR 175.000
                                          </p>
                                        </td>
                                        <td>
                                          <h4 style="padding-top: 16px"><i class="bi bi-trash"></i></h4>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                          </div>
                                        </th>
                                        <td>
                                          <div class="mb-3" style="max-width: 430px">
                                            <div class="row g-0">
                                              <div class="col-4">
                                                <img src="{{ asset('assets/img/Apartemen.jpg') }}" class="img-fluid rounded-start" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                  <p class="mb-2" style="font-size: 16px; margin-bottom: 10px">
                                                    <b>Titip Apart</b>
                                                  </p>
                                                  <p class="text-secondary" style="font-size: 13px">
                                                    <b>Layanan penitipan bangunan</b>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                        <p class="text-dark" style="font-size: 15px; margin-bottom: 10px; padding-top: 25px">
                                          IDR 80.000 - 150.000 / hari
                                        </p>
                                        </td>
                                        <td>
                                          <div class="box text-dark">
                                              <div class="wrapper" style="width: 130px; padding-top: 25px">
                                                  <span class="minus">-</span>
                                                  <span class="num">01</span>
                                                  <span class="plus">+</span>
                                              </div>
                                          </div>
                                        </td>
                                        <td>
                                          <p class="text-dark" style="font-size: 15px; margin-bottom: 10px; padding-top: 25px">
                                            IDR 100.000
                                          </p>
                                        </td>
                                        <td>
                                          <h4 style="padding-top: 16px"><i class="bi bi-trash"></i></h4>
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Pilih semua (3)
                          </label>
                        </div>
                      </div>
                      <div class="col-1" style="padding-top: 1px">
                          <!-- Button trigger modal -->
                          <p type="button" class="btn btn-white mb-0 p-0" data-bs-toggle="modal" data-bs-target="#delete">
                            Hapus
                          </p>

                          <!-- Modal -->
                          <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <p>Yakin ingin menghapus 1 layanan?</p>
                                  {{-- <button type="button" class="btn btn-success justify-content-center" data-bs-dismiss="modal">Iya</button>
                                  <button type="button" class="btn btn-secondary justify-content-center">Tidak</button> --}}
                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-success" type="button" data-bs-dismiss="modal">Iya</button>
                                    <button class="btn btn-secondary" type="button">Tidak</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-7 text-end">
                        <p>Total harga : Rp.0 </p>
                      </div>
                      <div class="col-1 text-end">
                        <a class="btn btn-success" href="/user/pemesanan/pemesanan" role="button">Checkout</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </section>
@endsection