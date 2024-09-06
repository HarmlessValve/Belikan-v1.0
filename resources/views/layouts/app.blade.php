<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BELIKAN jember</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-fixed-top text-dark bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" width="150" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0 pe-5">
                    <li class="nav-item"><a class="nav-link active" href="/#">
                            <h3 style="color:#BB0502">Beranda</h3>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="/#layanan">
                            <h3>Layanan</h3>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="/#kontak">
                            <h3>Kontak</h3>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="/produk">
                            <h3>Produk</h3>
                        </a></li>
                    <li class="nav-item>"><button class="btn"><a class="text-reset me-2" href="/keranjang">
                                <i class="fas fa-shopping-cart fs-1 mb-1"></i></a></button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-dark" id="kontak">
        <!-- Section: Links  -->
        <section>
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <img src="logo.png" width="175" height="60" alt="">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
                        <p><i class="fas fa-home me-3"></i>Jember, jl. sriwijaya 2</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fab fa-instagram me-3"></i>@belikan.jember</p>
                    </div>>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Link
                        </h6>
                        <p>
                            <a href="/" class="text-reset">Beranda</a>
                        </p>
                        <p>
                            <a href="/#layanan" class="text-reset">Layanan</a>
                        </p>
                        <p>
                            <a href="/produk" class="text-reset">Produk</a>
                        </p>
                        <p>
                            <a href="/keranjang" class="text-reset">Keranjang</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Lokasi
                        </h6>
                        <div class="ratio ratio-16x9">
                            <iframe
                                class="shadow-1-strong rounded"
                                src="https://maps.app.goo.gl/cbXSmNt3p4NTDrxo7"
                                title="Maps"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>