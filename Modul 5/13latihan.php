<?php
echo "<h2>Latihan 13 - PHP Arrays</h2>";

echo "<h3>b. Contoh Kode File: arrays.php</h3>";

// Associative Array
$data_dosen = [
    "nama" => "Ir. ABADI NUGROHO, S.Kom., M.Kom.",
    "nidn" => "1104129002",
    "matkul" => "Pemrograman Web"
];

echo "Dosen Pengampu: " . $data_dosen["nama"] . "<br>";

echo "<h3>c. Latihan Praktikum</h3>";

echo "<h4>1. Praktikkan contoh kode di atas:</h4>";
echo "<p>Data Dosen:</p>";
echo "<ul>";
echo "<li>Nama: " . $data_dosen["nama"] . "</li>";
echo "<li>NIDN: " . $data_dosen["nidn"] . "</li>";
echo "<li>Mata Kuliah: " . $data_dosen["matkul"] . "</li>";
echo "</ul>";

echo "<h4>2. Buat sebuah indexed array yang berisi daftar nama teman sekelas Anda dan tampilkan menggunakan foreach:</h4>";

// Indexed array berisi daftar nama teman sekelas
$nama_teman = [
    "Ahmad Rizki",
    "Siti Nurhaliza", 
    "Budi Santoso",
    "Rina Kartika",
    "Dedi Setiawan",
    "Maya Sari",
    "Andi Pratama",
    "Lina Wati"
];

echo "<p>Daftar Nama Teman Sekelas:</p>";
echo "<ol>";
foreach ($nama_teman as $nama) {
    echo "<li>" . $nama . "</li>";
}
echo "</ol>";

echo "<h4>3. Contoh Tambahan - Array Multidimensi:</h4>";

// Array multidimensi untuk data mahasiswa
$data_mahasiswa = [
    [
        "nama" => "Ahmad Rizki",
        "nim" => "2021001",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Siti Nurhaliza",
        "nim" => "2021002", 
        "jurusan" => "Sistem Informasi"
    ],
    [
        "nama" => "Budi Santoso",
        "nim" => "2021003",
        "jurusan" => "Teknik Informatika"
    ]
];

echo "<p>Data Mahasiswa (Array Multidimensi):</p>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #f2f2f2;'>";
echo "<th style='padding: 8px;'>No</th>";
echo "<th style='padding: 8px;'>Nama</th>";
echo "<th style='padding: 8px;'>NIM</th>";
echo "<th style='padding: 8px;'>Jurusan</th>";
echo "</tr>";

foreach ($data_mahasiswa as $index => $mahasiswa) {
    echo "<tr>";
    echo "<td style='padding: 8px; text-align: center;'>" . ($index + 1) . "</td>";
    echo "<td style='padding: 8px;'>" . $mahasiswa["nama"] . "</td>";
    echo "<td style='padding: 8px;'>" . $mahasiswa["nim"] . "</td>";
    echo "<td style='padding: 8px;'>" . $mahasiswa["jurusan"] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h4>4. Analisis:</h4>";
echo "<ul>";
echo "<li><strong>Indexed Array:</strong> Array dengan indeks numerik (0, 1, 2, ...)</li>";
echo "<li><strong>Associative Array:</strong> Array dengan key berupa string</li>";
echo "<li><strong>Foreach:</strong> Sangat efektif untuk mengiterasi semua elemen array</li>";
echo "<li><strong>Array Multidimensi:</strong> Array yang berisi array lain, cocok untuk data terstruktur</li>";
echo "</ul>";
?>
