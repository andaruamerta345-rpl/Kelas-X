<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tblmenu WHERE idmenu=$id";

        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
            Data berhasil di hapus!
        </div>";
            
        echo "<meta http-equiv='refresh' content='1.5;url=?f=menu&m=select'>";
    }


?>


