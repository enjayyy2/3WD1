<?php
class Mahasiswa {
    // Properties
    var int $nim;
    var string $nama;
    var float $nilai;
    var string $keterangan;

    // Constructor
    public function __construct(int $nim, string $nama, float $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->keterangan = $this->hitungNilai();
    }

    // untuk menghitung nilai mahasiswa
    public function hitungNilai() {
        if ($this->nilai >= 70) {
            return "dinyatakan lulus";
        } else {
            return "dinyatakan tidak lulus";
        }
    }
}
?>
