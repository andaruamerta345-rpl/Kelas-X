<?php 

Session_start();



if (isset($_SESSION['email'], $_SESSION['password'])) {
    echo "Email sudah diatur dengan value: " . $_SESSION['email'] . "<br/>";
    echo "Password sudah diatur dengan value: " . $_SESSION['password'] . "<br/>";
    echo "<a href='logout.php'>Logout</a>" . "<br/>";
}else{
   echo "<a href='index.php'>Register</a>" . "<br/>";
   echo "<a href='index.php'>Login</a>" . "<br/>";
}
?>