<?php
$host = 'localhost'; // atau alamat server database Anda
$dbname = 'donasi_yayasan';
$username = 'root';  // username database
$password = '';      // password database

// Membuat koneksi ke database 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Menangani error dengan exception
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
