<?php
class Balok {
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($p, $l, $t) {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas() {
        $luas_permukaan = 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
        return $luas_permukaan;
    }

    public function getKel() {
        $keliling = 4 * ($this->panjang + $this->lebar + $this->tinggi);
        return $keliling;
    }

    public function getVol() {
        $vol = $this->panjang * $this->lebar * $this->tinggi;
        return $vol;
    }
}

$balok1 = new Balok(15, 7, 9);
echo 'Luas: ' . $balok1->getLuas() . 'cm';
echo '<br>Keliling: ' . $balok1->getKel() . 'cm'; 
echo '<br>Vol: ' . $balok1->getVol();
?>
