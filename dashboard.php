<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // kalau belum login, balik ke login
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
  <p>Ini halaman setelah login. Kalau refresh, tetap login karena pakai session.</p>
  <a href="logout.php">Logout</a>
</body>
</html>

<?php
session_start();

// Cek apakah user sudah login atau belum
if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] !== true) {
    // Jika belum login, tendang ke halaman login_form.php
    header("Location: login_form.php");
    exit();
}
?>

<h1>Selamat Datang, <?php echo $_SESSION['user_nama']; ?>!</h1>