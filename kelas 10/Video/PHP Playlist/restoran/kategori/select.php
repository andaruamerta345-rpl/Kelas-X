<div style="margin:auto; width: 900px;">
<?php 


    require_once "../function.php";
    


    // Query pertama: hitung jumlah data
    $sql = "SELECT idkategori FROM tblkategori";
    $result  = mysqli_query($koneksi , $sql);
    $jumlahdata = mysqli_num_rows($result);
    // echo "<h3>" . "Jumlah data ada : " . $jumlahdata ."</h3>" . "<br>";
    
    
    
    // Query kedua: ambil data dengan limit
    // $mulai = 3;
    $banyak = 3;
    $halaman = ceil($jumlahdata / $banyak);
    // echo "<h3>" . "Jumlah halaman ada : " . $halaman ."</h3>" . "<br>";

    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?p='.$i.'">'.$i.'</a>'.'&nbsp &nbsp &nbsp';
    };
    echo '<br> <br>';

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        // echo "Halaman saat ini adalah : " . $p;
        $mulai = ($p * $banyak) - $banyak;
        //   3 =  (2  *  3    ) - 3
    }else {
         $mulai = 0;
    }

    $sql = "SELECT * FROM tblkategori Limit $mulai, $banyak";
    $result  = mysqli_query($koneksi , $sql);

    // echo $sql
    // var_dump($result);
    $jumlah = mysqli_num_rows($result);
    // echo "<br>";
    // echo "<h3>" . "Jumlah baris ada : " . $jumlah ."</h3>" . "<br>";


    echo '
    <table border="1px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
    </tr>
    ';
$no=$mulai+1;
    if ($jumlah > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            // echo '<td>' . $row['idkategori'] . '</td>';
            echo '<td>' . $no++ . '</td>';
            echo '<td>' . $row['kategori'] . '</td>';
            echo '</tr>';
        }

    }

    echo '</table>';
    
    
    ?>

<!-- <h1>belajar</h1> -->
</div>
