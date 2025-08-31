<form action="" method="post">

    <label for="kategori">kategori</label>
    <input type="text" name="kategori" id="kategori"> <br/>

    <input type="submit" name="simpan" value="simpan">

</form>



<?php 

    require_once "../function.php";

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        echo "Data yang ditambahkan adalah : " . $kategori . '<br/>'; 

        //  $kategori = 'Es mambo';
         $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
         $result = mysqli_query($koneksi,$sql);
        //  echo "Data telah ditambahkan ";
        header("location:http://localhost/Kelas-X/kelas%2010/Video/PHP%20Playlist/restoran/kategori/select.php");
    }

    


?>