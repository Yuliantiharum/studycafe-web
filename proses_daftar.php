<?php
// 1. Pastikan file koneksi sudah benar arahnya
include "koneksi.php"; 

// 2. Ambil data dari form register.php (sesuaikan name inputnya)
$username = $_POST['username'];
$password = $_POST['password']; // Disarankan pakai password_hash untuk keamanan
$nama     = $_POST['nama']; 

// 3. Ketik Query SQL dengan teliti (Sesuaikan nama tabel & kolom di phpMyAdmin Anda)
// Contoh nama tabel: users. Contoh kolom: username, password, nama
$query = "INSERT INTO users (username, password, nama) VALUES ('$username', '$password', '$nama')";

// 4. Eksekusi query dan CEK ERROR-nya
if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, langsung alihkan ke halaman login_form.php
    echo "<script>alert('Pendaftaran Berhasil!'); window.location='login_form.php';</script>";
} else {
    // JIKA GAGAL, KODE INI AKAN MEMBERITAHU APA YANG SALAH
    echo "Gagal mendaftar! Error: " . mysqli_error($koneksi);
}
?>