<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbluser WHERE iduser = $id";
        $row = $db -> getITEM($sql);

        // var_dump($row);
    }

?>


<h3>Update User</h3>
<div>
    <form action="" method="post">

        <div class="form-group w-50">
            <label for="">Nama User :</label><br/>
            <input type="text" class="form-control" name="user" id="user" value="<?= $row['user']?>" required>
        </div>

        <div class="form-group w-50">
            <label for="">Email User :</label><br/>
            <input type="email" class="form-control" name="email" id="email" value="<?= $row['email']?> " required>
        </div>
        
        <div class="form-group w-50">
            <label for="">Password User :</label><br/>
            <input type="password" class="form-control" name="password" id="password"  value="<?= $row['password']?> " required>
        </div>
        
        <div class="form-group w-50">
            <label for="">Konfirmasi Password User :</label><br/>
            <input type="password" class="form-control" name="konfirmasi" id="konfirmasi"  value="<?= $row['password'] ?>" required >
        </div>

        <div class="form-group w-50">
            <label for="">Level User :</label><br/>
            <select name="level" id="">
                <option value="admin" 
                 <?php 
                    if($row['level'] === "admin")
                        echo "selected";
                ?> 
                >Admin</option>

                <option value="koki" 
                 <?php 
                    if($row['level'] === "koki")
                        echo "selected";
                ?> 
                 >Koki</option>

                <option value="kasir" 
                 <?php 
                    if($row['level'] === "kasir")
                        echo "selected";
                ?> 
                >Kasir</option>
            </select>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="simpan" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];
    $level = $_POST['level'];

    if ($password === $konfirmasi) {
        $sql = "UPDATE tbluser SET user='$user' ,email='$email' ,password='$password' ,level='$level' WHERE iduser=$id ";
        // echo $sql;  
        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
                 user <strong>$user</strong> berhasil di update!
              </div>";

         echo "<meta http-equiv='refresh' content='2;url=?f=user&m=select'>";
    }else {
         echo "<h3 class='alert alert-danger mt-2'>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h3>";
    }
    }


?>

