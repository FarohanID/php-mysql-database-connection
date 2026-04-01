<?php

// Memanggil file yang berisi kelas Database untuk membuat koneksi ke database menggunakan PDO
require_once 'pdo_with_class_wrapper.php'; // Pastikan file ini berada di lokasi yang benar sesuai dengan struktur proyek kamu

// Setelah memanggil file tersebut, kita sudah memiliki objek $db yang merupakan instance dari kelas Database
// Kita bisa menggunakan objek $db untuk mendapatkan handler PDO dan melakukan operasi database lainnya jika diperlukan
// Contoh: Mendapatkan handler PDO untuk digunakan di bagian lain aplikasi
$pdo = $db->getHandler(); // Mendapatkan handler PDO untuk digunakan di bagian lain aplikasi
// Di sini kita hanya menampilkan pesan bahwa koneksi berhasil, karena pesan tersebut sudah ditampilkan di dalam konstruktor kelas Database
// Jika kamu ingin melakukan operasi database lainnya, kamu bisa menggunakan $pdo untuk mengeksekusi query atau melakukan operasi lainnya sesuai kebutuhan aplikasi kamu