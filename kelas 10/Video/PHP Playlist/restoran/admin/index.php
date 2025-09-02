<?php 

    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;

    if (!isset($_SESSION['user'])) {
        header("location:login.php");
    }

    if (isset($_GET['log'])) {
        session_destroy();
         echo  "<div style='
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 20px 40px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        font-size: 18px;
        z-index: 9999;
        text-align: center;
        '>
            Ladies & Gentleman user telah berhasil logout, selamat tinggal tuan, hati - hati di jalan
        </div>";
        echo "<meta http-equiv='refresh' content='5;url=index.php'>";
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css"> -->
    <title>Admin Page | Aplikasi Restoran SMK</title>
</head>
<body>
    <div class="container">

        <!-- <h1>admin page</h1> -->
        <div class="row">
            <div class="col-md-3">
                <h2>Restoran</h2>
            </div>
            <div class="col-md-9">
                <div class="float-end mt-4"><a href="?log=logout">Logout</a></div>
                <div class="float-end mt-4 me-4">user</div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="?f=kategori&m=select">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?f=menu&m=select">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?f=order&m=select">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?f=user&m=select">User</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9">
                <!-- <h1>tes</h1> -->
                 <?php 
                 
                 if (isset($_GET['f']) && isset($_GET['m'])) {
                   $f = $_GET['f'];
                   $m = $_GET['m'];

                   $file = '../'.$f.'/'.$m . '.php';

                //    echo "Anda masuk kedalam folder : " . $f .'<br/>' . " dan di dalam file : " . $m;
                // echo $file;
                require_once $file;


                 }
                 
                 
                 
                 ?>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <p class="text-center">
                   2025 - copyright@7arzz.com
                </p>
            </div>
        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>