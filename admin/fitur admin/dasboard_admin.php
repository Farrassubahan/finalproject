<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Yayasan nurul hidayah</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> <!-- bootsrape -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> <!-- Icon Font Awesome -->
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar bg-light py-3">
            <div class="d-flex align-items-center mb-4 px-3">
                <h5 class="text-primary fw-bold mb-0">nurul hidayah Admin</h5>
            </div>
            
            <div class="nav flex-column">
                <a href="#" class="nav-link active py-2 px-3 mb-2 rounded">
                    Dashboard
                </a>
                <a href="#" class="nav-link text-dark py-2 px-3 mb-2 rounded">
                    Kampanye
                </a>
                <a href="#" class="nav-link text-dark py-2 px-3 mb-2 rounded">
                    Donasi
                </a>
                <a href="#" class="nav-link text-dark py-2 px-3 mb-2 rounded">
                    Pengguna
                </a>
                <a href="#" class="nav-link text-dark py-2 px-3 mb-2 rounded">
                    Laporan
                </a>
                <a href="#" class="nav-link text-dark py-2 px-3 mb-2 rounded">
                    Pengaturan
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">Dashboard</h4>
                <div class="d-flex align-items-center gap-3">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Admin
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
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
                        <button class="btn btn-primary btn-sm">Tambah Kampanye</button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Terkumpul</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bantu Operasi Jantung Dek Andi</td>
                                    <td>Medis</td>
                                    <td>Rp 200.000.000</td>
                                    <td>Rp 175.000.000</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Renovasi Sekolah Korban Gempa</td>
                                    <td>Bencana Alam</td>
                                    <td>Rp 500.000.000</td>
                                    <td>Rp 450.000.000</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Recent Donations -->
            <div class="card">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Donasi Terbaru</h5>
                        <button class="btn btn-primary btn-sm">Lihat Semua</button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Donatur</th>
                                    <th scope="col">Kampanye</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ahmad Saputra</td>
                                    <td>Bantu Operasi Jantung Dek Andi</td>
                                    <td>Rp 1.000.000</td>
                                    <td>2024-11-16</td>
                                    <td><span class="badge bg-success">Berhasil</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Siti Rahma</td>
                                    <td>Renovasi Sekolah Korban Gempa</td>
                                    <td>Rp 500.000</td>
                                    <td>2024-11-16</td>
                                    <td><span class="badge bg-success">Berhasil</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
