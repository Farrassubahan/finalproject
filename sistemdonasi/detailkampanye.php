<?php
include 'getkampanye.php'; // Sertakan file fungsi

// Ambil ID dari parameter URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die("Parameter ID tidak ditemukan di URL.");
}

// Ambil data kampanye berdasarkan ID
$campaign = getCampaignById($id, $conn);

if (!$campaign) {
    die("Kampanye tidak ditemukan. Pastikan ID benar dan kampanye ada di database.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kampanye</title>
    <link rel="stylesheet" href="path/to/your/style.css"> <!-- Ganti dengan path CSS Anda -->
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($campaign['title']); ?></h1>
        <img src="<?php echo htmlspecialchars($campaign['image']); ?>" alt="Gambar Kampanye" style="max-width: 100%; height: auto;">
        <p><?php echo htmlspecialchars($campaign['description']); ?></p>
        <p><strong>Target Donasi:</strong> Rp<?php echo number_format($campaign['target_amount'], 0, ',', '.'); ?></p>
        <p><strong>Donasi Terkumpul:</strong> Rp<?php echo number_format($campaign['collected_amount'], 0, ',', '.'); ?></p>
        <p><strong>Rekening Penerima:</strong> <?php echo htmlspecialchars($campaign['recipient_account']); ?></p>
        <a href="donasi_form.php?campaign_id=<?php echo $campaign['id']; ?>" class="btn btn-primary">Donasi Sekarang</a>
    </div>
</body>
</html>
