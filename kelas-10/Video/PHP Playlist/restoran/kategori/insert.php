<h3>insert kategori</h3>
<div class="form-group">
    <form action="" method="post">

        <div class="form-group w-50">
            <label for="">Nama Kategori :</label><br/>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="isi kategori" required>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="simpan" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    $sql = "INSERT INTO tblkategori VALUES ('','$kategori') ";
    // echo $sql;
    $db -> runSQL($sql);
     echo "<div class='alert alert-success mt-3'>
            Kategori <strong>$kategori</strong> berhasil ditambahkan!
          </div>";

    // Redirect otomatis setelah 2 detik
    echo "<meta http-equiv='refresh' content='2;url=?f=kategori&m=select'>";
    // header("location:?f=kategori&m=select");
}


?>

