<?php 
    require_once 'koneksi.php';

    $data = stripslashes(file_get_contents("php://input"));
    $idPelanggan = json_decode($data, true);

    $idpelanggan = $idPelanggan['idPelanggan'];

    $sql = "SELECT * FROM tblpelanggan WHERE idpelanggan = $idpelanggan";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
?>