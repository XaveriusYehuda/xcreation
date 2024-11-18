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
     <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?
    family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
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
                                <a class="nav-link mx-lg-4 active" href="Product.php">PRODUK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="Portfolio.php">PORTOFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4 " href="About.php">TENTANG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4" href="Contact.php">KONTAK</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="nav-title d-flex flex-column flex-lg-row align-items-center">
            <div class="header-content-text">
                <h2>SOLUSI DIGITAL UNGGULAN</h2>
                <p>X-Code Creation adalah partner ideal Anda untuk pembuatan website, solusi custom, dan redesign. 
                    Tingkatkan pengalaman pengguna dan wujudkan visi digital Anda bersama kami!</p>
            </div>
            <div class="header-content-img">
                <img src="../static/images/hc_beranda.png" alt=""class="img-fluid">
            </div>
        </div>
    </div>

    <section class="hero-section">
        <div class="container d-flex flex-column">
            <h1 class="product-section-title">Produk Yang Tersedia</h1>
            <div class="product-container swiper">
                <div class="product-card-wrapper">
                    <ul class="product-card-list swiper-wrapper">
                        <li class="product-card-item swiper-slide">
                            <a href="#" class="product-card-link">
                                <img src="../static/images/hospital.png" alt="Card Image" class="product-card-image">
                                <h2 class="product-card-title">Website Rumah Sakit</h2>
                                <button class="consultation-btn">Diskusikan kebutuhan anda</button>
                            </a>
                        </li>
                        <li class="product-card-item swiper-slide">
                            <a href="#" class="product-card-link">
                                <img src="../static/images/hotel.png" alt="Card Image" class="product-card-image">
                                <h2 class="product-card-title">Website Rumah Sakit</h2>
                                <button class="consultation-btn">Diskusikan kebutuhan anda</button>
                            </a>
                        </li>
                        <li class="product-card-item swiper-slide">
                            <a href="#" class="product-card-link">
                                <img src="../static/images/sia-ksp-laravel.png" alt="Card Image" class="product-card-image">
                                <h2 class="product-card-title">Website Rumah Sakit</h2>
                                <button class="consultation-btn">Diskusikan kebutuhan anda</button>
                            </a>
                        </li>
                        <li class="product-card-item swiper-slide">
                            <a href="#" class="product-card-link">
                                <img src="../static/images/cafe.png" alt="Card Image" class="product-card-image">
                                <h2 class="product-card-title">Website Rumah Sakit</h2>
                                <button class="consultation-btn">Diskusikan kebutuhan anda</button>
                            </a>
                        </li>              
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <?php include '../layout/footer.html'; ?>
    <script src="../static/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper('.product-card-wrapper', {
            loop: false,
            spaceBetween: 30,

            // Responsive breakpoints
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 1.5
                },
                1024: {
                    slidesPerView: 2.5
                }
            }
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
