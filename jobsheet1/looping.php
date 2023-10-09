<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <?php
    echo "perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for ($x = 2; $x <= 10; $x += 2) {
        echo "$x </br>";
    }
    echo "</br> perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y </br>";
        $y += 2;
    }

    echo "</br>Perulangan DO WHILE bilangan prima kurang dari 20 </br>";
    $z = 2; // Mulai dari angka 2, bilangan prima paling kecil
    do {
        $is_prime = true; // Anggap dulu bahwa angka tersebut adalah prima

        for ($i = 2; $i < $z; $i++) {
            if ($z % $i == 0) {
                $is_prime = false; // Bukan bilangan prima
                break;
            }
        }

        if ($is_prime) {
            echo "$z </br>";
        }
        $z++;
    } while ($z < 20);
    ?>
</body>

</html>