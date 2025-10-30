<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kalkulator & Zodiak Tarzz</title>

<style>
    body {
        background-color: #0e0e10;
        color: #e5e5e5;
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
    }

    h2 {
        color: #00ffcc;
        text-shadow: 0 0 10px #00ffcc;
        letter-spacing: 1px;
    }

    .container {
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
    }

    fieldset {
        width: 280px;
        padding: 20px;
        border-radius: 12px;
        background: rgba(20, 20, 25, 0.8);
        box-shadow: 0 0 15px #00ffcc33;
        border: 1px solid #00ffcc;
        transition: 0.3s;
    }

    fieldset:hover {
        box-shadow: 0 0 20px #00ffcc66;
        transform: translateY(-5px);
    }

    legend {
        font-weight: bold;
        color: #00ffcc;
    }

    input[type="number"] {
        padding: 8px;
        border-radius: 8px;
        border: none;
        width: 100%;
        background: #1b1b1f;
        color: #00ffcc;
        text-align: center;
        margin-top: 5px;
    }

    input[type="submit"], button {
        background: #00ffcc;
        color: #0e0e10;
        border: none;
        border-radius: 8px;
        padding: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    input[type="submit"]:hover, button:hover {
        background: #0ef6cc;
        box-shadow: 0 0 10px #00ffcc;
    }

    .kalkulator {
        border-color: #7a5af5;
        box-shadow: 0 0 15px #7a5af533;
    }

    .kalkulator legend {
        color: #7a5af5;
    }

    .kalkulator input[type="number"] {
        color: #7a5af5;
    }

    .kalkulator button {
        background: #7a5af5;
        color: white;
    }

    .kalkulator button:hover {
        background: #9678ff;
        box-shadow: 0 0 10px #7a5af5;
    }

    .hasil {
        background: #1a1a1d;
        border-radius: 12px;
        padding: 20px;
        width: 80%;
        max-width: 600px;
        text-align: center;
        box-shadow: 0 0 15px #00ffcc33;
        margin-top: 30px;
    }

    hr {
        margin: 30px 0;
        width: 80%;
        border-color: #333;
    }
</style>
</head>

<body>
    <h2>🔮 Zodiak & Kalkulator 🔢</h2>

    <div class="container">
        <!-- FORM ZODIAK -->
        <fieldset>
            <legend>Zodiak Anda</legend>
            <form method="POST">
                <label for="tanggal">Tanggal :</label>
                <input type="number" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal" required>

                <label for="bulan">Bulan :</label>
                <input type="number" name="bulan" id="bulan" placeholder="Masukkan Bulan" required>

                <input style="margin-top:10px;" type="submit" value="Lihat Zodiak" name="kirim">
            </form>
        </fieldset>

        <!-- FORM KALKULATOR -->
        <fieldset class="kalkulator">
            <legend>Kalkulator</legend>
            <form method="POST">
                <label for="angka">Masukkan A :</label>
                <input type="number" name="angka" id="angka" placeholder="Masukkan Angka" required>

                <label for="angka2">Masukkan B :</label>
                <input type="number" name="angka2" id="angka2" placeholder="Masukkan Angka" required>

                <div style="display:flex; justify-content:space-between; margin-top:10px;">
                    <button type="submit" name="hitung" value="+">+</button>
                    <button type="submit" name="hitung" value="-">-</button>
                    <button type="submit" name="hitung" value="x">×</button>
                    <button type="submit" name="hitung" value="/">÷</button>
                </div>
            </form>
        </fieldset>
    </div>

    <hr>

    <div class="hasil">
    

    <?php 
    if (isset($_POST['kirim'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        echo "Tanggal " . $tanggal . " Bulan " . $bulan . "<br><br>";
        zodiak($tanggal, $bulan);

         if (cekBulan(1) && cekTanggal(1)) {
        echo "<br>Bulan dan tanggal anda benar";
        } else {
            echo "Mohon maaf tuan, mungkin Bulan atau tanggal anda salah";
        }

    }

    function belajar() {
        echo "Hari ini, saya belajar function";
    }

    // Pemanggilan function
    // belajar();

    function cekTanggal($tanggal) {
        if ($tanggal > 0 && $tanggal < 32) {
            // echo "Tanggal Benar";
            return true;
        } else {
            // echo "Tanggal salah";
            return false;
        }
    }

    // Pemanggilan function
    // cekTanggal(1);
    // cekTanggal(0);
    // cekTanggal(100);

    // $tanggal = 31;
    // $bulan = 2;

    function zodiak($tanggal, $bulan) {
        if (($tanggal > 0 && $tanggal < 32) && ($bulan > 0 && $bulan < 13)) {
            if ($bulan == 1) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda adalah Capricorn tuan :)";
                } else {
                    echo "Zodiak anda adalah Aquarius tuan :)";
                }
            }

            if ($bulan == 2) {
                if ($tanggal > 0 && $tanggal < 21) {
                    echo "Zodiak anda adalah Aquarius tuan :)";
                } else {
                    echo "Zodiak anda adalah Pisces tuan :)";
                }
            }

            if ($bulan == 3) {
                if ($tanggal > 0 && $tanggal < 22) {
                    echo "Zodiak anda adalah Pisces tuan :)";
                } else {
                    echo "Zodiak anda adalah Aries tuan :)";
                }
            }

            if ($bulan == 4) {
                if ($tanggal > 0 && $tanggal < 21) {
                    echo "Zodiak anda adalah Aries tuan :)";
                } else {
                    echo "Zodiak anda adalah Taurus tuan :)";
                }
            }

            if ($bulan == 5) {
                if ($tanggal > 0 && $tanggal < 22) {
                    echo "Zodiak anda adalah Taurus tuan :)";
                } else {
                    echo "Zodiak anda adalah Gemini tuan :)";
                }
            }

            if ($bulan == 6) {
                if ($tanggal > 0 && $tanggal < 21) {
                    echo "Zodiak anda adalah Gemini tuan :)";
                } else {
                    echo "Zodiak anda adalah Cancer tuan :)";
                }
            }

            if ($bulan == 7) {
                if ($tanggal > 0 && $tanggal < 23) {
                    echo "Zodiak anda adalah Cancer tuan :)";
                } else {
                    echo "Zodiak anda adalah Leo tuan :)";
                }
            }

            if ($bulan == 8) {
                if ($tanggal > 0 && $tanggal < 23) {
                    echo "Zodiak anda adalah Leo tuan :)";
                } else {
                    echo "Zodiak anda adalah Virgo tuan :)";
                }
            }

            if ($bulan == 9) {
                if ($tanggal > 0 && $tanggal < 23) {
                    echo "Zodiak anda adalah Virgo tuan :)";
                } else {
                    echo "Zodiak anda adalah Libra tuan :)";
                }
            }

            if ($bulan == 10) {
                if ($tanggal > 0 && $tanggal < 24) {
                    echo "Zodiak anda adalah Libra tuan :)";
                } else {
                    echo "Zodiak anda adalah Scorpio tuan :)";
                }
            }

            if ($bulan == 11) {
                if ($tanggal > 0 && $tanggal < 22) {
                    echo "Zodiak anda adalah Scorpio tuan :)";
                } else {
                    echo "Zodiak anda adalah Sagitarius tuan :)";
                }
            }

            if ($bulan == 12) {
                if ($tanggal > 0 && $tanggal < 23) {
                    echo "Zodiak anda adalah Sagitarius tuan :)";
                } else {
                    echo "Zodiak anda adalah Capricorn tuan :)";
                }
            }
        } else {
            echo "Tanggal atau bulan yang anda masukkan salah tuan :(";
        }
    }

    // Pemanggilan function
    // zodiak(19,2);
    // echo "<br>";
    // zodiak(5,1);
    // echo "<br>";
    // zodiak(20,4);
    // echo "<br>";
    // zodiak(1,100);

    function cekBulan($bulan) {
        if ($bulan > 0 && $bulan < 13) {
            return true;
        } else {
            return false;
        }
    }

    // Pemanggilan function
    // cekBulan(0);

   

    // echo "<hr>";

    function luasPersegiPanjang($p, $l) {
        $L = $p * $l;
        return $L;
    }

    // $p = 55;
    // $l = 33;
    // $t = 155;
    // echo "Volume Balok dengan panjang $p , lebar $l, dan tinggi $t adalah : <br>";
    // echo luasPersegiPanjang($p,$l) * $t;

    if (isset($_POST['hitung'])) {
        $a = $_POST['angka'];
        $b = $_POST['angka2'];
        $operator = $_POST['hitung'];

        if ($operator == "+") {
            echo "<br> Hasil penjumlahan $a + $b = " . tambah($a, $b);
        } elseif ($operator == "-") {
            echo "<br> Hasil pengurangan $a - $b = " . kurang($a, $b);
        } elseif ($operator == "/") {
            echo "<br> Hasil pembagian $a / $b = " . bagi($a, $b);
        } elseif ($operator == "x") {
            echo "<br> Hasil perkalian $a * $b = " . kali($a, $b);
        }
    }

    function tambah($a, $b) {
        return $a + $b;
    }

    function kurang($a, $b) {
        return $a - $b;
    }

    function bagi($a, $b) {
        return $a / $b;
    }

    function kali($a, $b) {
        return $a * $b;
    }

    // $a = 100;
    // $b = 25;
    // echo "<br> Hasil penjumlahan $a + $b = " . tambah($a,$b);
    // echo "<br> Hasil pengurangan $a - $b = " . kurang($a,$b);
    // echo "<br> Hasil pembagian $a / $b = " . bagi($a,$b);
    // echo "<br> Hasil perkalian $a * $b = " . kali($a,$b);
?>





    </div>
</body>
</html>



