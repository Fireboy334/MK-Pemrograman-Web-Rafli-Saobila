<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
</head>
<body>
    <?php
    $a=$t=$hasil= "";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $a = ($_POST["alas"]);
        $t = ($_POST["tinggi"]);
    }
    $a= (float) $a;
    $t= (float) $t;
    $hasil= (float) $hasil;
    $hasil = 0.5*$a*$t;
    ?>
    <h3>Menghitung Luas Segitiga :</h3>
    <br>
    <form method="POST" action="<?php ($_SERVER["PHP_SELF"]);?>">
        Alas : <input type="number" name="alas"><br>
        Tinggi : <input type="number" name="tinggi"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form><br><br>
    <h3>Hasil :</h3>
    <?php
        echo "<br>Alas Segitiga : ";
        echo $a;
        echo "<br>Tinggi Segitiga : ";
        echo $t;
        echo "<br>Luas Segitiga = 1/2 x Alas x Tinggi";
        echo "<br>Luas Segitiga = 1/2 x "; echo $a; echo" x "; echo $t;
        echo "<br>Luas Segitiga = ";
        echo $hasil;

    ?>
    
</body>
</html>
