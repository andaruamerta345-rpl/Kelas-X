<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button"    data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="?menu=profil">Profil</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="?menu=sejarah">Sejarah</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="?menu=jurusan">Jurusan</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="?menu=prestasi">Prestasi</a>
                        </li>


                        <li class="nav-item">
                        <a class="nav-link" href="?menu=kegiatan">Kegiatan</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="?menu=kontak">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <?php 
                if (isset($_GET['menu'])) {
                    $isi = $_GET['menu'];

                    if ($isi == "sejarah"){
                        require_once "pages/sejarah.php";
                    }

                    if ($isi == "profil"){
                        require_once "pages/profil.php";
                    }

                    if ($isi == "jurusan"){
                        require_once "pages/jurusan.php";
                    }

                    if ($isi == "prestasi"){
                        require_once "pages/prestasi.php";
                    }

                    if ($isi == "kegiatan"){
                        require_once "pages/kegiatan.php";
                    }

                    if ($isi == "kontak"){
                        require_once "pages/kontak.php";
                    }

                }else{
                    require_once "pages/profil.php";
                }

                if (isset($_POST['tombol'])){
                    $nama = $_POST['nama'];
                    $pesan = $_POST['pesan'];
                    $email = $_POST['email'];

                    echo $nama;
                    echo "<br>";
                    echo $email;
                    echo "<br>";
                    echo $pesan;

                }
            ?>
        </section>

        <footer>
            <p>
                Web ini dibuat oleh Andaru
            </p>
        </footer>
    </div>
</body>
</html>