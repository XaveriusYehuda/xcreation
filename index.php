<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap".relI="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.php"><img src="static/images/logo.png" class="logo"></a>
                <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="/"><img src="static/images/logo.png" class="logo"></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4 active" aria-current="page" href="/">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="views/Product.php">PRODUK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="views/Portfolio.php">PORTOFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="views/About.php">TENTANG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="views/Contact.php">KONTAK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="nav-title d-flex flex-column flex-lg-row align-items-center">
            <div class="header-content-text">
                <h2>JASA PEMBUATAN WEBSITE PROFESIONAL</h2>
                <p>Jasa pembuatan website yang memiliki kualitas terbaik, fitur terlengkap dengan harga terjangkau. 
                Segera wujudkan website profesional yang cepat, menarik, aman, user-friendly sesuai impian Anda 
                dan bawa bisnis Anda ke dunia online.</p>
            </div>
            <div class="header-content-img">
                <img src="static/images/hc_beranda.png" alt=""class="img-fluid">
            </div>
        </div>
    </div>

    <section class="hero-section">   
        <div class="container d-flex flex-column">
            <h1 class="section-title">PAKET LAYANAN</h1> 
            <div class="d-flex flex-row justify-content-center">
                <div class="card-pack col-md-3.9">
                    <div class="card-wrapper">
                        <div class="title-pack">
                            <h3>PAKET SILVER</h3>
                        </div>
                        <div class="banner-image"> 
                            <img src="static/images/silverpack.png" alt="">
                        </div>
                        <h1 class="price-pack">Rp 1 JUTA</h1>
                        <p class="detail-pack">> Website yang mudah diakses <br>
                            > Cocok untuk portofolio sederhana <br>
                            > Website dibuat cepat </p>
                    </div>
                </div>
                <div class="card-pack col-md-3.9">
                    <div class="card-wrapper">
                        <div class="title-pack">
                            <h3>PAKET GOLD</h3>
                        </div>
                        <div class="banner-image"> 
                            <img src="static/images/goldpack.png" alt="">
                        </div>
                        <h1 class="price-pack">Rp 2 JUTA</h1>
                        <p class="detail-pack">> Desain yang profesional <br>
                            > Hosting yang aman dan cepat <br>
                            > Dapat request tampilan</p>
                    </div>
                </div>
                <div class="card-pack col-md-3.9">
                    <div class="card-wrapper">
                        <div class="title-pack">
                            <h3>PAKET DIAMOND</h3>
                        </div>
                        <div class="banner-image"> 
                            <img src="static/images/diamondpack.png" alt="">
                        </div>
                        <h1 class="price-pack">Rp 3 JUTA</h1>
                        <p class="detail-pack">> User Friendly & Responsive <br>
                            > Maintenance berkala <br>
                            > Fitur yang menyesuaikan kebutuhan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero-section">   
        <div class="container d-flex flex-column">
            <h1 class="section-title">LAYANAN TERSEDIA</h1> 
            <div class="second-section-card flex-row flex-wrap">
                <div class="card col-12">
                    <div class="row align-items-stretch">
                        <div class="fitur-class col-md-4 column">
                            <div class="fitur-pack">
                                <h3>FITUR</h3>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>4 Menu</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Hosting 500 MB</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Desain Standar</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Website SSL</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Integrasi sosial media</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Statistic Kunjungan Website</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Bergaransi Selamanya</p>
                            </div>
                        </div>
                        <div class="fitur-class col-md-4 column">
                            <div class="fitur-pack">
                                <h3>FITUR</h3>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>6 Menu</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Hosting 3 GB</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Desain Modern</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Website SSL</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Free Banner dan Logo</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Multi Bahasa</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Template WP Premium</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Bergaransi Selamanya</p>
                            </div>
                        </div>
                        <div class="fitur-class col-md-4 column">
                            <div class="fitur-pack">
                                <h3>FITUR</h3>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>10 Menu</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Hosting 5 GB</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Desain Unik/Bisa Request</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Website SSL</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Integrasi Lapak Media</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Optimasi UI/UX</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Free Support</p>
                            </div>
                            <div class="fitur-fitur">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Bergaransi Selamanya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero-section">   
        <div class="container d-flex flex-column">
            <h1 class="section-title">TESTI</h1> 
            <div class="d-flex flex-row flex-wrap justify-content-center">
                <div class="col-md-12 mb-3">
                    <div class="rating-card">
                        <div class="rating-card-item">
                            <div class="rating-value">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Jesicca Yulianti</h3>
                            <p>Pelayanan cepat, hasil memuaskan, desainnya keren, csnya juga ramah - ramah. Menurut saya sangat memuaskan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="rating-card">
                        <div class="rating-card-item">
                            <div class="rating-value">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Andrean Wibisono</h3>
                            <p>Terimakasih Pak untuk jasa pembuatan website, website sangat membantu dan profesionalismenya tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="rating-card">
                        <div class="rating-card-item">
                            <div class="rating-value">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Siska Ekawati</h3>
                            <p>Jasa sangat recomended sekali, dijamin tidak rugi dan sangat memuaskan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'layout/footer.html'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>