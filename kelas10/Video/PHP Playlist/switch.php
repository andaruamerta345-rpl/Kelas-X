<?php 


    // Contoh penggunaan switch untuk menentukan hari dalam seminggu
    $hari = "1";// Ganti dengan nilai 1 sampai 7 untuk hari yang berbeda

    switch ($hari){
        case "1":
            echo "Hari Minggu";
            break;
        case "2":
            echo "Hari Senin";  
            break;
        case "3":   
            echo "Hari Selasa";
            break;
        case "4":
            echo "Hari Rabu";
            break;
        case "5":
            echo "Hari Kamis";
            break;
        case "6":
            echo "Hari Jumat";
            break;
        case "7":
            echo "Hari Sabtu";
            break;
        default:
            echo "Hari tidak valid";
            break;
    }

    echo "<hr>";

    // Contoh penggunaan switch untuk menentukan 

    $pilihan = "tambah";// Ganti dengan tambah, ubah, atau hapus untuk pilihan yang berbeda

    switch ($pilihan){
        case "tambah":
            echo "Anda memilih tambah";
            break;
        case "ubah":
            echo "Anda memilih ubah";  
            break;
        case "hapus":   
            echo "Anda memilih hapus";
            break;
        default:
            echo "Pilihan belum tersedia";
            break;
    }

?>