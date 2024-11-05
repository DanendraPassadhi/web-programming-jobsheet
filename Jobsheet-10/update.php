<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_barang = htmlspecialchars($_POST['nama_barang']);
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $kondisi = $_POST['kondisi'];
    $keterangan = htmlspecialchars($_POST['keterangan']);

    //Mengupdate data pada tabel barang_event
    $query = "UPDATE barang_event SET 
              nama_barang = '$nama_barang',
              kategori = '$kategori',
              jumlah = '$jumlah',
              kondisi = '$kondisi',
              keterangan = '$keterangan'
              WHERE id = '$id'";

    $stmt = sqlsrv_query($koneksi, $query);

    if ($stmt === false) {
        echo "<script>alert('Error: " . print_r(sqlsrv_errors(), true) . "'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
    }
}
?>
