<?php
// Koneksi database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "donasi_yayasan";

$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Fungsi untuk mengambil data kampanye berdasarkan ID
function getCampaignById($id, $conn) {
    $query = "SELECT * FROM campaigns WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
?>
