<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.7.1.js"></script>
    <script>
      $(document).ready(function () {
        $(".toggle").click(function () {
          $(".table").slideToggle("slow");
        });
      });
    </script>
    <title>Study Case Data Siswa</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-collapse: collapse;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

.toggle {
    text-align: center;
    background-color: #69bf64;
    padding: 20px;
    border-radius: 10px;
    color: #ffffff;
    font-weight: 900;
}
</style>

</head>
<body>
<div class="toggle">Klik Untuk Slide</div>
<div class="table">
<?php
    $dataSiswa = array(
        array(
            'nama' => 'dina',
            'umur' => '19',
            'kelas' => '10A',
            'alamat' => 'Malang'),
        array(
            'nama' => 'dini',
            'umur' => '18',
            'kelas' => '10B',
            'alamat' => 'Surabaya'),
        array(
            'nama' => 'dino',
            'umur' => '20',
            'kelas' => '10A',
            'alamat' => 'Jakarta'),
        array(
            'nama' => 'supri',
            'umur' => '21',
            'kelas' => '10B',
            'alamat' => 'Jember')
    );

    echo "<h1>Data Siswa</h1>";
    echo "<table>
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Kelas</th>
        <th>Alamat</th>
    </tr>";
    foreach ($dataSiswa as $siswa) {
        echo "<tr>";
        echo "<td>{$siswa['nama']}</td>";
        echo "<td>{$siswa['umur']}</td>";
        echo "<td>{$siswa['kelas']}</td>";
        echo "<td>{$siswa['alamat']}</td>";
        echo "</tr>";
    }
    echo "</table>";

    $jumlah = 0;
    foreach ($dataSiswa as $siswa) {
        $jumlah += $siswa['umur'];
    }
    $rataRata = $jumlah / count($dataSiswa);
    echo "<h3>Rata-rata Umur Siswa: " . $rataRata. " tahun</h3>";
?>
</div>
</body>
</html>