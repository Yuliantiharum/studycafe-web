<?php
$data = $_POST['nama'] . "|" . $_POST['pesanan'] . "\n";
file_put_contents("data_booking.txt", $data, FILE_APPEND);
header("Location: index.php?status=sukses");
?>
