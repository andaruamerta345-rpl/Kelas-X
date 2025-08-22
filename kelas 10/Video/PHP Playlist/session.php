<nav>
    <ul>
        <li><a href="?menu=isi">Isi</a></li>
        <li><a href="?menu=hapus">Hapus</a></li>
        <li><a href="?menu=destroy">Destroy</a></li>
    </ul>
</nav>


<?php 
//session adalah tempat penyimpanan data sementara yang digunakan untuk menyimpan informasi pengguna selama sesi mereka di situs web.
// session dimulai dengan memanggil session_start()
// data yang disimpan dalam session akan tetap ada selama browser terbuka atau sampai session diakhiri.
// session dapat digunakan untuk menyimpan informasi seperti nama pengguna, preferensi, atau data lain yang perlu diakses di beberapa halaman.
// untuk mengakses session, kita dapat menggunakan variabel superglobal $_SESSION. 
// untuk mengakhiri session, kita dapat menggunakan session_destroy().


    session_start();

    var_dump($_SESSION);
    echo "<br />";
       
    
    if (isset($_GET['menu'])) {
       $menu = $_GET['menu'];

       echo "Menu yang dipilih: " . $menu . "<br />";
     
       switch ($menu) {
           case 'isi':
               isiSession();
               break;
           case 'hapus':
               unset($_SESSION['user']); //hapus session user
               unset($_SESSION['nama']); //hapus session nama
               unset($_SESSION['alamat']); //hapus session alamat

               //unset untuk hapus session sesuai yang diinginkan
               echo "Session data telah dihapus.<br />";
               break;
           case 'destroy':
               session_destroy();
               //destroy menghapus semua session tanpa terkecuali
               echo "Session telah dihancurkan.<br />";
               break;
           default:
               echo "Menu tidak dikenal.<br />";
       }
    }




    function isiSession(){

    $_SESSION['user'] = "Joni";

    $_SESSION['nama'] = "joni rambo";

    $_SESSION['alamat'] = "Sidoarjo";


    };

?>