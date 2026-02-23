<h3>Detail Pembelian</h3>
<div class="form-group">
    <form action="" method="post">

        <div class="form-group w-50 mt-2 float-left">
            <label for="">Tanggal Awal :</label><br/>
            <input type="date" class="form-control" name="tawal" id="tawal" required>
        </div>

        <div class="form-group w-50 mt-2 float-left">
            <label for="">Tanggal Akhir :</label><br/>
            <input type="date" class="form-control" name="takhir" id="takhir" required>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="Cari" name="simpan">
        </div>

    </form>
</div>

<?php 
    

    $jumlahdata = $db -> rowCOUNT("SELECT idorderdetail FROM vorderdetail");
    $banyak = 3;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
         $mulai = 0;
    }

    $sql = "SELECT * FROM vorderdetail ORDER BY idorderdetail DESC LIMIT $mulai, $banyak";

    if (isset($_POST['simpan'])) {
        $tawal = $_POST['tawal'];
        $takhir = $_POST['takhir'];

        $sql = "SELECT * FROM vorderdetail WHERE tglorder BETWEEN '$tawal' AND '$takhir' ";
        // echo $sql;
    }

    $row = $db->getALL($sql);
    $no = 1 + $mulai;
    $total = 0;

?>

<table class="table table-bordered w-70">

    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Alamat</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($row)){ ?>
        <?php foreach($row as $r): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $r['pelanggan'] ?></td>
                <td><?= $r['tglorder'] ?></td>
                <td><?= $r['menu'] ?></td>
                <td><?= $r['harga'] ?></td>
                <td><?= $r['jumlah'] ?></td>
                <td><?= "Rp. ".$r['jumlah'] * $r['harga'] . ",00" ?></td>
                <td><?= $r['alamat'] ?></td>

                <?php 
                    $total = $total + ($r['jumlah'] * $r['harga']);
                ?>

            </tr>
        <?php endforeach ?>
        <?php } ?>

        <tr>
            <td colspan="6"><h3>Grand Total</h3></td>
            <td ><h4 class="text-center"><?=$total?></h4></td>
            <td></td>
        </tr>

    </tbody>
</table>


<?php 

    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=orderdetail&m=select&p='.$i.'">'.$i.'</a>'.'&nbsp &nbsp &nbsp';
    };
    echo '<br> <br>';

?>
