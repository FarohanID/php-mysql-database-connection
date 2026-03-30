<?php
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    // Membuat koneksi PDO
    $dsn  = "mysql:host=$host;dbname=$dbname";
    $pdo  = new PDO($dsn, $username, $password);
    
    // Set error mode ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Koneksi PDO berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>