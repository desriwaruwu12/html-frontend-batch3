@extends('layouts.frontend.master')
@section('content')
    {{-- CSS MASTER --}}
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/css/offtour.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        h2 {
            color: #000;
            font-size: 26px;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            margin: 30px 0 45px;
        }
        h2 b {
            color: #002fff;
        }
        h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 4px;
            background: rgba(0, 0, 0, 0.2);
            left: 0;
            right: 0;
            bottom: -20px;
        }
        .item-price span {
            color: #86bd57;
            font-size: 110%;
        }

    </style>

    <div class="container-fluid">
        <div class="px-lg-5">
            <h2>Offline <b>Tour</b></h2>
            <div class="row justify-content-center mb-5">
                <div class="col-md-6">
                    <form action="">
                        <div class="input-group mb-3" style="border-radius: 100px;">
                            <input type="text" class="form-control" placeholder="search.." name="keyword">
                            <button class="btn btn-primary" type="submit">search</button>
                          </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">

                    <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/33/a1/e1/33a1e1cbfb6089545e05452b52eb07fb.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Jelajahi Malioboro yang iconic</a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View Profil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/92/81/43/92814362894f576535559e0a04f5d7e9.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Melihat Borobudur secara lenkap</a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View Profil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="https://d99i6ad9lbm5v.cloudfront.net/uploads/image/file/4511/prambanan-2010-2-of-2.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Keseruan Menjelajahi Candi Prambanan </a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View Profil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->


                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/30/36/55/303655abd035ce58bc79f29e83af7a3c.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Sunset an di Parangtritis makin romantis</a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View Profil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <div class="py-5 text-center"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
            </div>

        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div  class="modal-dialog modal-xl" class="shadow-none p-3 mb-2 bg-light rounded">
        <div class="modal-content">
            <div class="modal-header">
                <h3>CANDI PRAMBANAN</h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col" style="height: auto">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="assets/img/offlinetour/cn pramban1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/img/offlinetour/cn pramban2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/img/offlinetour/cn pramban 3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                            </div> {{-- image courasel --}}

                        <div class="col">
                            <div class="shadow-lg p-3 mb-3 bg-body rounded">
                            <h6>Detail</h6>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="col"><i class="bi bi-cash-stack"></i></th>
                                        <th>Rp. 200.000</th>
                                      </tr>
                                  <tr>
                                    <th scope="col"><i class="bi-calendar-check"></i></th>
                                    <th>10 Oktober 2022</th>
                                  </tr>
                                  <tr>
                                    <th scope="col"><i class="bi-clock-fill"></i></th>
                                    <th scope="col">09:00-17:00</th>
                                  </tr>
                                  <tr>
                                    <th scope="col"><i class="bi-ticket-perforated"></i></th>
                                    <th scope="col">300 Kuota</th>
                                  </tr>
                                  <tr>
                                    <th scope="col"><i class="bi-geo-alt-fill"></i></th>
                                    <th scope="col">Jl. Raya Solo - Yogyakarta No.16, Kranggan, Bokoharjo,
                                        Kec. Prambanan, Kabupaten Sleman</th>
                                  </tr>
                                </tbody>
                            </table>
                            <div class="share">
                                {{-- <tr>
                                    <th class="text">Share On</th>
                                </tr> --}}
                                <tr>
                                <th><i class="bi bi-facebook"></i></th>
                                <th><i class="bi bi-instagram"></i></th>
                                <th><i class="bi bi-linkedin"></i></th>
                                <th><i class="bi bi-whatsapp"></i><th>
                                <th><i class="bi bi-twitter"></i></th>
                                </tr>
                            </div>
                            </div>
                    </div>

                    </div>{{-- info --}}
                </div>
                <div class="shadow-lg p-3 mb-2 bg-body rounded">
                    <h6>Deskripsi</h6>
                    <p class="fs-8">Candi Prambanan adalah kompleks candi Hindu terbesar di Indonesia yang terletak di perbatasan Jawa Tengah dan Yogyakarta. Bangunan candi ini dipersembahkan untuk Trimurti atau tiga dewa utama Hindu, yaitu Brahma (dewa pencipta), Wisnu (dewa pemelihara), dan Siwa (dewa pemusnah).</p><br>
                    <h6>Informasi</h6>
                    <ul>
                        <li>Pengunjung wajib menggunakan aplikasi PeduliLindungi</li>
                        <li>Anak di bawah 12 tahun diperbolehkan memasuki Candi Prambanan dengan didampingi orang tua yang sudah divaksin.</li>
                        <li>Sejak pertengahan 2020, pengunjung sudah tidak diperbolehkan naik ke candi. Jadi, hanya bisa sampai pelataran/halaman candi (zona 1).  Ketentuan ini mungkin akan berlaku</li>
                        <li>Pukul 15.00, pelataran Candi Prambanan (zona 1) akan dikosongkan dari pengunjung. Namun, kita diperbolehkan di zona 2 hingga pk 18.00.</li>
                        <li>Setiap hari Senin, pengunjung juga tidak bisa masuk ke halaman Candi  Prambanan. Jadi, hanya bisa sampai taman saja (zona 2).</li>
                        <li>Dilarang membawa makanan dan minuman dari luar.</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Back</button>
                <a href="/login"><button class="btn btn-primary" type="submit">Buy Now</button></a>
            </div>

        </div>
        </div>{{-- end.div modal dialog--}}
    </div> {{-- end.div modal fade  --}}


@stop
