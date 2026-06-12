<?php
// 1. Hubungkan ke file koneksi database
include "koneksi.php";

// 2. Ambil data dari form dengan metode POST (Huruf kecil semua agar sinkron)
$nama  = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$waktu = $_POST['waktu'];

// 3. Validasi dasar agar tidak ada data kosong yang lolos
if (empty($nama) || empty($email) || empty($no_hp) || empty($waktu)) {
    echo "<script>alert('Semua data wajib diisi!'); window.history.back();</script>";
    exit();
}

/* 
  4. Query Simpan ke Tabel. 
  Catatan: Di localhost Anda namanya 'booking' (tanpa S). 
  Jika nanti di hosting online nama tabelnya 'bookings' (pakai S), 
  tinggal ganti tulisan 'booking' di bawah ini menjadi 'bookings'.
*/
$query = "INSERT INTO booking (nama, email, no_hp, waktu) VALUES ('$nama', '$email', '$no_hp', '$waktu')";

// 5. Jalankan query dan cek hasilnya
if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, muncul pop-up sukses dan dialihkan kembali ke halaman utama
    echo "<script>
            alert('Data Booking Berhasil Disimpan!'); 
            window.location='index.php'; 
          </script>";
} else {
    // Jika error, tampilkan pesan errornya agar mudah dilacak
    echo "Gagal menyimpan data ke database. Error: " . mysqli_error($koneksi);
}
?>