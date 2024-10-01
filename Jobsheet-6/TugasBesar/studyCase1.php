<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Case Array Multidimensi</title>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>
    <table>
        <?php
        $dataMhs = array(
            array(
                'nama' => 'dina',
                'nim' => '123456',
                'jurusan' => 'teknik kimia',
                'email' => 'dina@gmail.com'),
            array(
                'nama' => 'dino',
                'nim' => '9123124',
                'jurusan' => 'teknik listrik',
                'email' => 'dino@gmail.com')
        );

        foreach ($dataMhs as $mhs) {
            echo "<ul>";
            echo "<li>Nama: {$mhs['nama']}</li>";
            echo "<li>Nim: {$mhs['nim']}</li>";
            echo "<li>Jurusan: {$mhs['jurusan']}</li>";
            echo "<li>Email: {$mhs['email']}</li>";
            echo "</ul>";
        }
        ?>
    </table>
</body>
</html>