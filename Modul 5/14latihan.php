<!DOCTYPE html>
<html>
<head>
    <title>Latihan Praktikum - PHP Global Variables (Superglobals)</title>
</head>
<body>
    <h2>14. PHP Global Variables - Superglobals</h2>
    
    <h3>a. Penjelasan</h3>
    <p>Superglobals adalah variabel bawaan PHP yang selalu dapat diakses. $_POST dan $_GET digunakan untuk mengambil data dari form.</p>
    
    <h3>b. Contoh Kode File: superglobals.php (form yang mengirim data ke dirinya sendiri)</h3>
    
    <!-- Form untuk mengirim data -->
    <form method="post" action="14latihan.php">
        Nama: <input type="text" name="nama">
        <input type="submit">
    </form>
    <br>
    
    <?php
    // Cek apakah form telah disubmit
    if (isset($_POST['nama'])) {
        $nama = htmlspecialchars($_POST['nama']);
        echo "Halo, " . $nama . "!";
    }
    ?>
    
    <h3>c. Latihan Praktikum</h3>
    <p><strong>Silahkan praktikkan contoh kode di atas.</strong></p>
    
    <h4>Instruksi:</h4>
    <ul>
        <li>Coba ubah method form menjadi get dan ubah $_POST menjadi $_GET</li>
        <li>Lalu amati URL browser</li>
        <li>Berikan capture (tangkapan layar) kemudian analisis dari hasil praktikum Anda di laporan</li>
    </ul>
    
    <h4>Contoh dengan Method GET:</h4>
    <form method="get" action="14latihan.php">
        Nama (GET): <input type="text" name="nama_get">
        <input type="submit" value="Kirim dengan GET">
    </form>
    <br>
    
    <?php
    // Cek apakah form GET telah disubmit
    if (isset($_GET['nama_get'])) {
        $nama_get = htmlspecialchars($_GET['nama_get']);
        echo "Halo dari GET, " . $nama_get . "!<br>";
        echo "Perhatikan URL browser Anda!";
    }
    ?>
    
    <h4>Analisis Perbedaan POST vs GET:</h4>
    <ul>
        <li><strong>POST:</strong> Data tidak terlihat di URL, lebih aman untuk data sensitif</li>
        <li><strong>GET:</strong> Data terlihat di URL, cocok untuk pencarian atau bookmark</li>
        <li><strong>$_POST:</strong> Mengambil data dari form dengan method="post"</li>
        <li><strong>$_GET:</strong> Mengambil data dari form dengan method="get" atau URL parameter</li>
    </ul>
    
</body>
</html>
