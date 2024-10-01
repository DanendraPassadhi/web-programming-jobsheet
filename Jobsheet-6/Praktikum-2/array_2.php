<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Asosiatif</title>

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo "    <table>
    <tr>
        <th>Nama</th>
        <th>Domisili</th>
        <th>Jenis Kelamin</th>
    </tr>

    <tr>
        <td>{$Dosen['nama']}</td>
        <td>{$Dosen['domisili']}</td>
        <td>{$Dosen['jenis_kelamin']}</td>
    </tr>
    </table>";

    // echo "Nama : {$Dosen['nama']} <br>";
    // echo "Domisili : {$Dosen['domisili']} <br>";
    // echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
    ?>
</body>
</html>
