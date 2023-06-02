<?php 
    if($_POST){
        $username=$_POST['username'];
      
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='transaksi.php';</script>";
        } else {
            include "koneksi.php";
            $qry_transaksi = mysqli_query($conn,"select * from user where username = '".$username."'");
            if(mysqli_num_rows($qry_transaksi)>0){
                $dt_transaksi = mysqli_fetch_array($qry_transaksi);
                session_start();

                if(mysqli_num_rows($qry_transaksi)>0){
                    $dt_transaksi=mysqli_fetch_array($qry_transaksi);
                    session_start();
                    $_SESSION['id_user']=$dt_transaksi['id_user'];
                    $_SESSION['nama_user']=$dt_transaksi['nama_user'];
                    $_SESSION['status_transaksi']=true;
                    header("location: transaksii.php");
                } else {
                    echo "<script>alert('Username tidak benar, coba lagi');location.href='transaksi.php';</script>";
                }

                
            }
    }
}
?>