<?php
 $kalimat = "STITEK Bontang adalah kampus IT terbaik";
 echo "Kalimat asli: " . $kalimat . "<br>";
 
 $kalimat_kapital = strtoupper($kalimat);
 echo "Kalimat dalam huruf kapital: " . $kalimat_kapital . "<br>";
 
 // Contoh lain penggunaan strtoupper()
 $text_campuran = "StITeK BonTANG";
 echo "<br>Text campuran: " . $text_campuran . "<br>";
 echo "Text campuran dalam huruf kapital: " . strtoupper($text_campuran) . "<br>";
 
