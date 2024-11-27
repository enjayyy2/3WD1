<?php
include_once "person.php";

class Faculty extends Person {
var $nip;
function __construct($nama, $alamat, $kota , $nip)
{
    parent::__construct($nama, $alamat, $kota);
    $this->nip = $nip;
}

}

class Student extends Person {
var $nis;

function __construct($nama, $alamat, $kota, $nis ) {
 parent::__construct($nama, $alamat, $kota);
 $this->nis = $nis;
    
}

}

$fikri = new Student("Fikri", "jalan dua", "depok", "1000001");

echo $fikri->nis;
echo "<br>";
echo $fikri->nama;
echo "<br>";
echo $fikri->alamat;
echo "<br>";
echo $fikri->kota;
echo "<br>";
echo "<br>";


$tom = new Faculty("Tom", "UI", "Depok", "2007110");

echo $tom->nama;
echo "<br>";
echo $tom->nip;