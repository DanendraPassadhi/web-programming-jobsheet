<?php 
//Mendefinisikan nama server pada SQL Server
$serverName = "LAPTOP-870BRNR8";

//Koneksi ke database
$connectionInfo = ["Database" => "db_kelola"];

//Membuat koneksi kedalam SQL Server
$koneksi = sqlsrv_connect($serverName, $connectionInfo);

if ($koneksi === false) {
    die(print_r(sqlsrv_errors(), true)); 
}
?>