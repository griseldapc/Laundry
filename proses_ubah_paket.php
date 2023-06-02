<?php
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis_paket=$_POST['jenis_paket'];
    $harga=$_POST['harga'];
    
    if(empty($jenis_paket)){
        echo "<script>alert('jenis paket tidak boleh kosong');location.href='ubah_paket.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='ubah_paket.php';</script>";

    } else {
        include "koneksi.php";
        if(empty($deskripsi)){
            $update=mysqli_query($conn,"update paket set jenis_paket='".$jenis_paket."',harga='".$harga."' where id_paket = '".$id_paket."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        } 
            }
        }
?>
