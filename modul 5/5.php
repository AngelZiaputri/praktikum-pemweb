<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";

// Menghitung panjang kalimat
echo "Panjang kalimat: " . strlen($kalimat) . "<br>";

// Menghitung jumlah kata
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";

// Mengganti kata "terbaik" dengan "favorit"
echo "Mengganti kata: " . str_replace("terbaik", "favorit", $kalimat) . "<br>";

// Mengubah seluruh kalimat menjadi huruf kapital
echo "Huruf kapital semua: " . strtoupper($kalimat);
?>
