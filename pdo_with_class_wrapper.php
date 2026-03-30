<?php
// Konfigurasi database
define('DB_HOST', 'localhost'); // Default XAMPP biasanya 'localhost'
define('DB_USER', 'root'); // Default XAMPP biasanya 'root'
define('DB_PASS', ''); // Default XAMPP biasanya kosong
define('DB_NAME', 'test'); // Nama database kamu

class Database {
    // Properti untuk menyimpan konfigurasi database
    private $host = DB_HOST; // Host database
    private $user = DB_USER; // Username database
    private $pass = DB_PASS; // Password database
    private $dbname = DB_NAME; // Nama database

    // Properti untuk menyimpan koneksi database
    private $dbh; // Database Handler
    private $error; // Variabel untuk menyimpan error

    // Konstruktor untuk membuat koneksi database
    public function __construct() {
        // Set DSN (Data Source Name)
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        
        // Set options untuk koneksi yang lebih aman & profesional
        $options = [
            PDO::ATTR_PERSISTENT => true, // Meningkatkan performa
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Munculkan error jika ada masalah
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Data diambil sebagai array asosiatif
        ];

        // Coba buat koneksi, jika gagal tangkap errornya
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die("Koneksi Database Gagal: " . $e->getMessage());
        }
    }

    // Fungsi untuk mempermudah eksekusi query nantinya
    public function getHandler() {
        return $this->dbh; // Mengembalikan database handler untuk digunakan di luar kelas
    }
}