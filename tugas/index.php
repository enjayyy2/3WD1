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

    $kelas = [
        [
            "nim" => 1,
            "nama" => "Mujahid Ul-haq",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Serang"
        ],
        [
            "nim" => 2,
            "nama" => "Muhammad Ghoffar",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Semarang"
        ],
        [
            "nim" => 3,
            "nama" => "Muhammad burhan",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Selat sunda"
        ],
        [
            "nim" => 4,
            "nama" => "Muhammad zauhari",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Jawa"
        ],
        [
            "nim" => 5,
            "nama" => "Muhammad dimas",
            "jenis kelamin" => "Laki-laki",
            "kelas" => "3WD1",
            "kota asal" => "Solo"
        ],
    ];
    ?>

    <table class="table">
        <thead>
            <tr>
                <th class='table-light' scope="col">nim</th>
                <th class='table-light' scope="col">nama</th>
                <th class='table-light' scope="col">jenis kelamin</th>
                <th class='table-light' scope="col">kelas</th>
                <th class='table-light' scope="col">kota asal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($kelas as $key => $value){
                echo "<tr>
                    <th class='table-secondary' scope 'row'>" . $value['nim'] . "</th>
                    <td class='table-secondary'>" . $value['nama'] . "</td>
                    <td class='table-secondary'>" . $value['jenis kelamin'] . "</td>
                    <td class='table-secondary'>" . $value['kelas'] . "</td>
                    <td class='table-secondary'>" . $value['kota asal'] . "</td>
                </tr>";
            } 
            ?>
        </tbody>
    </table>
    
    <div class="row ms-1">
        <?php
        foreach ($kelas as $key => $value){
            echo "
            <div class='col-2 mt-5 ms-5'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>nim : " . $value['nim'] . "</li>
                        <li class='list-group-item'>nama : " . $value['nama'] . "</li>
                        <li class='list-group-item'>jenis kelamin : " . $value['jenis kelamin'] . "</li>
                        <li class='list-group-item'>kelas : " . $value['kelas'] . "</li>
                        <li class='list-group-item'>kota asal : " . $value['kota asal'] . "</li>
                    </ul>
                </div>
            </div>
            ";
        }

        ?>
    </div>
    
        
</body>
</html>