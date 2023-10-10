<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching2</title>
</head>

<body>
    <!-- menginputkan nilai -->
    <form action="" method="post">Masukan nilai X :
        <input type="number" name="x">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        //mengambil nilai x dari inputan
        $x = $_POST["x"];
        echo "</br> nilai X = $x </br></br>";
        if ($x > 0) {
            echo "$x adalah bilangan positif";
        } elseif ($x < 0) {
            echo "$x adalah bilangan negatif";
        } else {
            echo "$x adalah bilangan nol";
        }
    }
    ?>
</body>

</html>