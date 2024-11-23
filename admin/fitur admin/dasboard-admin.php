<?php
include '../db-admin/conectdb.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"><!-- fontawesome -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" /><!-- linecons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet"> <!-- SweetAlert2 -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
        <?php include '../sidebar/sidebar.php' ?>
        <!-- Main Content -->
        <div class="main p-3">
            <div class="text-center">
                <h1>
                    Dasboard Admin
                </h1>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="card stats-card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon text-primary me-3">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bold text-primary mb-0">100.000+</h3>
                                    <div class="text-muted">Total Donasi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stats-card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon text-primary me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bold text-primary mb-0">2.000+</h3>
                                    <div class="text-muted">Donatur Aktif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stats-card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon text-primary me-3">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bold text-primary mb-0">10+</h3>
                                    <div class="text-muted">Kampanye Aktif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stats-card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon text-primary me-3">
                                    <i class="fas fa-money-bill-wave"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bold text-primary mb-0">Rp 500jt+</h3>
                                    <div class="text-muted">Dana Tersalurkan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Campaigns -->
            <div class="card mb-4">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Kampanye Terbaru</h5>
                        <a href="kampanye.php">
                            <button class="btn btn-primary btn-sm">Tambah Kampanye</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="mb-4">Daftar Kampanye</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Target</th>
                                    <th>Terkumpul</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($campaigns as $campaign): ?>
                                    <tr>
                                        <td><?php echo $campaign['id']; ?></td>
                                        <td><?php echo htmlspecialchars($campaign['title']); ?></td>
                                        <td><?php echo htmlspecialchars(substr($campaign['description'], 0, 50)) . '...'; ?></td>
                                        <td>Rp<?php echo number_format($campaign['target_amount'], 0, ',', '.'); ?></td>
                                        <td>Rp<?php echo number_format($campaign['collected_amount'], 0, ',', '.'); ?></td>
                                        <td>
                                            <img src="<?php echo htmlspecialchars($campaign['image']); ?>" alt="Gambar Kampanye" class="img-fluid rounded" width="50">
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm edit-btn"
                                                data-id="<?php echo $campaign['id']; ?>"
                                                data-title="<?php echo htmlspecialchars($campaign['title']); ?>"
                                                data-description="<?php echo htmlspecialchars($campaign['description']); ?>"
                                                data-target="<?php echo $campaign['target_amount']; ?>">
                                                Edit
                                            </button>
                                            <a href="?delete=<?php echo $campaign['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- data user yang donasi -->
            <div class="card mb-4">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">ini ganti jadi sesuai nama kampanye</h5>
                        
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="mb-4">Daftar donasi</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Target</th>
                                    <th>Terkumpul</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($campaigns as $campaign): ?>
                                    <tr>
                                        <td><?php echo $campaign['id']; ?></td>
                                        <td><?php echo htmlspecialchars($campaign['title']); ?></td>
                                        <td><?php echo htmlspecialchars(substr($campaign['description'], 0, 50)) . '...'; ?></td>
                                        <td>Rp<?php echo number_format($campaign['target_amount'], 0, ',', '.'); ?></td>
                                        <td>Rp<?php echo number_format($campaign['collected_amount'], 0, ',', '.'); ?></td>
                                        <td>
                                            <img src="<?php echo htmlspecialchars($campaign['image']); ?>" alt="Gambar Kampanye" class="img-fluid rounded" width="50">
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm edit-btn"
                                                data-id="<?php echo $campaign['id']; ?>"
                                                data-title="<?php echo htmlspecialchars($campaign['title']); ?>"
                                                data-description="<?php echo htmlspecialchars($campaign['description']); ?>"
                                                data-target="<?php echo $campaign['target_amount']; ?>">
                                                Edit
                                            </button>
                                            <a href="?delete=<?php echo $campaign['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76Y0I2IbPpKnopA0kxGV0ODfDDxeN6xxNf69YlRE2QpPShQw34qg5Jt0ZfuOXjR"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- swetallert -->
    <script src="script.js"></script>
</body>

</html>