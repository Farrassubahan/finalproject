<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title text-center">GAZA MASIH BERDUKA! BERIKAN BANTUAN DARURAT UNTUK GAZA</h5>
            
            <div class="text-center mb-3">
                <img src="images/gaza.jpg" class="img-fluid rounded" alt="Gaza Masih Berduka" style="max-width: 100%; height: auto;">
            </div>

            <p class="text-center">Anda akan berdonasi dalam program:</p>
            <h6 class="text-center">GAZA MASIH BERDUKA! BERIKAN BANTUAN DARURAT UNTUK GAZA</h6>

            <div class="text-center my-4">
                <p>Donasi Terbaik Anda</p>
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn btn-outline-secondary">Rp 100.000</button>
                    <button class="btn btn-outline-secondary">Rp 250.000</button>
                    <button class="btn btn-outline-secondary">Rp 500.000 <small class="text-muted">(sering dipilih)</small></button>
                    <button class="btn btn-outline-secondary">Rp 1.000.000</button>
                    <button class="btn btn-outline-secondary">Nominal Lainnya</button>
                </div>
            </div>

            <div class="my-4 p-3 bg-light rounded">
                <div class="d-flex align-items-center">
                    <img src="images/payment-icon.png" alt="Icon Metode Pembayaran" style="width: 40px; height: auto;">
                    <span class="ms-2">Metode Pembayaran</span>
                    <div class="ms-auto">
                        <select class="form-select" style="width: auto;">
                            <option selected>Pilih</option>
                            <option value="bank">Bank Transfer</option>
                            <option value="ewallet">E-Wallet</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Sapaan :</label>
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-secondary">Bapak</button>
                    <button class="btn btn-outline-secondary">Ibu</button>
                    <button class="btn btn-outline-secondary">Kak</button>
                </div>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div class="text-center">
                <button class="btn btn-primary btn-lg w-100">Donasi - Rp 2rb</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
