<?php
$umur = 18;
$sudah_punya_sim = true; // Sudah diubah agar kondisi terpenuhi

echo "Umur Anda: " . $umur . "<br>";

if ($umur >= 17 && $sudah_punya_sim == true) {
    echo "Anda boleh mengemudi.";
} else {
    echo "Anda tidak boleh mengemudi.";
}
?>
