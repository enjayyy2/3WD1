<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilaitugas" class="col-sm-2 col-form-label">Nilai Tugas :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nilaitugas" name="nilaitugas">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilaiproject" class="col-sm-2 col-form-label">Nilai Project :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nilaiproject" name="nilaiproject">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilaimt" class="col-sm-2 col-form-label">Nilai MT :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nilaimt" name="nilaimt">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="absensi" class="col-sm-2 col-form-label">absensi :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="absensi" name="absensi">
                </div>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary mt-4">Submit</button>
            <button type="submit" name="cancel" value="cancel" class="btn btn-secondary mt-4">Cancel</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Ambil data dari form
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $nilai_tugas = (float)$_POST['nilaitugas'];
            $nilai_project = (float)$_POST['nilaiproject'];
            $nilai_mt = (float)$_POST['nilaimt'];
            $absensi = (float)$_POST['absensi'];

            $nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_project * 0.50) + ($nilai_mt * 0.20);

            $status = ($nilai_akhir >= 75 && $absensi >= 75) ? "Lulus" : "Tidak Lulus";

            // Menampilkan hasil
            echo "<h2>Hasil Penilaian</h2>";
            echo "Nama: $nama <br>";
            echo "Kelas: $kelas <br>";
            echo "Nilai Tugas: $nilai_tugas <br>";
            echo "Nilai Project: $nilai_project <br>";
            echo "Nilai MT: $nilai_mt <br>";
            echo "Absensi: $absensi <br>";
            echo "Nilai Akhir: $nilai_akhir <br>";
            echo "Status: $status";
        } elseif (isset($_POST['cancel'])) {
            echo "Form telah dibatalkan.";
        }
        ?>

    </div>
</body>
</html>
