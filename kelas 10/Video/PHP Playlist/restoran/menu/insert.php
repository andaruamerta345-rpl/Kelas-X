<?php 

    $row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");

?>

<h3>insert menu</h3>
<div class="forum-group">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group w-50 mb-5">
            <label for="">Kategori :</label><br/>
            <select name="idkategori" id="">
                <?php foreach ($row as $r):?>
                <option value="<?= $r['idkategori']  ?>"> <?= $r['kategori']  ?> </option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group w-50">
            <label for="">Nama menu :</label><br/>
            <input type="text" class="form-control" name="menu" id="menu" placeholder="isi menu" required> <br/>
        </div>

        <div class="form-group w-50">
            <label for="">Harga menu :</label><br/>
            <input type="text" number class="form-control" name="harga" id="harga" placeholder="isi harga menu" required> <br/>
        </div>

        <div class="form-group w-50">
            <label for="">Gambar menu :</label><br/>
            <input type="file" class="form-control" name="gambar" id="gambar" required > <br/>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="simpan" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $idkategori = $_POST['idkategori'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $temp = $_FILES['gambar']['tmp_name'];

    if (empty($gambar)) {
        echo '<h3>GAMBAR KOSONG</h3>';
    }else {
        $sql = "INSERT INTO tblmenu VALUES ('',$idkategori,'$menu','$gambar',$harga) ";
        move_uploaded_file($temp,'../upload/' . $gambar);
        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
           menu <strong>$menu</strong> berhasil ditambahkan!
           </div>";

        echo "<meta http-equiv='refresh' content='2;url=?f=menu&m=select'>";
    }

}


?>

