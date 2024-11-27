<?php
class AlatMusik
{
    public string $bunyi;

    public function __construct(string $bunyi)
    {
        $this->bunyi = $bunyi;
    }
}

class Gitar extends AlatMusik{}
class Drum extends AlatMusik{}

class mainkanMusik
{
    var AlatMusik $alat;
}

$mainkanMusik = new mainkanMusik();
$mainkanMusik->alat = new AlatMusik("Eko");
$mainkanMusik->alat = new Gitar("Jrengg");
$mainkanMusik->alat = new Drum("Dungg");

function mainkanMusik(AlatMusik $alat)
{
    echo "Bunyi $alat->bunyi <br>";
}


mainkanMusik(new AlatMusik("Jreng"));
mainkanMusik(new Gitar("Jrengg"));
mainkanMusik(new Drum("Dungg"));