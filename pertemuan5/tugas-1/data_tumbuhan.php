<?php

require_once 'class_tumbuhan.php';

// Objects
$bunga = new Bunga('Mawar', 'Tropis', 'Merah');
$pohon = new Pohon('Pohon Pinus', 'Hutan', 15); // Fixed variable name

// Echo 
echo 'Info Bunga: <br>';
$bunga->getInfoBunga();
echo '<hr>';

echo 'Info Pohon: <br>';
$pohon->getInfoPohon(); // Corrected method call
echo '<hr>';

?>
