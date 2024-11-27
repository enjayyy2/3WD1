<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sayhello($nama){
            echo "$nama";
        }

        sayhello("hello selamat datang!");
        echo "<br>";

        function sapa($nama, $gender) {
            if (strtolower($gender) == 'laki-laki') {
                echo "Hi bro, nama saya adalah $nama dan saya adalah $gender <br>";
            } elseif (strtolower($gender) == 'perempuan') {
                echo "Hi sis, nama saya adalah $nama dan saya adalah $gender <br>";
            } 
        }
        
        echo sapa(" Budi ", "laki-laki");
        echo sapa(" Siti ", "perempuan");
        echo "<br>";

        $angka = 8;
        $angka = 6;

        function cek_bilangan_genap($angka) {
            if($angka % 2 == 0){
                return true;
            }else {
                return false;
            }
        }
        
        $hasil = cek_bilangan_genap($angka);
        if ($hasil){
            echo "$angka adalah bilangan genap <br>";
        }else{
            echo "$angka adalah bilangan ganjil <br>";
        }
        
    ?>
</body>
</html>