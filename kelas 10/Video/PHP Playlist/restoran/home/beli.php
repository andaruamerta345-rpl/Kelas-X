<h3>Keranjang Belanja</h3>
<?php 
    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        unset($_SESSION['_'.$id]);
        header('location:?f=home&m=beli');
        // echo "Hapus idmenu : " . $id;
    }

    if (isset($_GET['tambah'])) {
       $id = $_GET['tambah'];
       $_SESSION['_'.$id]++;
    //    echo "tambah : ".$id;
    }

    if (isset($_GET['kurang'])) {
       $id = $_GET['kurang'];
        $_SESSION['_'.$id]--;
        if ($_SESSION['_'.$id]==0) {
        unset($_SESSION['_'.$id]);
       }
    //    echo "kurang : ". $id;
    }

    if (!isset($_SESSION['pelanggan'])) {
        echo  '
            <div class="d-flex justify-content-center">
                <div class="alert alert-warning text-center w-50 mt-3">
                    Mohon maaf tuan, anda belum login, silahkan login terlebih dahulu
                </div>
            </div>';
        echo "<meta http-equiv='refresh' content='3;url=?f=home&m=login'>";
    }elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        isi($id);
        header("location:?f=home&m=beli");
    }else {
        keranjang();
    }


    function isi($id) {
        if (isset($_SESSION['_'.$id])) {
            $_SESSION['_'.$id]++;
        }else {
            $_SESSION['_'.$id]=1;
        }
    }

    function keranjang() {
        global $db;
        $total = 0;
        global $total;
        echo '
        <table class="table table-bordered w-70">

                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Hapus</th>
                </tr>

                
                ';
                
                foreach ($_SESSION as $key => $value) {
                    if ($key<>'pelanggan' && $key<>'idpelanggan') {
                        $id = substr($key,1);
                        $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";
                        $row = $db -> getALL($sql);
                        foreach ($row as $r) {
                            echo '<tr>';
                            echo '<td>'.$r['menu'] . '</td>';
                            echo '<td>'.$r['harga'] . '</td>';
                            echo '<td>
                                    <a href="?f=home&m=beli&tambah='.$r['idmenu'].'">[+]</a> &nbsp &nbsp '
                                    .$value.
                                    '&nbsp &nbsp <a href="?f=home&m=beli&kurang='.$r['idmenu'].'">[-]</a>
                                </td>';
                            echo '<td>'.$r['harga'] * $value . '</td>';
                            echo '<td> <a href="?f=home&m=beli&hapus='.$r['idmenu'].'">Hapus</a> </td>';
                    echo '</tr>';
                    $total = $total + ($value * $r['harga']);
                }
                // echo $sql. " - " . $value . '<br/>';
            }
        }
        echo "<tr>
                <td colspan=4><h3>GRAND TOTAL : </h3></td>
                <td><h3>$total</h3></td>
              </tr>";
        echo '</table>';
    }


    
?>

<?php if (!empty($total)) {?>
    <a class="btn btn-primary" href="?f=home&m=checkout&total=<?=$total?>" role="button">CHECKOUT</a>
<?php } ?>