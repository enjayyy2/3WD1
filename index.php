<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "HAIIII";
    echo "<br>";
    var_dump (1234);
    echo "<br>";
    $nama = "enjay";
    $umur = "20 tahun";

    echo "nama saya adalah ? ",  $nama;
    echo "<br>";
    echo "umur saya adalah ? ",  $umur;
    echo "<br>";

    define ("NAME", "Mahasiswa 3WD1 " );
    echo NAME;
    $NAME = "FTUI";
    echo NAME;
    echo "<br>";

    $mobil = ["honda", "suzuki", "daihatsu", "mercy"];
    echo $mobil[0];
    $mobil[]=" bmw";
    echo $mobil[4];
    echo "<br>";

    $honda = array (
        "id" => "hd",
        "name" => "honda",
        "warna" => "merah"
    );

    $suzuki = array (
        "id" => "sz",
        "name" => "suzuki",
        "warna" => "biru"
    );

    echo $honda["name"];
    echo $honda["id"];
    echo $honda["warna"]; 

    ?>
</body>
</html>