<?php
echo "<h2>Latihan 9 - Switch Statement untuk Ukuran Baju</h2>";

// Variabel ukuran baju
$ukuran_baju = "M"; // Bisa diubah ke "S", "M", "L", atau "XL"

echo "<p>Ukuran baju yang dipilih: <strong>$ukuran_baju</strong></p>";

// Switch statement untuk menampilkan pesan berbeda
switch ($ukuran_baju) {
    case "S":
        echo "<p>Anda memilih ukuran <strong>Small (S)</strong></p>";
        echo "<p>Ukuran ini cocok untuk orang dengan berat badan 45-55 kg</p>";
        echo "<p>Lingkar dada: 86-91 cm</p>";
        break;
    
    case "M":
        echo "<p>Anda memilih ukuran <strong>Medium (M)</strong></p>";
        echo "<p>Ukuran ini cocok untuk orang dengan berat badan 55-65 kg</p>";
        echo "<p>Lingkar dada: 91-96 cm</p>";
        break;
    
    case "L":
        echo "<p>Anda memilih ukuran <strong>Large (L)</strong></p>";
        echo "<p>Ukuran ini cocok untuk orang dengan berat badan 65-75 kg</p>";
        echo "<p>Lingkar dada: 96-101 cm</p>";
        break;
    
    case "XL":
        echo "<p>Anda memilih ukuran <strong>Extra Large (XL)</strong></p>";
        echo "<p>Ukuran ini cocok untuk orang dengan berat badan 75-85 kg</p>";
        echo "<p>Lingkar dada: 101-106 cm</p>";
        break;
    
    default:
        echo "<p>Ukuran tidak tersedia. Silakan pilih S, M, L, atau XL</p>";
        break;
}

echo "<hr>";
echo "<h3>Contoh dengan Ukuran Berbeda:</h3>";

// Array untuk menampilkan semua contoh
$ukuran_tersedia = array("S", "M", "L", "XL", "XXL");

foreach ($ukuran_tersedia as $ukuran) {
    echo "<h4>Ukuran: $ukuran</h4>";
    
    switch ($ukuran) {
        case "S":
            echo "Small - Cocok untuk tubuh kecil<br>";
            break;
        
        case "M":
            echo "Medium - Ukuran standar yang paling populer<br>";
            break;
        
        case "L":
            echo "Large - Untuk tubuh yang lebih besar<br>";
            break;
        
        case "XL":
            echo "Extra Large - Ukuran jumbo<br>";
            break;
        
        default:
            echo "Ukuran tidak tersedia di toko kami<br>";
            break;
    }
    echo "<br>";
}
?>
