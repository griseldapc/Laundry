<?php
  include "header.php";
  ?>
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
            color : black;
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


    <div class="container">
    <h3>List MEMBER Laundry KYUT</h3>
    <br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NAMA MEMBER</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>NO Tlp</th>
                <th>AKSI</th>
            </tr>
        </thead>
    <tbody>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
            $no++;
            ?>
            <tr>
                <td><?=$data_member['nama_member']?></td>
                <td><?=$data_member['alamat']?></td>
                <td><?=$data_member['jenis_kelamin']?></td>
                <td><?=$data_member['no_tlp']?></td>
                <td>
                    <a href="ubah_member.php?id_member=<?=$data_member['id_member']?>" 
                    class="btn btn-success">Ubah</a> | 
                    <a href="hapus_member.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data MEMBER ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_member.php" class="btn btn-primary">Tambah Member</a>

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
          <!-- Footer End-->
      </div>
  </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

