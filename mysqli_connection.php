<?php
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Membuat koneksi MySQLi
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi MySQLi berhasil!";
}
?>