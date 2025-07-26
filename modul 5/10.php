<?php
$ukuran_baju = "XL"; // Ganti nilai sesuai kebutuhan

echo "Ukuran yang dipilih: $ukuran_baju<br>";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small - cocok untuk anak-anak atau tubuh kecil.";
        break;
    case "M":
        echo "Ukuran Medium - cocok untuk remaja atau dewasa dengan tubuh sedang.";
        break;
    case "L":
        echo "Ukuran Large - cocok untuk dewasa dengan tubuh besar.";
        break;
    case "XL":
        echo "Ukuran Extra Large - cocok untuk tubuh ekstra besar.";
        break;
    default:
        echo "Ukuran tidak dikenali.";
}
?>
