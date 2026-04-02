<?php
// Konfigurasi database
$host = "localhost"; // Alamat server database
$db = "test"; // Nama database yang akan digunakan
$user = "root"; // Username untuk koneksi ke database
$pass = ""; // Password untuk koneksi ke database
$charset = "utf8mb4"; // Charset yang digunakan untuk koneksi

// Membuat DSN (Data Source Name) untuk koneksi PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Mengatur mode error ke exception
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mengatur mode fetch default ke associative array
    PDO::ATTR_EMULATE_PREPARES => false, // Menonaktifkan emulasi prepared statements untuk keamanan yang lebih baik
];
// Mencoba membuat koneksi PDO
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Koneksi PDO berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}


# Penjelasan:
# 1. Konfigurasi Database: Variabel untuk host, nama database, username, password, dan charset.
# 2. DSN (Data Source Name): String yang digunakan untuk menghubungkan ke database.
# 3. Opsi PDO: Array yang mengatur mode error, mode fetch, dan emulasi prepared statements.
# 4. Try-Catch: Mencoba membuat koneksi PDO dan menangkap kesalahan jika koneksi gagal.

?>