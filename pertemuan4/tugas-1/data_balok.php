<?php
require_once 'class_balok.php';

$balok1 = new Balok(5, 10, 15);
$balok2 = new Balok(2, 4, 6);
$balok3 = new Balok(15, 16, 17);
$balok4 = new Balok(20, 40, 60);

echo '<br><br>Balok 1: ';
echo '<br>Luas: ' . $balok1->getLuas() .'cm';
echo '<br>Keliling: ' . $balok1->getKel() .'cm';
echo '<br>Vol: ' . $balok1->getVol() . 'cm';

echo '<br><br>Balok 2: ';
echo '<br>Luas: ' . $balok2->getLuas() .'cm';
echo '<br>Keliling: ' . $balok2->getKel() .'cm';
echo '<br>Vol: ' . $balok2->getVol() . 'cm';

echo '<br><br>Balok 3: ';
echo '<br>Luas: ' . $balok3->getLuas() .'cm';
echo '<br>Keliling: ' . $balok3->getKel() .'cm';
echo '<br>Vol: ' . $balok3->getVol() . 'cm';

echo '<br><br>Balok 4: ';
echo '<br>Luas: ' . $balok4->getLuas() . 'cm';
echo '<br>Keliling: ' . $balok4->getKel() . 'cm';
echo '<br>Vol: ' . $balok4->getVol() . 'cm';


?>
