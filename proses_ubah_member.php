<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp=$_POST['no_tlp'];

    if(empty($id_member)){
        echo "<script>alert('id member tidak boleh kosong');location.href='ubah_member.php';</script>";
    } elseif(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='ubah_member.php';</script>";

    } else {
        include "koneksi.php";
        if(empty($deskripsi)){
            $update=mysqli_query($conn,"update member set nama_member='".$nama_member."',alamat='".$alamat."',jenis_kelamin='".$jenis_kelamin."',no_tlp='".$no_tlp."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member=".$id_member."';</script>";
            }
        } 
            }
        }
?>
