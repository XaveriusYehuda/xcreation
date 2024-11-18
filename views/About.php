<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
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
                <a href="../index.php"><img src="../static/images/logo.png" class="logo"></a>
                <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="../index.php"><img src="../static/images/logo.png" class="logo"></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" aria-current="page" href="../">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="Product.php">PRODUK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="Portfolio.php">PORTOFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4 active" href="About.php">TENTANG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="Contact.php">KONTAK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="nav-title d-flex align-items-center">
            <div class="port-header-content-text">
                <h2>TENTANG KAMI</h2>
            </div>
        </div>
    </div>

    <section class="hero-section">   
        <div class="container d-flex flex-column justify-content-center">
            <div class="about-section flex-row flex-wrap">
                <div class="col-12">
                    <div class="row align-items-stretch">
                        <div class="col-md-6 column d-flex flex-column justify-content-center">
                            <div class="about-img">
                                <img src="../static/images/logo.png" alt="">
                            </div>
                            <div class="about-title">
                            <h1>
                                <span class="highlight">Website</span> <span class="normal">Impian</span><span class="normal-coma">,</span> <br>
                                <span class="highlight">Solusi</span> <span class="normal">Nyata!</span> 
                            </h1>

                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="about-img-second">
                                <img src="../static/images/about.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section">   
        <div class="container d-flex flex-column justify-content-center">
            <div class="about-card-row row mb-4">
                <div class="col-md-3">
                    <div class="about-card">
                        <div class="card-body row d-flex align-items-center">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <img src="../static/images/first-about.png" alt="Harga Terbaik" class="img-fluid">
                            </div>
                            <div class="text-about-card col-9 d-flex flex-column justify-content-center">
                                <h5 class="card-title">Harga Terbaik</h5>
                                <p class="card-text">Dapatkan harga yang menguntungkan dan kualitas yang terjamin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-card">
                        <div class="card-body row d-flex align-items-center">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <img src="../static/images/second-about.png" alt="Analisis Keuangan" class="img-fluid">
                            </div>
                            <div class="text-about-card col-9 d-flex flex-column justify-content-center">
                                <h5 class="card-title">Analisis Keuangan</h5>
                                <p class="card-text">Kami melakukan analisis risiko keuangan secara berkala.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-card">
                        <div class="card-body row d-flex align-items-center">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <img src="../static/images/third-about.png" alt="Tim Profesional" class="img-fluid">
                            </div>
                            <div class="text-about-card col-9 d-flex flex-column justify-content-center">
                                <h5 class="card-title">Tim Profesional</h5>
                                <p class="card-text">Pakar di bidangnya siap membantu pembuatan website anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Baris kedua dengan 2 card -->
            <div class="about-card-second-row row">
                <div class="col-md-5">
                    <div class="about-card-second">
                        <div class="card-body">
                            <h3 class="card-title">VISI</h3>
                            <p class="card-text">Menjadi pionir dalam pengembangan solusi digital yang inovatif dan relevan dengan kebutuhan pasar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-card-second">
                        <div class="card-body">
                            <h3 class="card-title">MISI</h3>
                            <p class="card-text">Terus mengembangkan keahlian dan teknologi untuk memberikan solusi digital yang terbaik dan terdepan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include '../layout/footer.html'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>