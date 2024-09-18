<?php

$belanja = 120000;

if ($belanja > 100000) {
    $belanja = $belanja * 80/100;
}

echo "Harga yang harus dibayarkan oleh pelanggan adalah Rp " . $belanja;
?>