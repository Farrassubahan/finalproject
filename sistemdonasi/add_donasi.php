<?php
include 'konekdb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $donor_name = $_POST['donor_name'];
    $amount = $_POST['amount'];

    $stmt = $pdo->prepare("INSERT INTO donations (donor_name, amount) VALUES (?, ?)");
    if ($stmt->execute([$donor_name, $amount])) {
        echo json_encode(["message" => "Donation added successfully"]);
    } else {
        echo json_encode(["message" => "Failed to add donation"]);
    }
}
?>