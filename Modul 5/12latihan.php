<?php
echo "<h2>Latihan Praktikum - PHP Functions</h2>";

echo "<h3>a. Penjelasan</h3>";
echo "<p>Fungsi adalah blok kode yang dapat digunakan kembali. Dapat menerima parameter dan mengembalikan nilai.</p>";

echo "<h3>b. Contoh Kode File: functions.php</h3>";

// Contoh fungsi dari gambar
function hitung_diskon($harga, $persen_diskon) {
    $potongan = $harga * ($persen_diskon / 100);
    return $harga - $potongan;
}

// Menggunakan fungsi
$harga_baju = 150000;
$harga_setelah_diskon = hitung_diskon($harga_baju, 10); // Diskon 10%
echo "Harga akhir: Rp " . $harga_setelah_diskon . "<br>";

echo "<h3>c. Latihan Praktikum</h3>";

echo "<h4>1. Praktikkan contoh kode di atas:</h4>";
echo "Harga asli: Rp " . $harga_baju . "<br>";
echo "Diskon: 10%<br>";
echo "Harga setelah diskon: Rp " . $harga_setelah_diskon . "<br>";

echo "<h4>2. Buat fungsi sapa(\$nama, \$waktu):</h4>";

// Fungsi sapa sesuai instruksi
function sapa($nama, $waktu) {
    return "Selamat " . $waktu . ", " . $nama . "!";
}

// Contoh penggunaan fungsi sapa
echo sapa("Budi", "Pagi") . "<br>";
echo sapa("Sari", "Siang") . "<br>";

echo "<h4>3. Analisis:</h4>";
echo "- Fungsi membantu mengorganisir kode<br>";
echo "- Parameter memungkinkan input yang berbeda<br>";
echo "- Return value mengembalikan hasil<br>";
?>
