//Gambaran jika menggunakan array, namun tidak digunakan, hanya untuk pembeda saja

<?php
$pendaftaran = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $pendaftaran[] = [
        'nama' => $nama,
        'alamat' => $alamat,
        'email' => $email,
        'telepon' => $telepon
    ];

    echo "<h2>Data Pendaftaran:</h2>";
    echo "<ul>";
    foreach ($pendaftaran as $data) {
        echo "<li>Nama: " . $data['nama'] . "</li>";
        echo "<li>Alamat: " . $data['alamat'] . "</li>";
        echo "<li>Email: " . $data['email'] . "</li>";
        echo "<li>Telepon: " . $data['telepon'] . "</li>";
    }
    echo "</ul>";

    echo "<a href='index.html'>Kembali ke Formulir</a>";
} else {
    header("Location: index.html");
    exit();
}
?>