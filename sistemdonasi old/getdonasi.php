<?php
include 'konekdb.php';

$stmt = $pdo->query("SELECT * FROM donations ORDER BY donation_date DESC");
$donations = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($donations);
?> 