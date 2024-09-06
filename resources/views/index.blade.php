@extends('layouts.app')

@section('content')

<!-- Beranda -->
<div class="container-fluid text-light" style="background-color:#0a0a0a;">
    <div class="row align-items-center">
        <div class="col-md-6 text-left ps-3">
            <h1 style="font-size: 50px;">Segarkan Hidangan Anda <br> dengan Ikan terbaik</h1>
            <br>
            <p style="font-size:15px">Belikan hadir untuk memberikan pengalaman<br>Berbelanja ikan segar yang mudah
                dan terpecaya.</p>
            <button type="button" class="btn btn-outline-light btn-lg rounded-0"><a class="nav-link" href="/produk">Beli
                    Sekarang</a></button>
        </div>
        <div class="col-md-6 text-left">
            <img src="Iwak.png" class="img-fluid">
        </div>
    </div>
</div>

<!-- Layanan -->
<div class="container-fluid text-dark pt-5" id="layanan">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 text-center pt-5">
            <h1 class="mb-3" style="font-size:35px">Layanan Kami</h1>
            <h5 class="mb-3">Segarkan Hidangan Anda dengan Ikan Terbaik.</h5>
        </div>
        <div class="card m-3 mb-5 border border-danger rounded" style="width: 25rem;">
            <img class="card-img-top mt-3" src="trek.png" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">Pengiriman Cepat</h3>
                <h6 class="card-text">Pengiriman dilakukan dengan cepat dan aman, sehingga Anda bisa menikmati ikan
                    segar seolah-olah baru ditangkap dari laut.</h6>
            </div>
        </div>
        <div class="card m-3 mb-5 border border-danger rounded" style="width: 25rem;">
            <img class="card-img-top mt-3" src="timbangan.png" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">Pemesanan Custom</h3>
                <h6 class="card-text">Menyediakan layanan untuk dapat memesan ikan sesuai kebutuhan, pelanggan dapat
                    memilih berat ikan dan opsi pengolahan</h6>
            </div>
        </div>
        <div class="card m-3 mb-5 border border-danger rounded" style="width: 25rem;">
            <img class="card-img-top mt-3" src="duit.png" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">Pembayaran Mudah</h3>
                <h6 class="card-text">Menyediakan layanan untuk pembayaran fleksibel, baik online melalui transfer
                    bank, atau e-wallet, maupun uang tunai</h6>
            </div>
        </div>
    </div>
</div>

<!-- Produk -->
<div class="container-fluid text-light mt-3 p-3" style="background-color:#0a0a0a;">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 text-center mt-5">
            <h1 class="mb-3" style="font-size:35px">Produk Terbaik</h1>
            <h5 class="mb-5">produk unggulan kami.</h5>
        </div>
        <div class="card m-3 border border-danger rounded" style="width: 20rem; height: 35rem;">
            <h5>Stock <span class="badge bg-danger mt-2">Habis</span></h5>
            <img class="card-img-top mt-1" src="udan.png" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">IWAK</h3>
                <h6 class="card-text">DeskripsiDeskripsiDeskripsiDeskripsiDeskripsiDeskripsiDeskripsi</h6>
                <select class="form-select form-select-lg mt-2 border border-danger rounded" style="color:#0a0a0a; width:200px">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button type="button" class="btn btn-danger btn-lg rounded mt-2" style="width:200px;">Tambahkan Ke Keranjang</button>
            </div>
        </div>
        <div class="card m-3 border border-danger rounded" style="width: 20rem; height: 35rem;">
            <h5>Stock <span class="badge bg-success mt-2">Tersedia</span></h5>
            <img class="card-img-top mt-1" src="udan.png" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">IWAK</h3>
                <h6 class="card-text">DeskripsiDeskripsiDeskripsiDeskripsiDeskripsiDeskripsiDeskripsi</h6>
                <select class="form-select form-select-lg mt-2 border border-danger rounded" style="color:#0a0a0a; width:200px">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button type="button" class="btn btn-danger btn-lg rounded mt-2" style="width:200px;">Tambahkan Ke Keranjang</button>
            </div>
        </div>
        <div class="card m-3 border border-danger rounded" style="width: 20rem; height: 35rem;">
            <h5>Stock <span class="badge bg-danger mt-2">Habis</span></h5>
            <img class="card-img-top mt-1" src="udan.png" alt="Card image cap">
            <div class="card-body text-center">
                <h3 class="card-title">IWAK</h3>
                <h6 class="card-text">DeskripsiDeskripsiDeskripsiDeskripsiDeskripsiDeskripsiDeskripsi</h6>
                <select class="form-select form-select-lg mt-2 border border-danger rounded" style="color:#0a0a0a; width:200px">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button type="button" class="btn btn-danger btn-lg rounded mt-2" style="width:200px;">Tambahkan Ke Keranjang</button>
            </div>
        </div>
    </div>
</div>
<!-- Testimoni -->
<div class="container-fluid text-dark mt-3 p-3">
    <div class="row align-items-center mt-5 mb-5">
        <div class="col-12 text-center mt-5">
            <h1 style="font-size:35px;">Testimoni kebahagiaan dari<br>
                <span style="font-size:35px; color:#BB0502;">Customer</span>
            </h1>
            <h5>Setiap cerita adalah bukti dari kebahagiaan yang kami berikan melalui pelayanan dan produk terbaik.</h5>
        </div>
        <section>
            <div class="row text-center">
                <div class="col-md-12">
                    <!-- Carousel wrapper -->
                    <div id="carouselBasicExample" class="carousel slide carousel-dark" data-bs-ride="carousel">
                        <!-- Inner -->
                        <div class="carousel-inner">
                            <!-- Single item -->
                            <div class="carousel-item active">
                                <div class="mt-5 mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                        class="rounded-circle img-fluid shadow-1-strong" alt="sample image" width="100"
                                        height="100" />
                                </div>
                                <p class="text-muted mb-0">- Anna Morian</p>
                                <h5 class="mx-4 mx-md-5 font-dark">
                                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam
                                    iure provident voluptate esse quasi, voluptas nostrum quisquam!"
                                </h5>
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item">
                                <div class="mt-5 mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                                        class="rounded-circle img-fluid shadow-1-strong" alt="sample image" width="100"
                                        height="100" />
                                </div>
                                <p class="text-muted mb-0">- Teresa May</p>
                                <h5 class=" mx-4 mx-md-5">
                                    "Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores
                                    repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing elit."
                                </h5>
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item">
                                <div class="mt-5 mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                        class="rounded-circle img-fluid shadow-1-strong" alt="sample image" width="100"
                                        height="100" />
                                </div>
                                <p class="text-muted mb-0">- Kate Allise</p>
                                <h5 class=" mx-4 mx-md-5">
                                    "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur est laborum neque cupiditate assumenda in maiores."
                                </h5>
                            </div>
                        </div>
                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection