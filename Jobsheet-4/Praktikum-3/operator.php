<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil = $hasilTambah <br>";
echo "Hasil = $hasilKurang <br>";
echo "Hasil = $hasilKali <br>";
echo "Hasil = $hasilBagi <br>";
echo "Hasil = $sisaBagi <br>";
echo "Hasil = $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil = $hasilSama <br>";
echo "Hasil = $hasilTidakSama <br>";
echo "Hasil = $hasilLebihKecil <br>";
echo "Hasil = $hasilLebihBesar <br>";
echo "Hasil = $hasilLebihKecilSama <br>";
echo "Hasil = $hasilLebihBesarSama <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;  
$hasilNotA = !$a;     
$hasilNotB = !$b;

echo "Hasil = $hasilAnd <br>";
echo "Hasil = $hasilOr <br>";
echo "Hasil = $hasilNotA <br>";
echo "Hasil = $hasilNotB <br><br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil Tambah = $a <br>";
echo "Hasil Kurang = $a <br>";
echo "Hasil Kali = $a <br>";
echo "Hasil Bagi = $a <br>";
echo "Hasil Modulus = $a <br>";
?>