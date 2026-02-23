<?php 

    // echo "saya belajar PHP";

    function belajar() {
        echo "Saya belajar PHP";
    }

    // belajar();
    // belajar();

    function luasPersegi($p = 5,$l = 3 ) {

    $luas = $p * $l;

    echo "Luas Persegi Panjang = " . $luas . "<br>";

    }

    function luas($p = 5,$l = 3 ){
        $luas = $p * $l;

        return $luas;
    }

    // luasPersegi(1000,30);

    function output(){
        return "belajar function PHP";
    }

    // echo "<h1>" . output() . "</h1>";

    // luas();

    echo luas(100,3) * 5;


?>