<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Menghubungkan ke Database MySQL Railway Asli Anda
$host = "junction.proxy.rlwy.net"; 
$user = "root";
$pass = "TeSpvoLeOxKHbnBllMBTGiUoWKWJqdxs"; 
$db   = "railway";
$port = "51433"; 

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    die("Koneksi ke Database Railway Gagal: " . mysqli_connect_error());
}
?>