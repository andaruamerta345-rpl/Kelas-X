<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbsekolah"; 

$koneksi = new mysqli($host, $user, $pass, $db);
$sql = "SELECT * FROM tblsiswa";

$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);
// var_dump($siswa);
echo "Nama Siswa: " . $siswa['nama'] ;
    
echo "<br/>";

$siswa1 = mysqli_fetch_array($query);
var_dump($siswa1);


?>