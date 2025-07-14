<?php
// Latihan Praktikum Switch Statement
// Menampilkan pesan berbeda berdasarkan ukuran baju

$ukuran_baju = "M";

echo "Ukuran baju yang dipilih: " . $ukuran_baju . "<br>";
echo "Informasi ukuran: ";

switch ($ukuran_baju) {
    case "S":
        echo "Small - Cocok untuk badan kecil";
        break;
    case "M":
        echo "Medium - Cocok untuk badan sedang";
        break;
    case "L":
        echo "Large - Cocok untuk badan besar";
        break;
    case "XL":
        echo "Extra Large - Cocok untuk badan sangat besar";
        break;
    default:
        echo "Ukuran tidak tersedia";
}
?>
