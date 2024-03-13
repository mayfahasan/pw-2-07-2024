<?php
class Calculator {
    private $bilangan1;
    private $bilangan2;

    public function __construct($bil1, $bil2) {
        $this->bilangan1 = $bil1;
        $this->bilangan2 = $bil2;
    }

    public function pertambahan() {
        return $this->bilangan1 + $this->bilangan2;
    }

    public function pengurangan() {
        return $this->bilangan1 - $this->bilangan2;
    }

    public function pembagian() {
        if ($this->bilangan2 == 0) {
            return 'Pembagian oleh nol tidak dapat dilakukan.';
        }
        return $this->bilangan1 / $this->bilangan2;
    }

    public function perkalian() {
        return $this->bilangan1 * $this->bilangan2;
    }
}

// Buat objek dan tampilkan masing-masing method
$calculator = new Calculator(10, 5);
echo 'Hasil Pertambahan: ' . $calculator->pertambahan() . 'cm';
echo '<br><br>Hasil Pengurangan: ' . $calculator->pengurangan() . 'cm';
echo '<br><br>Hasil Pembagian: ' . $calculator->pembagian() . 'cm';
echo '<br><br>Hasil Perkalian: ' . $calculator->perkalian() . 'cm';
?>
