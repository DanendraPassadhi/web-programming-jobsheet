<?php
$koneksi = mysqli_connect("localhost", "root", "", "phealing");

$nama = htmlspecialchars($_POST["nama"]);
$alamat = htmlspecialchars($_POST["alamat"]);
$email = htmlspecialchars($_POST["email"]);
$telepon = htmlspecialchars($_POST["telepon"]);

$query = "INSERT INTO registrasi 
        VALUES('$nama', '$alamat', '$email', '$telepon')";

$result = mysqli_query($koneksi, $query);


echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background-color: white;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        text-align: center;
    }
    h2 {
        color: #1D9D74;
    }
    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #1D9D74;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    a:hover {
        background-color: #167d5c;
    }
</style>";

echo "<div class='container'>";
if ($result) {
    echo "<h2>Data berhasil diinput!</h2>";
    echo "<p>Terima kasih telah mendaftar.</p>";
} else {
    echo "<h2>Terjadi kesalahan saat menginput data.</h2>";
    echo "<p>Silakan coba lagi nanti.</p>";
}

echo "<a href='index.html'>Kembali ke Beranda</a>";
echo "</div>";
?>
