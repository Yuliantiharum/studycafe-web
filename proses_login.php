<?php
// WAJIB PALING ATAS, TIDAK BOLEH ADA SPASI ATAU ECHO SEBELUM KODE INI
session_start(); 

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Cari user di database
$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$ketemu = mysqli_num_rows($login);

if ($ketemu > 0) {
    // Ambil data user dari database
    $data_user = mysqli_fetch_assoc($login);

    // MEMBUAT SESSION (Ini kunci agar data tidak hilang pas di-refresh)
    $_SESSION['status_login'] = true;
    $_SESSION['user_nama']    = $data_user['nama']; // Menyimpan nama user ke browser
    $_SESSION['user_id']      = $data_user['id'];

    // Pindahkan ke dashboard
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>alert('Username atau Password Salah!'); window.location='login_form.php';</script>";
}
?>