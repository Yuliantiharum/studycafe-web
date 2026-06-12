<!-- Pastikan action mengarah ke proses_booking.php dan menggunakan method POST -->
<form action="proses_booking.php" method="POST">
    
    <div style="margin-bottom: 15px;">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required placeholder="Masukkan nama Anda..." style="width: 100%; padding: 8px; margin-top: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label>Email:</label><br>
        <input type="email" name="email" required placeholder="Masukkan email Anda..." style="width: 100%; padding: 8px; margin-top: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label>Nomor HP:</label><br>
        <input type="text" name="no_hp" required placeholder="Contoh: 08123456789" style="width: 100%; padding: 8px; margin-top: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label>Waktu Datang:</label><br>
        <!-- Menggunakan datetime-local agar format tanggal dan jam sesuai -->
        <input type="datetime-local" name="waktu" required style="width: 100%; padding: 8px; margin-top: 5px;">
    </div>

    <button type="submit" style="padding: 10px 20px; background-color: #e0a800; color: #000; border: none; font-weight: bold; cursor: pointer;">
        Booking Sekarang
    </button>
</form>