<?php 

    $cookie_name = 'user';
    $cookie_value = 'joni';

    // Set cookie pertama
    setcookie($cookie_name, $cookie_value);

    // Update cookie jadi "Tejo"
    $cookie_value = 'Tejo';
    setcookie($cookie_name, $cookie_value);



    // Hapus cookie
    setcookie("user", "", time() - 3600);

    echo "<br>";
    var_dump($_COOKIE);

?>
