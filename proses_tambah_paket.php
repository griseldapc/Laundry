<?php 
include 'koneksi.php';
$jenis_paket = $_POST['jenis_paket'];
$harga = $_POST['harga'];
if(
		mysqli_query($conn, "INSERT INTO paket VALUES(NULL,'$jenis_paket','$harga')")){
		echo "<script>alert('Sukses menambahkan paket');location.href='paket.php';</script>";
	}
?>