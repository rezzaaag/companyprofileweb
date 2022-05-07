<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":email" => $email
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //print_r($stmt);die();

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            // header("Location: timeline.php");
            header("Location: home.php");
        }
    }
}
?>

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

    <title>Login</title>
</head>

<body>

    <!--============================================================================ NAVBAR ==========================================================-->
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
					<?php session_start();
					if($_SESSION["user"]["name"] == ''){ ?>
                        <li class="nav-item me-2 ms-4">
                            <a href="index.php" class="nav-link btn-custom-outline rounded" id="btn-sign">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="register.php" class="nav-link btn-custom rounded" id="btn-sign">Sign Up</a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link btn-custom rounded" id="btn-sign">Sign Out</a>
                        </li>
                        <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

<div class="container"  style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <input type="submit" class="btn btn-custom btn-block" name="login" value="Masuk" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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