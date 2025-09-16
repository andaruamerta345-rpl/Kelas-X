<?php 

    $tanggal = 0;// Ubah nilai ini untuk menguji kondisi

    // $hasil = $tanggal > 0;
    // $hasil = $tanggal < 32;
    // echo $tanggal;

    /*
    if ($tanggal < 32) {
        if ($tanggal > 0) {
            echo "Benar";
        } else {
            echo "Salah";
        }
    } else {
        echo " Salah.";
    }
    */

    $nilai = 101; // Ubah nilai ini untuk menguji kondisi

    // Cek apakah nilai berada dalam rentang 0 hingga 100 tanpa menggunakan operator logika
    echo "<h1>If-Else tanpa operasi logika</h1>";


    if ($nilai <= 100){

       if ($nilai >= 0) {
           echo "Nilai benar" . "<br>";
        } else {
            echo "Nilai salah" . "<br>";
        }

    } else {
        echo "Nilai salah" . "<br>";
    }

    echo "<hr>";

    // Cek apakah nilai berada dalam rentang 0 hingga 100 menggunakan operator logika
    echo "<h1>If-Else dengan operasi logika</h1>";



     // Menggunakan operator logika "AND" untuk memeriksa rentang nilai
    if($nilai >= 0 && $nilai <= 100) {
        echo "Nilai benar" . "<br>";
    } else {
        echo "Nilai salah" . "<br>";
    }// Kedua kondisi harus benar agar hasilnya benar


    // Menggunakan operator logika "OR" untuk memeriksa rentang nilai
    if($nilai >=100 || $nilai <= 0) {
        echo "Nilai salah" . "<br>";
    } else {
        echo "Nilai benar" . "<br>";
    }// Salah satu kondisi harus benar agar hasilnya benar

?>