<?php

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);

$nilaiTerendah = array_splice($nilai, 2);
$nilaiTerbesar = array_splice($nilaiTerendah, 0, -2);
$rataRata = array_sum($nilaiTerbesar);

$total = $rataRata / 6;

echo "Rata-rata nilai siswa setelah mengabaikan 
2 nilai tertinggi dan 2 nilai terendah adalah " . $total;
?>