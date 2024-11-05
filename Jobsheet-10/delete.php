<?php
include 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM barang_event WHERE id = '$id'";
$query = sqlsrv_query($koneksi, $sql);

if ($query === false) {
    die(print_r(sqlsrv_errors(), true));
}

if (sqlsrv_rows_affected($query) > 0) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Error: Data tidak dapat dihapus!'); window.location='index.php';</script>";
}
?>
