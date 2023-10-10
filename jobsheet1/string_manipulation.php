<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <?php
    $date = 02 - 05 - 2023;
    $x = "Selamat belajar PHP!";
    //menampilkan data
    echo "$x";
    echo "</br>";
    //mengubah output menjadi huruf kapital semua
    echo strtoupper($x);
    echo "</br>";
    //mengubah output menjadi huruf kecil semua
    echo strtolower($x);
    echo "</br>";
    echo substr($x, 0, 7)

    ?>
</body>

</html>