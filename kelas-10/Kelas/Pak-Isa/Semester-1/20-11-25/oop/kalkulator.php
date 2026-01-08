<?php 

class Kalkulator {
    public function tambah() {
        // return $a + $b;
        echo "Penjumlahan";
    }

    public function kurang() {
        // return $a - $b;
        echo "Pengurangan";
    }

    public function kali() {
        // return $a * $b;
        echo "Perkalian";
    }

    public function bagi() {
        // if ($b != 0) {
        //     return $a / $b;
        // } else {
        //     return "Error: Pembagian dengan nol tidak diperbolehkan.";
        // }
        echo "Pembagian";
    }
}


$hitung = new Kalkulator();
$hitung->tambah();
echo "<br/>";
$hitung->kurang();
echo "<br/>";
$hitung->kali();
echo "<br/>";
$hitung->bagi();



?>
