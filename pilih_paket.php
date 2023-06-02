<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_paket=mysqli_query($conn,"select * from paket where id_paket ");
    $dt_paket=mysqli_fetch_array($qry_detail_paket);
?>
<h2>PILIH Paket</h2>
<div class="row">
    <div class="col-md-8">
        <form action="masukkan_keranjang.php?id_paket=<?=$dt_paket['id_paket']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Pilih Paket</td>
                        <td>
                        <select name="jenis_paket" class="form-control">
                        <option></option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed-cover</option>
                        <option value="kaos">Kaos</option>
                        </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Jumlah Paket</td>
                        <td><input type="number" name="qty" value="1"></td>
                    </tr>

                </thead>
            </table>
            <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Pesan"></td>
                    </tr>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
