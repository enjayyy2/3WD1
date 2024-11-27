<?php

include_once "mahasiswa.php";

// Create a new Mahasiswa object
$mahasiswa = new Mahasiswa(1, "Budi", 75);

// Access properties and print output
echo "NIM saya adalah {$mahasiswa->nim} <br> dan nama saya adalah {$mahasiswa->nama} <br> nilai saya{$mahasiswa->nilai} <br> dan saya {$mahasiswa->keterangan}.";

?>
