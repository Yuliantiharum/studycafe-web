<?php
// Mengambil data otomatis dari variabel database Railway Anda
$host = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$user = getenv('MYSQLUSER') ?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: 'TeSpvoLeOxKHbnBllMBTGiUoWKWJqdxs';
$db   = getenv('MYSQL_DATABASE') ?: 'railway';
$port = getenv('MYSQLPORT') ?: '3306';

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
