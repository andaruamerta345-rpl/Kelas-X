<h3>Registrasi Pelanggan</h3>
<div>
    <form action="" method="post">

        <div class="form-group w-50 mt-2">
            <label for="">Pelanggan :</label><br/>
            <input type="text" class="form-control" name="pelanggan" id="pelanggan" placeholder="isi nama pelanggan" required>
        </div>

        <div class="form-group w-50 mt-2">
            <label for="">Alamat :</label><br/>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="isi alamat pelanggan" required>
        </div>

        <div class="form-group w-50 mt-2">
            <label for="">No. Telp :</label><br/>
            <input type="text" class="form-control" name="telp" id="telp" placeholder="isi no. telp" required>
        </div>

        <div class="form-group w-50 mt-2">
            <label for="">Email User :</label><br/>
            <input type="email" class="form-control" name="email" id="email" placeholder="isi email" required>
        </div>
        
        <div class="form-group w-50 mt-2">
            <label for="">Password User :</label><br/>
            <input type="password" class="form-control" name="password" id="password" placeholder="isi password" required>
        </div>
        
        <div class="form-group w-50">
            <label for="">Konfirmasi Password User :</label><br/>
            <input type="password" class="form-control" name="konfirmasi" id="konfirmasi" placeholder="isi password konfirmasi" required>
        </div>

        

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="simpan" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $pelanggan = $_POST['pelanggan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if ($password === $konfirmasi) {
        $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$telp','$email','$password',1) ";
        // echo $sql;  
        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
                 user <strong>$pelanggan</strong> berhasil ditambahkan!
              </div>";

         echo "<meta http-equiv='refresh' content='2;url=?f=home&m=info'>";
    }else {
        echo "<h3 class='alert alert-danger mt-2'>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h3>";
    }
    }


?>

