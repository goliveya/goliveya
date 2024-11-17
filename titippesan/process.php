<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $pesan = htmlspecialchars($_POST['pesan']);

    echo "<h1>Pesan Anda Telah Terkirim!</h1>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Pesan:</strong> $pesan</p>";
} else {
    echo "<h1>Terjadi Kesalahan</h1>";
    echo "<p>Silakan coba lagi.</p>";
}
?>
