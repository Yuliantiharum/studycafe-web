<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']); // Menggunakan password polos sesuai struktur awal Anda

    // Cek apakah username sudah terdaftar
    $cek_user = "SELECT * FROM users WHERE username='$username'";
    $hasil_cek = mysqli_query($koneksi, $cek_user);

    if (mysqli_num_rows($hasil_cek) > 0) {
        echo "<script>
                alert('Username sudah digunakan, cari nama lain!');
                window.location.href = 'register.php';
              </script>";
        exit();
    } else {
        // Masukkan data ke database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($koneksi, $sql)) {
            echo "<script>
                    alert('Pendaftaran berhasil! Silakan login.');
                    window.location.href = 'login.php';
                  </script>";
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register StudyCafe</title>
</head>
<body>
    <h2>Daftar Akun Baru</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username Baru" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>