<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tblkategori WHERE idkategori=$id";
        $row = $db -> getITEM($sql);


        // echo "Item yang anda pilih dengan ID :" . $id;
        // echo $sql;
    }


?>



<h3>update kategori</h3>
<div>
    <form action="" method="post">

        <div class="form-group w-50">
            <label for="">Nama Kategori :</label><br/>
            <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $row['kategori']  ?>" required>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="simpan" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    $sql = "UPDATE tblkategori SET kategori= '$kategori' WHERE idkategori=$id ";
    // echo $sql;
    $db -> runSQL($sql);
     echo "<div class='alert alert-success mt-3'>
            Kategori <strong>$kategori</strong> berhasil diupdate!
          </div>";

    echo "<meta http-equiv='refresh' content='2;url=?f=kategori&m=select'>";
    // header("location:?f=kategori&m=select");
}


?>

