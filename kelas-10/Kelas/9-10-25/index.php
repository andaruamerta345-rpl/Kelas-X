Belajar PHP
<h1>Saya Belajar PHP</h1>
<?php
    $nama = "Andaru Ilham Amerta";
    $kelas = 10;
    $umur = 16;
    $alamat = "Bangsri Sukodono Sidoarjo";
    $hobi = "Ngoding, Main Game, Tidur";
    $cita_cita = "Programmer";
    $enter = "<br/>";

    echo $nama;
    echo $enter;

    echo $kelas;
    echo $enter;

    echo $umur;
    echo $enter;

    echo $alamat;
    echo $enter;

    echo $hobi;
    echo $enter;

    echo $cita_cita


    /*

    echo "<h1>Saya Belajar PHP</h1>";
    echo "Nama : ";
    echo "Andaru Ilham Amerta" . "<br/>"; 

    echo "Saya Kelas: ";
    echo 12; 
    echo "<br/>";

    echo "Alamat : ";
    echo "Bangsri Sukodono Sidoarjo" ;
    echo "<br/>";

    echo "Umur :";
    echo 16 . "<br/>";

    echo "Hobi :";
    echo "Ngoding, Main Game, Tidur" . "<br/>";

    echo "Cita-Cita :";
    echo "Programmer";

    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Andaru</title>
</head>
<body>
    <div>
        <h1>Identitas</h1>
        <table>
            <tbody>
                <tr>
                    <td>
                        Nama : 
                    </td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Alamat : 
                    </td>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Kelas : 
                    </td>
                    <td>
                        <?= $kelas; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Umur : 
                    </td>
                    <td>
                        <?= $umur; ?>
                    </td>
                </tr>
            </tbody>

                <tr>
                    <td>
                        Hobi : 
                    </td>
                    <td>
                        <?= $hobi; ?>
                    </td>
                </tr>
            </tbody>

                <tr>
                    <td>
                        Cita cita : 
                    </td>
                    <td>
                        <?= $cita_cita; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>