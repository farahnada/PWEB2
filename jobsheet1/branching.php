<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <?php
    $x = 0;
    echo "Nilai X = $x </br></br>";
    if ($x > 0) {
        echo "$x adalah bilangan positif";
    } elseif ($x < 0) {
        echo "$x adalah bilangan negatif";
    } else {
        echo "$x adalah bilangan nol";
    }
    ?>
</body>

</html>