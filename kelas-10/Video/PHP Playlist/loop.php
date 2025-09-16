<?php 

    echo "Perulangan dengan for <br>";

    for ($i = 1; $i <= 12; $i++)
    {
        echo "Perulangan ke-$i <br>";
    }
    //Untuk variabel i, mulai dari 1 hingga kurang dari atau sama dengan 12, setiap kali perulangan i ditambah 1, lalu jalankan perintah di dalam kurung kurawal.
    // 1,2,3,4,5,6,7,8,9,10,11,12

    echo "<hr>";

    
    for ($i = 1; $i <= 12; $i= $i + 2) {
        echo $i . ",";
    }
    //Untuk variabel i, mulai dari 1 hingga kurang dari atau sama dengan 12, setiap kali perulangan i ditambah 2, lalu jalankan perintah di dalam kurung kurawal.
    // 1,3,5,7,9,11
    
    echo "<hr>";

    for ($i = 12; $i > 1; $i--) {
        echo "Perulangan ke-$i <br>";
    }
    //Untuk variabel i, mulai dari 12 hingga lebih besar dari 1, setiap kali perulangan i dikurangi 1, lalu jalankan perintah di dalam kurung kurawal.
    // 12,11,10,9,8,7,6,5,4,3,2

    echo "<hr>";

    for ($i = 12; $i >= 1; $i = $i - 2) {
        echo "Perulangan ke-$i <br>";
    }
    //Untuk variabel i, mulai dari 12 hingga lebih besar dari 1, setiap kali perulangan i dikurangi 2, lalu jalankan perintah di dalam kurung kurawal.
    // 12,10,8,6,4,2    

   
    echo "<hr>";
    echo "<hr>";

    echo "Perulangan dengan while <br>";

    $a = 1;
    while ($a <= 10) {
        echo "Perulangan ke-$a <br>";
        $a++;
    }
    //Untuk variabel a, selama a kurang dari atau sama dengan 10, jalankan perintah di dalam kurung kurawal, lalu a ditambah 1.
    // 1,2,3,4,5,6,7,8,9,10

    echo "<hr>";
    echo "Perulangan dengan do while <br>";
    $a = 1; 
    do {
        echo "Perulangan ke-$a <br>";
        $a++;
    } while ($a <= 100);
    //Untuk variabel a, jalankan perintah di dalam kurung kurawal, lalu a ditambah 1, selama a kurang dari atau sama dengan 10.
    // 1,2,3,4,5,6,7,8,



    
?>