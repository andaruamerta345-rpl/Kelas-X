<?php 

    if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";
    $item = $db -> getITEM($sql);

    $idkategori = $item['idkategori'];
    }
    $row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");

?>

<h3>update menu</h3>
<div class="forum-group">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group w-50 mb-5">
            <label for="">Kategori :</label><br/>
            <select name="idkategori" id="">
                <?php foreach ($row as $r):?>
                <option 
                    <?php if ($idkategori == $r['idkategori']) echo "selected"?>
                    value="<?= $r['idkategori']  ?>">
                    <?= $r['kategori']  ?>
                </option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group w-50">
            <label for="">Nama menu :</label><br/>
            <input type="text" class="form-control" name="menu" id="menu" value="<?= $item['menu'] ?>" required> <br/>
        </div>

        <div class="form-group w-50">
            <label for="">Harga menu :</label><br/>
            <input type="text" number class="form-control" name="harga" id="harga" value="<?= $item['harga'] ?>" required> <br/>
        </div>

        <div class="form-group w-50">
            <label for="">Gambar menu :</label><br/>
            <input type="file" class="form-control" name="gambar" id="gambar" > <br/>
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
        $gambar = $item['gambar'];
        $temp = $_FILES['gambar']['tmp_name'];

        if (!empty($temp)) {
             $gambar = $_FILES['gambar']['name'];
             move_uploaded_file($temp,'../upload/' . $gambar);
        }

        $sql = "UPDATE tblmenu SET idkategori = $idkategori , menu = '$menu' , gambar = '$gambar' , harga = $harga WHERE idmenu = $id";
        // echo $sql;

        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
        menu <strong>$menu</strong> berhasil di update!
        </div>";

        echo "<meta http-equiv='refresh' content='2;url=?f=menu&m=select'>";
    }
?>

