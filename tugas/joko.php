<?php
    include_once "person.php";

    $person = new Person();
    $person->nama = "joko";
    $person->alamat = "Jalan kebangsaan";
    $person->kota = "Jakarta";

    echo $person->nama;
    echo "<br>";
    echo $person->alamat;
    echo "<br>";
    echo $person->kota;

?>

