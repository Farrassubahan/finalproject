<?php
// Koneksi database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "donasi_yayasan";

$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tambah atau update kampanye
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'];
    $description = $_POST['description'];
    $target_amount = $_POST['target_amount'];
    $recipient_account = $_POST['recipient_account'];
    $image = '';

    // Upload gambar
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $image = $uploadDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    if ($id) {
        // Update kampanye
        $query = "UPDATE campaigns SET title=?, description=?, target_amount=?, image=?, recipient_account=? WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssissi", $title, $description, $target_amount, $image, $recipient_account, $id);
    } else {
        // Tambah kampanye baru
        $query = "INSERT INTO campaigns (title, description, target_amount, image, recipient_account) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssiss", $title, $description, $target_amount, $image, $recipient_account);
    }

    if ($stmt->execute()) {
        header("Location: ../fitur admin/dasboard-admin.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Hapus kampanye
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM campaigns WHERE id=$id");
    header("Location: ../fitur admin/dasboard-admin.php");
    exit;
}

// Ambil semua kampanye
$result = $conn->query("SELECT * FROM campaigns");
$campaigns = $result->fetch_all(MYSQLI_ASSOC);

// Update collected_amount otomatis berdasarkan donasi
foreach ($campaigns as &$campaign) {
    $campaign_id = $campaign['id'];
    $query_donation_total = "SELECT SUM(amount) AS total_donation FROM donasi WHERE campaign_id = ?";
    $stmt = $conn->prepare($query_donation_total);
    $stmt->bind_param("i", $campaign_id);
    $stmt->execute();
    $result_donation = $stmt->get_result();
    $donation_data = $result_donation->fetch_assoc();
    $total_donation = $donation_data['total_donation'] ?? 0;

    // Update collected_amount di tabel campaigns
    $query_update_collected = "UPDATE campaigns SET collected_amount = ? WHERE id = ?";
    $stmt_update = $conn->prepare($query_update_collected);
    $stmt_update->bind_param("ii", $total_donation, $campaign_id);
    $stmt_update->execute();

    // Update collected_amount pada array kampanye (opsional untuk tampilan real-time di PHP)
    $campaign['collected_amount'] = $total_donation;
}

// Periksa apakah koneksi berhasil


// Hitung total jumlah uang terkumpul dari semua kampanye
$query_total_collected = "SELECT SUM(collected_amount) AS total_collected FROM campaigns";
$result_total_collected = $conn->query($query_total_collected);
$total_collected = $result_total_collected->fetch_assoc()['total_collected'] ?? 0;

// Hitung total jumlah donatur (dari tabel donations)
$query_total_donors = "SELECT COUNT(DISTINCT donor_name) AS total_donors FROM donasi";
$result_total_donors = $conn->query($query_total_donors);
$total_donors = $result_total_donors->fetch_assoc()['total_donors'] ?? 0;

// Hitung total kampanye aktif
$query_active_campaigns = "SELECT COUNT(*) AS total_campaigns FROM campaigns";
$result_active_campaigns = $conn->query($query_active_campaigns);
$total_campaigns = $result_active_campaigns->fetch_assoc()['total_campaigns'] ?? 0;

// Ambil semua kampanye
$query_campaigns = "SELECT * FROM campaigns";
$result_campaigns = $conn->query($query_campaigns);
$campaigns = $result_campaigns->fetch_all(MYSQLI_ASSOC);

// Jangan menutup koneksi jika ada query lebih lanjut


$conn->close();
