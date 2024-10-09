<!DOCTYPE html>
<html>
<head>
    <title>Hitung Total Belanja dengan Diskon</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body class="container">
    <h2 class="my-4">Form Total Belanja dan Diskon</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label for="buah" class="form-label">Harga Buah:</label>
            <input type="number" id="buah" name="buah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sayur" class="form-label">Harga Sayur:</label>
            <input type="number" id="sayur" name="sayur" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gula" class="form-label">Harga Gula:</label>
            <input type="number" id="gula" name="gula" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="diskon" class="form-label">Diskon (Masukkan total diskon):</label>
            <input type="number" step="0.01" id="diskon" name="diskon" class="form-control" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $buah = $_POST['buah'];
        $sayur = $_POST['sayur'];
        $gula = $_POST['gula'];
        $diskon = $_POST['diskon'];

        $totalbelanja = $buah + $sayur + $gula;

        if ($totalbelanja > 0 && $diskon > 0) {
            $totaldiskon = $totalbelanja * $diskon;
            $hasilakhir = $totalbelanja - $totaldiskon;
        } else {
            $totaldiskon = 0;
            $hasilakhir = $totalbelanja;
        }

        // Output
        echo "<h3 class='mt-4'>Hasil Perhitungan:</h3>";
        echo "Total Belanja: Rp" . number_format($totalbelanja, 2, ',', '.') . "<br>";
        echo "Total Diskon: Rp" . number_format($totaldiskon, 2, ',', '.') . "<br>";
        echo "Total Setelah Diskon: Rp" . number_format($hasilakhir, 2, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
