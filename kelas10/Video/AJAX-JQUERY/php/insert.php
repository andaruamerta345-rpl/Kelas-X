<?php 
    $data = stripslashes(file_get_contents("php://input"));
    $dataPelanggan = json_decode($data, true);

    $pelanggan = $dataPelanggan['pelanggan'];
    $alamat    = $dataPelanggan['alamat'];
    $telp      = $dataPelanggan['telp'];

    require_once 'koneksi.php';

    if(!empty($pelanggan) && !empty($alamat) && !empty($telp)) {
        $sql = "INSERT INTO tblpelanggan (pelanggan, alamat, telp) 
            VALUES ('$pelanggan','$alamat','$telp')";

        if ($result = mysqli_query($con, $sql)) {
            echo '
            <div class="alert alert-success" role="alert">
                Data Anda Berhasil Disimpan Tuan :)
            </div>';
        } else {
            echo '
            <div class="alert alert-danger" role="alert">
                Data Anda Gagal Disimpan Tuan :(
            </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Data Harus Diisi Semua Tuan :(
            </div>';
    }

?>
