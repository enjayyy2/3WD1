<?php
    include_once "person.php";

    $person = new Person();
    $person->nama = "Susan";
    $person->alamat = "Jalan asmarahancur";
    $person->kota = "Tegal";

    echo $person->nama;
    echo "<br>";
    echo $person->alamat;
    echo "<br>";
    echo $person->kota;

?>

