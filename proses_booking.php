<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    
    // Data ini akan disimpan di file bernama 'pesanan.txt'
    $data = "Nama: " . $nama . " | Waktu: " . date("Y-m-d H:i:s") . "\n";
    
    // Menyimpan ke file
    file_put_contents('pesanan.txt', $data, FILE_APPEND);
    
    echo "<h1>Terima kasih, $nama!</h1>";
    echo "<p>Pesanan Anda sudah kami terima.</p>";
    echo "<a href='index.php'>Kembali ke Beranda</a>";
} else {
    echo "Akses ditolak.";
}
?>
