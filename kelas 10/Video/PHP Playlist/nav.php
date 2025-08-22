<nav>
    <h1>Navbar</h1>

    <ul>
        <li><a href="?menu=kontak">Kontak</a></li>
        <li><a href="?menu=sejarah">Sejarah</a></li>
        <li><a href="?menu=jurusan">Jurusan</a></li>
    </ul>
</nav>


<?php 

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        // echo $menu . ".php" . "<br />";
        require_once $menu . ".php";
    } else {
        echo "<h2>Selamat datang di halaman utama!</h2>";
    }

?>

