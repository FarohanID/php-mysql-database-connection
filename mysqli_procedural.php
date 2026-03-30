<?php
$servername = "localhost"; // Default XAMPP biasanya 'localhost'
$username = "root"; // Default XAMPP biasanya 'root'
$password = ""; // Default XAMPP biasanya kosong
$dbname = "test"; // Nama database kamu

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

// Cek koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi Berhasil";

// Menutup koneksi
mysqli_close($conn);
?>