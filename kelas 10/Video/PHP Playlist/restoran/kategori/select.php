<?php 


    require_once "../function.php";

    $sql = "SELECT * FROM tblkategori";

    // echo $sql

    $result  = mysqli_query($koneksi , $sql);

    // var_dump($result);

    $jumlah = mysqli_num_rows($result);
    // echo "<br>";
    echo "<h3>" . "Jumlah baris ada : " . $jumlah ."</h3>" . "<br>";


    echo '
    <table border="1px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
    </tr>
    ';
$no=1;
    if ($jumlah > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            // echo '<td>' . $row['idkategori'] . '</td>';
            echo '<td>' . $no++ . '</td>';
            echo '<td>' . $row['kategori'] . '</td>';
            echo '</tr>';
        }

    }

    echo '</table>'


?>