<?php 

    require_once "../function.php";

    // $id = 3;
    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql,);
    echo $sql;

    header("location:http://localhost/Kelas-X/kelas%2010/Video/PHP%20Playlist/restoran/kategori/select.php");


?>