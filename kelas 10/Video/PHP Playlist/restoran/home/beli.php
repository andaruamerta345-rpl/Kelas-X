<h3>Keranjang Belanja</h3>
<?php 

    if (!isset($_SESSION['pelanggan'])) {
        echo  '
            <div class="d-flex justify-content-center">
                <div class="alert alert-warning text-center w-50 mt-3">
                    Mohon maaf tuan, anda belum login, silahkan login terlebih dahulu
                </div>
            </div>';
        echo "<meta http-equiv='refresh' content='3;url=?f=home&m=login'>";
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // echo $id . '<br/>';

        if (isset($_SESSION['_'.$id])) {
            $_SESSION['_'.$id]++;
        }else {
            $_SESSION['_'.$id]=1;
        }

        echo '
        <table class="table table-bordered w-50">

                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
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
                            echo '<td>'.$value.'</td>';
                            echo '<td>'.$r['harga'] * $value . '</td>';
                    echo '</tr>';
                }
                // echo $sql. " - " . $value . '<br/>';
            }
        }
        echo '</table>';
        
        //    echo "<pre>";
    //    print_r($_SESSION);
    //    echo "</pre>";
       
    }

?>