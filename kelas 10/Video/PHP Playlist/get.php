<form action="" method="get">
<label for="nama">Nama:</label><br />
<input type="text" id="nama" name="nama" /><br />

<label for="alamat">Alamat:</label><br />
<input type="text" id="alamat" name="alamat"/><br />

<input type="submit" name="kirim" value="simpan" />
</form>


<?php 

    if (isset($_GET['kirim'])) {
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];

    echo "Nama: ". $nama . "<br />";
    echo "Alamat: ". $alamat . "<br />";
    //isset() digunakan untuk mengecek apakah variabel sudah didefinisikan atau belum
    //Jika sudah didefinisikan, maka akan mengembalikan nilai true, jika belum didefinisikan maka akan mengembalikan nilai false
    } else {
        echo "Silahkan isi form di atas";    
    }

  

?>