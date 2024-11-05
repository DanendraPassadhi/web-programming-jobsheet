<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = htmlspecialchars($_POST['nama_barang']);
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $kondisi = $_POST['kondisi'];
    $keterangan = htmlspecialchars($_POST['keterangan']);

    //Mengirim data menuju tabel barang_event poda database 
    $query = "INSERT INTO barang_event (nama_barang, kategori, jumlah, kondisi, keterangan) 
              VALUES ('$nama_barang', '$kategori', '$jumlah', '$kondisi', '$keterangan')";

    $stmt = sqlsrv_query($koneksi, $query);

    if ($stmt === false) {
        echo "<script>alert('Error: " . print_r(sqlsrv_errors(), true) . "'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data barang berhasil ditambahkan!'); window.location='index.php';</script>";
    }
}
?>
