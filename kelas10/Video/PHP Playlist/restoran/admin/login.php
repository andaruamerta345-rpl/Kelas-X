<?php 

    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Restoran</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto mt-4">
                <div class="form-group">
                    <form action="" method="post">
                        <div>
                            <h3>LOGIN RESTORAN</h3>
                        </div>

                        <div class="form-group">
                            <label for="">Email :</label><br/>
                            <input type="email" class="form-control" name="email" id="email" placeholder="isi email" required>
                        </div>

                        <div class="form-group">
                            <label for="">Password :</label><br/>
                            <input type="password" class="form-control" name="password" id="password" placeholder="isi password" required>
                        </div>

                        <div class="mt-3">
                            <input type="submit" class="btn btn-primary" value="LOGIN" name="login">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = hash('sha256',$_POST['password'] );

        $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$password' ";

        $count = $db -> rowCOUNT($sql) ;
        if ($count === 0) {
           echo '
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger text-center w-50 mt-3">
                    Mohon maaf tuan, mungkin USER atau PASSWORD anda salah.
                </div>
            </div>';
            
            }else {
                $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$password' ";
                $row = $db -> getITEM($sql);
                $_SESSION['user'] = $row['email'];
                $_SESSION['level'] = $row['level'];
                $_SESSION['iduser'] = $row['iduser'];
                
                echo  '
                    <div class="d-flex justify-content-center">
                        <div class="alert alert-success text-center w-50 mt-3">
                            Ladies & Gentleman user telah berhasil Login, selamat datang tuan.
                        </div>
                    </div>';
            

    
            echo "<meta http-equiv='refresh' content='3;url=index.php'>";
        }

        // echo "Email anda : " . $email . '<br/>' . " Dengan password : " . $password;
        // echo $count;
    }

?>