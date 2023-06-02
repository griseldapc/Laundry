<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!Doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laundryen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/water-drop.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo-no-background.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="home.php"><img src="assets/img/logo/inilaundry.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="home.php">Home</a></li>
                                                <li><a href="user.php">User</a></li>
                                                <li><a href="member.php">Member</a></li>
                                                <li><a href="paket.php">Package</a></li>
                                                <li><a href="#">Service</a>
                                                    <ul class="submenu">
                                                        <li><a href="data.php">Transaction</a></li>
                                                        <li><a href="histori_transaksi.php">Transaction History</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="logout.php">Log Out</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="contact.html" class="btn header-btn"><img src="assets/img/icon/smartphone.svg" alt=""> +62 812 4969 9404</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

<br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>KERANJANG</h1>
        <form method="POST" action="keranjangg.php" class="d-flex">
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Member</th>
            <th scope="col">Paket</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_paket => $val_paket):
        ?>
            <tr>
                <td><?=($key_paket+1)?></td>
                <td><?=$val_paket['nama_member']?></td>
                <td><?=$val_paket['paket']?></td>
                <td><?=$val_paket['qty']?></td>
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger">
                <strong>X</strong></a></td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>
<a href="transaksii.php" class="btn btn-primary">Tambah</a>
<a href="checkout.php" class="btn btn-success">Check Out</a>

<footer>
        <div class="footer-wrapper section-bg2"  data-background="assets/img/gallery/footer-bg.png">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="assets/img/logo/inilaundry.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Offers several types of laundry services<br>
                                                fast, clean and fragrant.</p>
                                        </div>
                                        <ul class="mb-40">
                                            <li class="number"><a href="#">+62 812 4969 9404</a></li>
                                            <li class="number2"><a href="#">contact@laundryen.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Opening hour</h4>
                                    <ul>
                                        <li><a href="#">Mon-Fri (9.00-19.00)</a></li>
                                        <li><a href="#">Sat (12.00-19.00)</a></li>
                                        <li><a href="#">Sun <span>(Closed)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navigation</h4>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Package</a></li>
                                        <li><a href="#">User</a></li>
                                        <li><a href="#">Member</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      </div>
  </footer>
  </body>
</html>