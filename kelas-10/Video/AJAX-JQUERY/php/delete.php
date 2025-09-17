<?php 
    $data = stripslashes(file_get_contents("php://input"));
    $idPelanggan = json_decode($data, true);

    $idpelanggan = $idPelanggan['idPelanggan'];

    require_once 'koneksi.php';

    if(!empty($idpelanggan)) {
        $sql = "DELETE FROM tblpelanggan WHERE idpelanggan = $idpelanggan";
        if ($result = mysqli_query($con, $sql)) {
            echo '
            <div class="alert alert-success" role="alert">
                Data Anda Berhasil Di Hapus Tuan :)
            </div>';

        } else {
            echo '
            <div class="alert alert-danger" role="alert">
                Data Anda Gagal Di Hapus Tuan :(
            </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Data Belum Dipilih Tuan :(
            </div>';
    }

?>
