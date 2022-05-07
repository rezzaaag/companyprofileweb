<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Landing Page</title>
</head>

<body>

    <!--============================================================================ Navbar ==========================================================-->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" height="35px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="home.php">Beranda</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="about.php">About</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="product.php">Product</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link btn-custom rounded" id="btn-sign">Sign Out</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <!--============================================================================ About ==========================================================-->
    
    <div class="container" style="margin-top: 150px;">
        <div class="row mb-5">
            <div class="col-lg-8 d-block d-lg-none">
                <img src="assets/vector-effortless.svg" width="80%">
            </div>

            <div class="col-lg-7">
                <div class="row">
                    <h2 class="bold-3">Tentang Kami</h2>
                    <div class="desc mt-5 mb-4">
                        <p>PT Neuronworks Indonesia adalah perusahaan yang bergerak di bidang teknologi informasi. Kami telah menyediakan solusi dari hulu sampai hilir yang dapat membantu perusahaan dalam menghadapi tantangan bisnis yang berkembang begitu cepat & dinamis. Saat ini lebih dari 100 proyek IT skala nasional maupun regional yang telah kami kerjakan. Salah satu klien kami dari luar negeri yaitu Telkomcel Timor Leste & Telin Malaysia.
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
                <img src="assets/vector-effortless.svg" width="100%">
            </div>

        </div>
    </div>
    
    <div class="container" style="margin-top: 150px;">
        <div class="row mb-6">
            <div class="col-lg-5 d-none d-lg-block">
                    <img src="assets/vector-marketer.svg" width="80%">
                </div>

            <div class="col-lg-7">
                <div class="row">
                    <h2 class="bold-3">Visi</h2>
                    <div class="desc mt-2 mb-2">
                        <p>Meningkatkan kinerja pelanggan dengan cara melakukan perbaikan, penyempurnaan dan kemajuan di segala sudut proses bisnis pelanggan melalui solusi IT yang unggul dan terbaik.</p>
                    </div>
                    <h2 class="bold-3">Misi</h2>
                    <div class="desc mt-2 mb-2">
                        <p>Membantu mempersiapkan pondasi kokoh bagi pelanggan agar tercapai potensi bisnis yang penuh melalui Tekhnologi Informasi.</p>
                        <p>Melakukan inovasi secara terus menerus terhadap produk dan pelayanan untuk pencapaian tertinggi dalam setiap solusi.</p>
                        <p>Memberikan solusi Tekhnologi Informasi yang handal sehingga pelangan akan lebih mudah dalam menyelesaikan pekerjaan sehari-hari.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="position-relative">
        <img src="assets/bg-feature.svg" width="100%" class="bg-feature">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <h1 class="h2 bold-3 my-5 max-width-5x text-center"></h1>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-purple mb-4 mx-auto">
                                <i class="fas fa-mouse-pointer text-white ms-1"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3 text-center">Inovasi Untuk Solusi</h5>
                            <p class="card-text text-center">Selalu senang dan penuh semangat dalam menemukan inovasi & memberikan solusi untuk pelanggan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-yellow mb-4 mx-auto">
                                <i class="fas fa-pen-nib text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3 text-center">Kepuasan Pelanggan</h5>
                            <p class="card-text text-center">Melayani pelanggan dengan sepenuh hati, selalu mengutamakan win-win solution, dan memberikan pelayanan terbaik dalam waktu 24 jam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-red mb-4 mx-auto">
                                <i class="fas fa-heart text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3 text-center">Aplikasi Handal</h5>
                            <p class="card-text text-center">Berkomitmen untuk selalu fokus dan disiplin dalam mengikuti prinsip-prinsip keilmuan dalam mengembangkan reliable software agar terciptanya zero bug software.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <!--============================================================================ Footer ==========================================================-->
    <br><br><br>
    <div class="col-sm-12">
	    <div class="row mx-auto">
			<h3 class="wow fadeIn smaller text-center mb-5" data-wow-delay="0.2s" data-wow-offset="100" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">Get in touch with us</h3>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                    <a href="https://www.youtube.com/embed/Rxf0LcGJVus" target="_blank" class="wow fadeIn" data-wow-delay="0.1s" data-wow-offset="100"><i class="fab fa-youtube"></i> Neuronworks Indonesia</a>
                </div>
                <div class="col-sm-2">
                    <a href="https://instagram.com/neuronworks/" target="_blank" class="wow fadeIn" data-wow-delay="0.2s" data-wow-offset="100"><i class="fab fa-instagram"></i> @neuronworks</a>
                </div>
                <div class="col-sm-2">
                    <a href="https://linkedin.com/company/neuronworks-pt/" target="_blank" class="wow fadeIn" data-wow-delay="0.3s" data-wow-offset="100"><i class="fab fa-linkedin"></i> PT Neuronworks Indonesia</a>
                </div>
                <div class="col-sm-2">
                    <a href="https://www.facebook.com/neuronworks/" target="_blank" class="wow fadeIn" data-wow-delay="0.4s" data-wow-offset="100"><i class="fab fa-facebook-square"></i> PT Neuronworks Indonesia</a>
                </div>
                <div class="col-sm-2">
                    <a href="https://twitter.com/neuronworks" target="_blank" class="wow fadeIn" data-wow-delay="0.4s" data-wow-offset="100"><i class="fab fa-twitter"></i> @neuronworks</a>
                </div>
                <div class="col-sm-1">
                </div>
	    </div>	
    </div>
    <br>

    <div class="container">
        <hr class="my-5">
        <div class="row mb-5">

            <div class="col-lg-3">
                <a href="#">
                    <img src="assets/logo.png" height="35px">
                </a>
                <h6><br></h6>
            </div>
            <div class="col-lg-3">
                <p>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>
                        Komp. Buah Batu Regency A2 No.9 - 10 Kel. Kujangsari / Cijawura Kec. Bandung Kidul, Bandung, Jawa Barat, Indonesia.
                    </span>
                </p>
                <p>
                    <i class="fas fa-phone"></i>
                    <span>
                        (022)-87309898
                    </span>
                </p>
                <p>
                    <i class="fas fa-mobile"></i>
                    <span>
                        085159380018
                    </span>
                </p>
                <p>
                    <i class="far fa-envelope"></i>
                    <span>
                        support@neuronworks.co.id
                    </span>
                </p>
            </div>
			<div class="col-sm-6">
				<iframe class="rounded wow fadeIn" data-wow-delay="0.2s" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.631555418282!2d107.6406776!3d6.9611166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x9e9de9facb11ffc5!2sPT Neuronworks Indonesia!5e0!3m2!1sen!2sid!4v1641461814943!5m2!1sen!2sid" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
            <div class="col-12">
	            <address class="footer c-gray wow fadeIn text-center" style="margin-top: 50px;" data-wow-delay="0.2s">&copy;Copyright 19552011362 - Rezza Agustin - TIF K 19 CIDB</address>
            </div>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

</body>

</html>