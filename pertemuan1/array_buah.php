<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buah</title>
</head>
<body>

<?php
// Task 1: Array Multidimensi Data Buah
$data_buah = array(
    array("nama" => "Apel", "warna" => "Merah", "stok" => 50, "harga" => 7000, "deskripsi" => "Buah yang kaya akan serat."),
    array("nama" => "Jeruk", "warna" => "Oranye", "stok" => 30, "harga" => 9000, "deskripsi" => "Buah yang tinggi vitamin C."),
    array("nama" => "Pisang", "warna" => "Kuning", "stok" => 40, "harga" => 5000, "deskripsi" => "Buah yang baik untuk kesehatan jantung."),
    array("nama" => "Anggur", "warna" => "Ungu", "stok" => 25, "harga" => 15000, "deskripsi" => "Buah yang mengandung antioksidan tinggi."),
    // Tambahkan data buah lainnya sesuai kebutuhan
);

// Task 2: Menampilkan Data Array sebagai Tabel
echo "<table border='1'>";
echo "<tr><th>Nama Buah</th><th>Warna</th><th>Stok</th><th>Harga</th><th>Deskripsi</th></tr>";

foreach ($data_buah as $buah) {
    echo "<tr>";
    echo "<td>{$buah['nama']}</td>";
    echo "<td>{$buah['warna']}</td>";
    echo "<td>{$buah['stok']}</td>";
    echo "<td>{$buah['harga']}</td>";
    echo "<td>{$buah['deskripsi']}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
