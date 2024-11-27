<?php
    class Rekening{
        //properties
        var int $norek;
        var float $saldo;

        function __construct(int $norek, float $saldo){
            $this->norek = $norek;
            $this->saldo = $saldo;
        }

        public function nabung(float $pemasukan): void {
            $this->saldo += $pemasukan;
            echo "Saldo berhasil ditambah sebesar Rp. {$pemasukan}.";
        }

        public function cekSaldo(): float {
            return $this->saldo;
            echo "saldo anda sebesar : {$this->saldo}\n";
        }

        public function tarik(float $penarikan): void {
            if ($penarikan > $this->saldo) {
                echo "Saldo tidak mencukupi untuk penarikan sebesar Rp. {$penarikan}\n";
            } else {
                $this->saldo -= $penarikan;
                echo "Saldo berhasil dikurangi sebesar Rp. {$penarikan} ";
            }
        }

        function potonganBulanan(float $potongan): void {
            if ($potongan > $this->saldo) {
                echo "Saldo tidak mencukupi untuk potongan bulanan sebesar Rp. {$potongan}\n";
            } else {
                $this->saldo -= $potongan;
                echo "Potongan bulanan sebesar Rp. {$potongan} telah dilakukan.";
            }
        }

        function tambahBunga(): void {
            $bunga = $this->saldo * 0.03;
            $this->saldo += $bunga;
            echo "Bunga sebesar 3% telah ditambahkan. Jumlah bunga: Rp. {$bunga}.";
        }
    }

    $rekening = new Rekening(123456789, 100000);
    $rekening->nabung(200000);
    echo "Saldo saat ini: Rp. " . $rekening->cekSaldo() . "\n";
    echo "<br>";
    $rekening->tarik(30000);
    echo "Saldo saat ini: Rp. " . $rekening->cekSaldo() . "\n";
    echo "<br>";
    $rekening->potonganBulanan(10000);
    echo "Saldo saat ini: Rp. " . $rekening->cekSaldo() . "\n";
    echo "<br>";
    $rekening->tambahBunga();
    echo "Saldo saat ini: Rp. " . $rekening->cekSaldo() . "\n";
?>