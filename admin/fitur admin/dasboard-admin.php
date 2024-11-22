

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard Admin</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet"> <!-- SweetAlert2 -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Menu</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <!-- <div class="sidebar-footer" id="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div> -->
            <div class="sidebar-footer" id="sidebar-footer">
                <a href="#" id="logout-btn" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

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
                                        <button class="btn btn-sm btn-info">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bantu Renovasi Rumah Panti Asuhan</td>
                                    <td>Sosial</td>
                                    <td>Rp 150.000.000</td>
                                    <td>Rp 100.000.000</td>
                                    <td><span class="badge bg-warning">Dalam Proses</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info">Detail</button>
                                    </td>
                                </tr>
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