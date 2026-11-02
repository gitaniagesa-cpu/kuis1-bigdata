<?php
// koneksi.php - Konfigurasi Koneksi Database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "bigdata";

// Mencoba koneksi ke database 'bigdata'
$koneksi = @mysqli_connect($host, $user, $pass, $db);

// Fallback ke 'bigdata_kampus' jika database 'bigdata' belum dipilih
if (!$koneksi) {
    $koneksi = mysqli_connect($host, $user, $pass, "bigdata_kampus");
}

if (!$koneksi) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}
?>
