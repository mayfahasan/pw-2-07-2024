<?php

// 
// Associative Array
// 
//     $fruits = ["Mangga", "Delima", "Jeruk"];
   
//    foreach ($fruits as $fruit) {
//         echo $fruit;
//         echo "<br>";
//    }

//     $dinos = [
//         'dinoName' => 'Trist',
//         'dinoAge' => 300,
//         'isMarried' => 'false'
//     ];

//    foreach ($dinos as $dino) {
//     echo $dino;
//     echo '<br>';
//    }

$dinos = [
    [
        'dinoname' => 'Trist',
        'dinoAge' => '300'
    ],

    [
        'dinoname' => 'Rex',
        'dinoAge' => '500'
    ],

   [
    'dinoname' => 'Piera',
    'dinoAge' => '250'
   ],
];

foreach ($dinos as $dino) {
    echo "Nama Dino: " . $dino['dinoname'] . ", Usia Dino: " . $dino['dinoAge'] . " tahun<br>";
}

?>
