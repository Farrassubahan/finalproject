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
    $image = '';

    // Upload gambar
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $image = $uploadDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    if ($id) {
        // Update kampanye
        $query = "UPDATE campaigns SET title=?, description=?, target_amount=?, image=? WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssisi", $title, $description, $target_amount, $image, $id);
    } else {
        // Tambah kampanye baru
        $query = "INSERT INTO campaigns (title, description, target_amount, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssis", $title, $description, $target_amount, $image);
    }

    if ($stmt->execute()) {
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Hapus kampanye
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM campaigns WHERE id=$id");
    header("Location: admin_dashboard.php");
    exit;
}

// Ambil semua kampanye
$result = $conn->query("SELECT * FROM campaigns");
$campaigns = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>
