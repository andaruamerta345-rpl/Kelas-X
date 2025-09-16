<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tblorder WHERE idorder=$id";
        $row = $db -> getITEM($sql);

        // var_dump($row);
        // echo "Item yang anda pilih dengan ID :" . $id;
        // echo $sql;
    }


?>



<h3>Pembayaran Order</h3>
<div>
    <form action="" method="post">

        <div class="form-group w-50">
            <label for="">Total :</label><br/>
            <input type="number" class="form-control" name="total" id="total" value="<?= $row['total']  ?>" required>
        </div>

        <div class="form-group w-50">
            <label for="">Bayar :</label><br/>
            <input type="number" class="form-control" name="bayar" id="bayar" required>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="Bayar" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $bayar = $_POST['bayar'];
    $kembali = $bayar - $row['total'] ;
    $sql = "UPDATE tblorder SET bayar=$bayar,kembali=$kembali,status=1 WHERE idorder=$id ";
    if ($kembali < 0) {
        echo  '
                <div class="alert alert-info text-center w-50 mt-3">
                    Mohon maaf tuan, pembayaran anda : '.$kembali.' . Mohon segera dilunasi yaa!!
                </div>';
    }else {
        $db -> runSQL($sql);
        echo "<div class='alert alert-success text-center w-50 mt-3'>
                Terima kasih tuan, pembayaran anda lunas
            </div>";
        echo "<meta http-equiv='refresh' content='2;url=?f=order&m=select'>";
    }
    // echo $sql;
}


?>

