<?php 
    $data = stripslashes(file_get_contents("php://input"));
    $dataPelanggan = json_decode($data, true);

    $idpelanggan = $dataPelanggan['idpelanggan'];
    $pelanggan = $dataPelanggan['pelanggan'];
    $alamat    = $dataPelanggan['alamat'];
    $telp      = $dataPelanggan['telp'];

    require_once 'koneksi.php';

    if(!empty($pelanggan) && !empty($alamat) && !empty($telp)) {
        $sql = "UPDATE tblpelanggan SET pelanggan='$pelanggan', alamat='$alamat', telp='$telp' WHERE idpelanggan = $idpelanggan";

        if ($result = mysqli_query($con, $sql)) {
            echo '
            <div class="alert alert-success" role="alert"> 
                Data Anda Berhasil Di Update Tuan :)
            </div>';
        } else {
            echo '
            <div class="alert alert-danger" role="alert">
                Data Anda Gagal Di Update Tuan :(
            </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Data Harus Diisi Semua Tuan :(
            </div>';
    }

?>
