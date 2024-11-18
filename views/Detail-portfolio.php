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
    <div class="contact-navigation">
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
                                <a class="nav-link mx-lg-4 active" href="Portfolio.php">PORTOFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4 " href="About.php">TENTANG</a>
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
                <h2>CianjurHosting.com</h2>
                <p>Sistem Informasi Rumah Sakit</p>
            </div>
        </div>
    </div>

    <section class="hero-section">   
        <div class="container d-flex flex-column justify-content-center">
            <div class="about-section flex-row flex-wrap">
                <div class="col-12">
                    <div class="row align-items-stretch">
                        <div class="col-md-6 column detail-porto-img-wrapper">
                            <div class="detail-porto-img">
                                <img src="../static/images/cianjur-hosting.png" alt="">
                            </div>
                        </div>    
                        <div class="col-md-6 column d-flex flex-column justify-content-center">
                            <div class="detail-porto-about-wrapper">
                                <p class="porto-detail-about">
                                    CianjurHosting.com merupakan sebuah website mengenai sistem informasi rumah sakit yang sudah statis dan dinamis.
                                </p>
                                <h3 class="porto-detail-about-title">Paket Silver</h3>
                                <div class="detail-paket-portofolio">
                                    <div class="detail-pack">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>10 Menu</p>
                                    </div>
                                    <div class="detail-pack">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>Hosting 5 GB</p>
                                    </div>
                                    <div class="detail-pack">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <p>Desain Unik/Bisa Request</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whatsapp-btn">
                            <button>
                                <i class="fa-brands fa-whatsapp"></i>
                                <p>Hubungi kami</p>
                            </button>
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