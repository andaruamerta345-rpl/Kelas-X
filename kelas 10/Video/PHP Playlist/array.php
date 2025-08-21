<?php 

    //array dimensi

    $nama = array("Joni", "Tejo", "Budi", "Siti", 100, 2.5);
    
    var_dump($nama);
    echo "<br>";
 
    echo $nama[5] . "<br>"; // akses array


    // mengakses array dengan perulangan
    echo "<h3> Mengakses Array dengan Perulangan</h3>";
    for ($i=0;$i < 6 ; $i++){
        // echo $i . "<br>";
        echo $nama[$i] . "<br>";
    }

    // mengakses array dengan foreach
    echo "<h3> Mengakses Array dengan Foreach</h3>";    
    foreach ($nama as $key) {
        echo $key . "<br>";
    }

    echo "<hr>";

    // array asosiatif
    echo "<h3> Array Asosiatif</h3>";
    $nama = array(
        "Joni" => "Surabaya", 
        "Budi" => "Malang Raya",
        "Tejo" => "Jakarta",
        "Siti" => "Sidoarjo"
      // "key" => "value"
    );

    // cara lain membuat array asosiatif
    // $nama = [ "key" ]=> "value";
    // $nama = [ "key" => "value" ];
    // $nama = [ "key" => "value", "key2" => "value2" ];
    $nama["joni"] = "Surabaya";
    $nama["Budi"] = "Malang";
    $nama["Tejo"] = "Jakarta";
    $nama["Siti"] = "Sidoarjo";
    $nama["Edi"] = "Semarang";



    var_dump($nama);
    echo "<br>";    

    // echo $nama["Joni"] . "<br>";

    foreach ($nama as $key => $value) {
        echo $key . " => ". $value . "<br>";
    }

?>