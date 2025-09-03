<h3>Menu</h3>
<?php 
    if (isset($_POST['opsi'])) {
    $opsi = $_POST['opsi'];
    if ($opsi == 0) {
        $where = ""; // semua menu
    } else {
        $where = "WHERE idkategori = $opsi";
    }
    } else {
        $opsi = 0;
        $where = "";
    }
    
?>

<div class="mt-4 mb-4">
    <?php 
        $kategori = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
    ?>
</div>

<?php 
    $jumlahdata = $db->rowCOUNT("SELECT idmenu FROM tblmenu $where");
    $banyak = 3;
    $halaman = ceil($jumlahdata / $banyak);

    $p = isset($_GET['p']) ? $_GET['p'] : 1;
    $mulai = ($p * $banyak) - $banyak;

    $sql = "SELECT * FROM tblmenu $where ORDER BY menu ASC LIMIT $mulai, $banyak";
    $row = $db->getALL($sql);
    $no = 1 + $mulai;
?>


<?php if (!empty($row)): ?>
    <?php foreach ($row as $r): ?>

        <div class="card m-2" style="width: 15rem; float:left;">
            <img style="height: 150px;" src="upload/<?= $r['gambar'] ?>" alt="<?= $r['gambar'] ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $r['menu'] ?></h5>
                <p class="card-text">Harga : <?= $r['harga'] ?></p>
                <a class="btn btn-primary" href="?f=kategori&m=insert" role="button">Beli</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<div style="clear:both;">
    <?php 
    for ($i = 1; $i <= $halaman; $i++) {
        echo '<a href="?f=home&m=produk&p=' . $i . '">' . $i . '</a>&nbsp;&nbsp;&nbsp;';
    }
    echo '<br><br>';
    ?>
</div>
