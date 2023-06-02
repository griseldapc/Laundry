<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        .container{
            width: 80%;
            margin: 0 auto;
            margin-top: 5vh;

        }
        .container h3{
            text-align: center;
            color : blue;
            font-family : 'Montserrat';
        }
        .container .form-btn{
            margin-top: 3vh;
            background-color: Black;
            padding: 10px;
        }
        .container .form-btn:hover{
            background-color: red;
            color: navy;
        }
    </style>

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
<body>

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
    </header>
        <!-- Header End -->

    <div class="container">
    <?php 
        include "koneksi.php";
        $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
        $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <h3>Ubah Paket</h3>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value= "<?=$dt_paket['id_paket']?>">
        Jenis Paket :
        <input type="text" name="jenis_paket" value= "<?=$dt_paket['jenis_paket']?>"class="form-control">
        Harga : 
        <input type="text" name="harga" value="<?=$dt_paket['harga']?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
        </form>

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
                                        <li><a href="#">Login As</a></li>
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
          <!-- Footer End-->
      </div>
  </footer>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
