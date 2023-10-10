<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi2</title>
</head>

<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>masukkan panjang persegi panjang</td>
                <td> : </td>
                <td><input type="number" name="panjang"></td>
            </tr>
            <tr>
                <td>masukkan lebar persegi panjang</td>
                <td> : </td>
                <td><input type="number" name="lebar"></td>
            </tr>
            <tr>
                <td>masukkan jari-jari lingkaran</td>
                <td> : </td>
                <td><input type="number" name="jari"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }
    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }

    $luas_persegi_panjang = 0;
    $luas_lingkaran = 0;

    if (isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $jari_jari = $_POST['jari'];

        //menghitung luas
        $luas_persegi_panjang = persegi_panjang($panjang, $lebar);
        $luas_lingkaran = lingkaran($jari_jari);
    }

    echo "Luas persegi panjang = " . $luas_persegi_panjang . "</br>";
    echo "Luas lingkaran = " . $luas_lingkaran . "</br>";


    ?>
</body>

</html>