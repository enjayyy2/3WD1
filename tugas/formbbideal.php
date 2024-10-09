<!DOCTYPE html>
<html>
<head>
    <title>Hitung Berat Badan Ideal</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <h2>Form Hitung Berat Badan Ideal</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label for="tinggibadan">Tinggi Badan (cm):</label><br>
        <input type="number" id="tinggibadan" name="tinggibadan" required><br><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $tinggibadan = $_POST['tinggibadan'];
        
        if ($gender == "Laki-laki") {
            $beratbadan = ($tinggibadan - 100) * 0.1;
        } else {
            $beratbadan = ($tinggibadan - 100) * 0.15;
        }
        
        $beratideal = $tinggibadan - 100 - $beratbadan;


        // Output
        echo "<h3>Hasil:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Tinggi Badan: " . $tinggibadan . " cm<br>";
        echo "Berat Badan Ideal Anda adalah: " . $beratideal . " kg<br>";
    }
    ?>
</body>
</html>
