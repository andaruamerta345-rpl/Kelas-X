<?php 

    if (isset($_GET['total'])) {
        $total = $_GET['total'];
        echo "Total pembelian anda adalah : ".$total . '<br/>';
        echo idorder() . '<br/>';
        echo insertOrder(idorder(),$_SESSION['idpelanggan'],'2025-09-04',$total);
    }

    function idorder() {
        global $db;

        $sql = "SELECT idorder FROM tblorder ORDER BY idorder DESC ";
        $jumlah = $db -> rowCOUNT($sql);
        if ($jumlah == 0) {
            $id = 1;
        }else {
            $item = $db -> getITEM($sql);
            $id = $item['idorder'];
        }

        return $id;
    }

    function insertOrder($idorder,$idpelanggan,$tgl,$total) {
        global $db;

        $sql = "INSERT INTO tblorder VALUES ($idorder,$idpelanggan,'$tgl',$total,0,0,0)";
        echo $sql;
        $db -> runSQL($sql);
    }

?>