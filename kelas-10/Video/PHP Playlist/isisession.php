<?php  



    session_start();
    
    echo "Session dimulai. User: " . $_SESSION['user'] . "<br />";

    echo "Nama lengkap: " . $_SESSION['nama'] . "<br />";

    echo "Alamat: " . $_SESSION['alamat'] . "<br />";


    foreach ($_SESSION as $key => $value) {
        echo $key. " ==> ". $value .  "<br />";
    }



?>