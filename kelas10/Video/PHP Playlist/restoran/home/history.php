<?php 
    $email = $_SESSION['pelanggan'];
    $jumlahdata = $db -> rowCOUNT("SELECT idorder FROM vorder WHERE email = '$email'");
    $banyak = 2;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
         $mulai = 0;
    }

    $sql = "SELECT * FROM vorder WHERE email = '$email' ORDER BY tglorder DESC LIMIT $mulai, $banyak";
    $row = $db->getALL($sql);
    $no = 1 + $mulai;

?>

<h3>History Pembelian</h3>

<!-- <a href="?f=kategori&m=insert">Tambah data</a> -->

<table class="table table-bordered w-50">

    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Detail</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($row)){ ?>
        <?php foreach($row as $r): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $r['tglorder'] ?></td>
                <td><?= "Rp. ".$r['total'] . ",00" ?></td>
                <td><a href="?f=home&m=detail&id=<?= $r['idorder'] ?>">Detail</a></td>
            </tr>
        <?php endforeach ?>
        <?php } ?>
    </tbody>
</table>


<?php 

    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=home&m=history&p='.$i.'">'.$i.'</a>'.'&nbsp &nbsp &nbsp';
    };
    echo '<br> <br>';

?>
