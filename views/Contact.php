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
                                <a class="nav-link mx-lg-4" href="Portfolio.php">PORTOFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4 " href="About.php">TENTANG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-4 active" href="Contact.php">KONTAK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="nav-title d-flex align-items-center">
            <div class="port-header-content-text">
                <h2>KONTAK KAMI</h2>
                <p>Butuh website yang memukau? Hubungi kami sekarang! Komi siap membantu Anda mewujudkan website impian, 
                    Tim ahli kami akan memberikan solusi terbaik untuk bisnis Anda</p>
            </div>
        </div>
    </div>

    <section class="hero-section">   
        <div class="container d-flex flex-column justify-content-center">
            <div class="about-section flex-row flex-wrap">
                <div class="col-12">
                    <div class="row align-items-stretch">
                        <div class="col-md-7 column contact-form">
                            <div class="contact-form-section">
                                <div class="contact-title">
                                    <h3>Hubungi Kami</h3>
                                    <p>Punya pertanyaan? Jangan ragu untuk menghubungi kami melalui form ini.</p>
                                </div>
                                <div class="form-container">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" placeholder="Nomor Telepon">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="company" name="company" placeholder="Perusahaan/organisasi">
                                        </div>
                                    </form>
                                </div>
                                <div class="submit-btn">
                                    <button>Submit</button>
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-5 column contact-maps">
                            <div class="contact-maps-section">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2491.
                                    373709683403!2d110.39647018085904!3d-7.805658511787842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                                    1!3m3!1m2!1s0x2e7a5712e2bf3795%3A0x86cf09b8db7abac9!2sHead%20office%20-%20PT.
                                    %20Teknologi%20Server%20Indonesia%20(X-code%20Training%202)!5e0!3m2!1sen!2sid!4v1731848378960!5m2!1sen!2sid" 
                                    width="490" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                        <div class="whatsapp-btn">
                            <a href="https://wa.me/+6281382904130?text=Selamat%20Datang" target="_blank">
                                <button>
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <p>Hubungi kami</p>
                                </button>
                            </a> 
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