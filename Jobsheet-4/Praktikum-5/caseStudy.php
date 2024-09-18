<?php

$nilaiMatematika = [
    ["nama" => "Alice", "nilai" => 85],
    ["nama" => "Bob", "nilai" => 92],
    ["nama" => "Charlie", "nilai" => 78],
    ["nama" => "David", "nilai" => 64],
    ["nama" => "Eva", "nilai" => 90],
];

$jmlNilai = array_sum(array_column($nilaiMatematika, 'nilai'));
$rataRata = $jmlNilai / count($nilaiMatematika);

$nilai = [];
foreach ($nilaiMatematika as $siswa) {
    if ($siswa['nilai'] > $rataRata) {
        $nilai[] = $siswa['nama'];
    }
}

echo "Nilai rata-rata kelas : " . $rataRata . "<br>";
echo "Siswa dengan nilai di atas rata-rata : " . implode(', ', $nilai);
?>