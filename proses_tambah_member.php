<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp=$_POST['no_tlp'];
    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($no_tlp)){
        echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_member,alamat,jenis_kelamin,no_tlp) value ('".$nama_member."','".$alamat."','".$jenis_kelamin."','".$no_tlp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}
?>
