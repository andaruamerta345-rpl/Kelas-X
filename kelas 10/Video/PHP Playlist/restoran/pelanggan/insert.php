<!-- Mohon izin saya tambahkan sendiri untuk belajar -->


<?php 
    // Ambil kategori kalau perlu (nggak kepake di form pelanggan)
    $row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
?>

<h3>Insert Pelanggan</h3>
<div class="forum-group">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group w-50 mb-1">
            <label for="">Nama Pelanggan :</label><br/>
            <input type="text" class="form-control" name="pelanggan" id="pelanggan" placeholder="Isi nama pelanggan" required><br/>
        </div>

        <div class="form-group w-50 mb-1">
            <label for="">Alamat Pelanggan :</label><br/>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Isi alamat pelanggan" required><br/>
        </div>

        <div class="form-group w-50 mb-1">
            <label for="">No. Telp Pelanggan :</label><br/>
            <input type="number" class="form-control" name="telepon" id="telepon" placeholder="Isi no telp" required><br/>
        </div>

        <div class="form-group w-50 mb-1">
            <label for="">Email :</label><br/>
            <input type="email" class="form-control" name="email" id="email" placeholder="Isi email" required><br/>
        </div>

        <div class="form-group w-50 mb-1">
            <label for="">Password :</label><br/>
            <input type="password" class="form-control" name="password" id="password" placeholder="Isi password" required><br/>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
        </div>
    </form>
</div>

<?php 
if (isset($_POST['simpan'])) {
    $pelanggan = $_POST['pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $aktif = 1; // default aktif

    $sql = "INSERT INTO tblpelanggan (pelanggan, alamat, telp, email, password, aktif) 
            VALUES ('$pelanggan', '$alamat', '$telepon', '$email', '$password', $aktif)";
    $db->runSQL($sql);

    echo "<div style='
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 20px 40px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        font-size: 18px;
        z-index: 9999;
        text-align: center;
    '>
        Pelanggan <strong>$pelanggan</strong> berhasil ditambahkan!
    </div>";

    echo "<meta http-equiv='refresh' content='1;url=?f=pelanggan&m=select'>";
}
?>
