<?php
session_start();
include 'koneksi.php';

// Opsional: hanya admin yang boleh akses
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Booking - StudyCafe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #fff;
            margin: 0;
            padding: 20px;
        }
        h2 { color: #f59e0b; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #1e1e1e;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f59e0b;
            color: #121212;
        }
        tr:nth-child(even) {
            background-color: #2a2a2a;
        }
    </style>
</head>
<body>
    <h2>📋 Daftar Booking StudyCafe</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Waktu</th>
        </tr>
        <?php
        $sql = "SELECT * FROM booking ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['no_hp']."</td>
                        <td>".$row['waktu']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Belum ada data booking</td></tr>";
        }
        ?>
    </table>
</body>
</html>
