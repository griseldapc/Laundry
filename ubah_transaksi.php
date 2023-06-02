<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body{
      background-color: #ADD8E6;
      margin-top: 60px;
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
<?php
    include "koneksi.php";
    $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id']."'");
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
?>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Update Transaksi</div>
    <div class="card-body">
    <form action="proses_ubah_transaksi.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_transaksi" value= "<?=$dt_transaksi['id_transaksi']?>">
        <div class="form-group">
          <label>Status</label>
          <?php 
          $arr_transaksi=array('baru'=>'baru','proses'=>'proses','selesai'=>'selesai','diambil'=>'diambil');
          ?>
          <select name="status" class="form-control">
              <option></option>
              <?php foreach ($arr_transaksi as $key_transaksi => $val_transaksi):
                  if($key_transaksi==$dt_transaksi['status']){
                      $selek="selected";
                  } else {
                      $selek="";
                  }
              ?>
              <option value="<?=$key_transaksi?>" <?=$selek?>><?=$val_transaksi?></option>
              <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
        <label>Pembayaran</label>
          <?php 
          $arr_transaksi=array('belum dibayar'=>'belum dibayar','dibayar'=>'dibayar');
          ?>
          <select name="pembayaran" class="form-control">
              <option></option>
              <?php foreach ($arr_transaksi as $key_transaksi => $val_transaksi):
                  if($key_transaksi==$dt_transaksi['pembayaran']){
                      $selek="selected";
                  } else {
                      $selek="";
                  }
              ?>
              <option value="<?=$key_transaksi?>" <?=$selek?>><?=$val_transaksi?></option>
              <?php endforeach ?>
          </select>
        </div>
        <a href="histori_transaksi.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
        <input type="submit" name="simpan" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
</body>
</html>