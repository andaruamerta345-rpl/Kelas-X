<?php 
    Session_start();
?>

<form action="" method="POST">
    <fieldset>
        <legend>Login kang</legend>

        <label for="email">Email :</label> <br>
        <input type="text" id="email" name="email" placeholder="Masukkan Email"><br><br>

        <label for="password">Password :</label> <br>
        <input type="password" id="password" name="password" placeholder="Masukkan Password"><br><br>

        <input type="submit" name="login" value="Login Kang" >
    </fieldset>
</form>



<?php 

    // $isi = "Selamat belajar PHP!";
    // $isi1 = null;

    // $hasil = isset($isi);
    // echo $hasil . "<br/>";
    // var_dump($hasil);
    // echo "<br/>";

    // if (isset($isi)) {
    //     echo "Variabel 'isi' sudah diatur dengan value: " . $isi . "<br/>";
    // } else {
    //     echo "Variabel 'isi' belum diatur.";
    // }


    // var_dump($isi);


    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        
        echo "Email sudah diatur dengan value: " . $email . "<br/>";
    
        echo "Password sudah diatur dengan value: " . $password . "<br/>";

        echo " <meta http-equiv='refresh' content='1.5;url=login.php.'> ";
        
    }
?>