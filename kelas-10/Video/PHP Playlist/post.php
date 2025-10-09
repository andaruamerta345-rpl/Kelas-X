<form action="" method="post"> <!-- action mengarah ke file nav.php, method post untuk mengirim data form -->
<label for="email">Email:</label><br />
<input type="email" id="email" name="email" /><br />

<label for="password">Password:</label><br />
<input type="password" id="password" name="password" /><br />

<input type="submit" name="kirim" value="login" />
<input type="reset" name="reset" value="reset" />
</form>


<?php 

    if (isset($_POST['kirim'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


    echo $email . "<br />";
    echo $password . "<br />";
    } else {
        echo "Silakan isi form di atas";
    }
    //isset() digunakan untuk mengecek apakah variabel sudah didefinisikan atau belum
    //Jika sudah didefinisikan, maka akan mengembalikan nilai true, jika belum didefinisikan maka akan mengembalikan nilai false
    //isset() biasanya digunakan untuk mengecek apakah form sudah disubmit atau belum
    

?>