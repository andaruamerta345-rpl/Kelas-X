<div class="float-start me-4">
    <a class="btn btn-primary" href="?f=menu&m=insert" role="button">Tambah data</a>
</div>
<h3>Menu</h3>
<?php 
    if (isset($_POST['opsi'])) {
        $opsi = $_POST['opsi'];
        $where = "WHERE idkategori = $opsi";
        // echo $opsi;
        // echo $where;
    }else{
        $opsi = 0;
        $where = "";
    }
?>

<div class="mt-4 mb-4">
    <?php 
        $kategori = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
    ?>
    <form action="" method="post">
        <select name="opsi" onchange="this.form.submit()" >
            <?php foreach($kategori as $r): ?>
                <option <?php if($r['idkategori']=$opsi) echo "selected" ?> value="<?= $r['idkategori'] ?>"><?= $r['kategori'] ?></option>
            <?php endforeach; ?>
        </select>
    </form>
</div>


<?php 
    $jumlahdata = $db -> rowCOUNT("SELECT idmenu FROM tblmenu $where");
    $banyak = 3;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
         $mulai = 0;
    }

    $sql = "SELECT * FROM tblmenu $where ORDER BY menu ASC LIMIT $mulai, $banyak";
    $row = $db->getALL($sql);
    $no = 1 + $mulai;

?>


<!-- <a href="?f=menu&m=insert">Tambah data</a> -->

<table class="table table-bordered w-80">

    <thead>
        <tr>
            <th>No</th>
            <th>menu</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            if (!empty($row)){
        ?>
        <?php 
        foreach($row as $r): 
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $r['menu'] ?></td>
                <td><?= $r['harga'] ?></td>
                <td>
                    <img width="190px" src="../upload/<?= $r['gambar'] ?>" alt="<?= $r['gambar'] ?>">
                </td>
                <td><a href="?f=menu&m=delete&id=<?= $r['idmenu'] ?>">Delete</a></td>
                <td><a href="?f=menu&m=update&id=<?= $r['idmenu'] ?>">Update</a></td>
            </tr>
        <?php endforeach ?>
        <?php } ?>
    </tbody>
</table>


<?php 

    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=menu&m=select&p='.$i.'">'.$i.'</a>'.'&nbsp &nbsp &nbsp';
    };
    echo '<br> <br>';

?>
