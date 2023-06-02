<?php
  include "header.php";
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
   

<br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2 align = "center">HISTORI TRANSAKSI</h2>
        <form method="POST" action="histori_transaksi.php" class="d-flex">
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama User</th>
        <th scope="col">Nama Member</th>
        <th scope="col">Jenis Paket</th>
        <th scope="col">QTY</th>
        <th scope="col">Subtotal</th>
        <th scope="col">Total</th>
        <th scope="col">Tanggal laundry</th>
        <th scope="col">Tanggal selesai</th>
        <th scope="col">Tanggal bayar</th>
        <th scope="col">Status</th>
        <th scope="col">Pembayaran</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select * from transaksi  join member on transaksi.id_member = member.id_member join user on transaksi.id_user=user.id_user order by id_transaksi desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan paket laundry yang dipilih
            $paket="<ol>";
            $subtotal="<ol>";
            $qty="<ol>";
            $qry_paket=mysqli_query($conn,"select * from  detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where id_transaksi = '".$dt_histori['id_transaksi']."'");
            while($dt_paket=mysqli_fetch_array($qry_paket)){
                $paket.=$dt_paket['jenis_paket']."<br>";
                $subtotal.=$dt_paket['subtotal']."<br>";
                $qty.=$dt_paket['qty']."<br>";
                
            }
            $paket.="</ol>";
            $subtotal.="</ol>";
            $qty.="</ol>";

            $qry_total=mysqli_query($conn,"select sum(subtotal) from detail_transaksi where detail_transaksi.id_transaksi = '".$dt_histori['id_transaksi']."'");
            if($dt_total=mysqli_fetch_array($qry_total)){
                $total= implode($dt_total);
            }
            $qry_cek_bayar=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$dt_histori['id_transaksi']."'");
            if(mysqli_num_rows($qry_cek_bayar)>0){
                $dt_bayar=mysqli_fetch_array($qry_cek_bayar);
                
                $status="<label class='alert alert-success'>".$dt_histori['status']."</label>";
                $button_update="<a href='ubah_transaksi.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning'>Update</a>";
                
            } else {
            }
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_histori['nama_user']?></td>
                <td><?=$dt_histori['nama_member']?></td>
                <td><?=$paket?></td>
                <td><?=$qty?></td>
                <td><?=$subtotal?></td>
                <td><?=$dt_total['sum(subtotal)']?></td>
                <td><?=$dt_histori['tanggal_transaksi']?></td>
                <td><?=$dt_histori['batas_waktu']?></td>
                <td><?=$dt_histori['tanggal_bayar']?></td>
                <td>
                <?php
                    if($dt_histori['status'] == 'baru'){
                        echo '<div class="alert alert-danger" role="alert">Baru</div>';
                    } elseif($dt_histori['status'] == 'proses') {
                        echo '<div class="alert alert-primary" role="alert">Proses</div>';
                    }elseif($dt_histori['status'] == 'selesai') {
                        echo '<div class="alert alert-warning" role="alert">Selesai</div>';
                    }elseif($dt_histori['status'] == 'diambil') {
                        echo '<div class="alert alert-success" role="alert">Diambil</div>';
                    }
                    ?>  
                </td>
                <td>
                    <?php
                    if($dt_histori['tanggal_bayar'] == '0000-00-00'){
                        echo '<div class="alert alert-danger" role="alert">Belum Dibayar</div>';
                    } else {
                        echo '<div class="alert alert-success" role="alert">Dibayar</div>';
                    }
                    ?>    
                </td>
                <td><?=$button_update?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
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
</body>
</html>