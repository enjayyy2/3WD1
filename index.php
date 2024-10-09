<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    echo "<br>";
    

    $nama = "enjay";
    $gender = "Laki-laki";
    $tinggibadan = 170;
    $beratbadan = ($tinggibadan - 100) * 0.1;
    $beratideal = $tinggibadan - 100 - $beratbadan;

    echo "nama : ", $nama; 
    echo "<br>";
    echo "gender : ", $gender;
    echo "<br>";
    echo "tinggi badan : ", $tinggibadan;
    echo "<br>";
    echo "berat badan ideal anda adalah : ", $beratideal;
    echo "<br>";

    $buah = 50000;
    $sayur = 100000;
    $gula = 15000;
    $diskon = 0.15;
    $totalbelanja = $buah + $sayur + $gula;
    $totaldiskon = $totalbelanja * $diskon;
    $hasilakhir = $totalbelanja - $totaldiskon;
    echo "total belanja : ", $totalbelanja;
    echo "<br>";
    echo "total diskon : ", $totaldiskon;
    echo "<br>";
    echo "total belanja : ", $hasilakhir;
    echo "<br>";

    $nilai = 90;
    $absen = 65;

    if ($nilai >= 85 && $absen > 70){
        echo "Anda dinyatakan lulus";
    }else{
        echo "anda dinyatakan tidak lulus";
    }


    
    ?>
</body>
</html>