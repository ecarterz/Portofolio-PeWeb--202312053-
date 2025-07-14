<?php
echo "<h2>Latihan Praktikum - Perulangan PHP</h2>";

echo "<h3>1. Contoh Perulangan For</h3>";
// Perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Perulangan ke-" . ($i + 1) . "<br>";
}

echo "<h3>2. Contoh Perulangan While</h3>";
// Perulangan while
$angka = 5;
while ($angka > 0) {
    echo "Hitung mundur: $angka <br>";
    $angka--;
}

echo "<h3>3. Contoh Perulangan Foreach dengan Array</h3>";
// Membuat array untuk contoh foreach
$buah_buahan = array("Apel", "Jeruk", "Mangga", "Pisang", "Anggur");

echo "<p>Daftar buah-buahan menggunakan foreach:</p>";
foreach ($buah_buahan as $buah) {
    echo "- " . $buah . "<br>";
}

echo "<h3>4. Contoh Foreach dengan Array Asosiatif</h3>";
// Array asosiatif untuk contoh yang lebih lengkap
$mahasiswa = array(
    "nama" => "Abadi Nugroho",
    "nim" => "123456789",
    "jurusan" => "Teknik Informatika",
    "semester" => 3,
    "ipk" => 3.75
);

echo "<p>Data mahasiswa menggunakan foreach:</p>";
foreach ($mahasiswa as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}

echo "<h3>5. Contoh Foreach dengan Array Multidimensi</h3>";
// Array multidimensi
$daftar_mahasiswa = array(
    array("nama" => "Abadi Nugroho", "nilai" => 85),
    array("nama" => "Sari Dewi", "nilai" => 92),
    array("nama" => "Budi Santoso", "nilai" => 78),
    array("nama" => "Rina Kartika", "nilai" => 88)
);

echo "<p>Daftar nilai mahasiswa:</p>";
foreach ($daftar_mahasiswa as $index => $mahasiswa) {
    echo ($index + 1) . ". ";
    foreach ($mahasiswa as $key => $value) {
        echo ucfirst($key) . ": " . $value . " ";
    }
    echo "<br>";
}

echo "<h3>Analisis Hasil Praktikum:</h3>";
echo "<p><strong>Kesimpulan:</strong></p>";
echo "<ul>";
echo "<li>Perulangan <strong>for</strong> cocok digunakan ketika kita tahu berapa kali perulangan akan dilakukan</li>";
echo "<li>Perulangan <strong>while</strong> cocok digunakan ketika kondisi perulangan bergantung pada suatu kondisi yang dapat berubah</li>";
echo "<li>Perulangan <strong>foreach</strong> sangat efektif untuk mengiterasi semua elemen dalam array, baik array indexed maupun asosiatif</li>";
echo "<li>Foreach dapat digunakan untuk array multidimensi dengan nested foreach</li>";
echo "</ul>";
?>
