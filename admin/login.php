<?php
    // Include file koneksi database dan alerts
    include('config/config.php');
    include('config/allertlogin.php');

    session_start(); // Memulai sesi

    // Cek apakah form login disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query untuk mengambil data admin berdasarkan username
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Cek apakah admin ditemukan dan password valid
        if ($admin && password_verify($password, $admin['password'])) {
            // Jika login berhasil, set sesi login
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username']; // (Opsional) Simpan nama pengguna

            // Tampilkan SweetAlert untuk login berhasil
            showAlert('Berhasil!', 'Login berhasil, Anda akan diarahkan ke dashboard.', 'success', 'fitur admin/dasboard-admin.php');
        } else {
            // Tampilkan SweetAlert untuk login gagal
            showAlert('Gagal!', 'Username atau password salah!', 'error');
        }
    }
    ?>


    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login - Yayasan Nurul Hidayah</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="login.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body>

        <div class="container login-container">
            <div class="login-card">
                <!-- Logo -->
                <div class="logo-container">
                    <a href="index.html" class="logo">
                        Nurul Hidayah
                    </a>
                    <h5 class="mt-3 text-muted">Admin Panel</h5>
                </div>

                <!-- Alert for errors (hidden by default) -->
                <div class="alert alert-danger d-none" role="alert">
                    Username atau password salah!
                </div>

                <!-- Login Form -->
                <form action="login.php" method="POST">
                    <!-- Username/Email Field -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            placeholder="Masukkan username"
                            required>
                    </div>

                    <!-- Password Field -->
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-group">
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Masukkan password"
                                required>
                            <span class="password-toggle">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingat saya</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mb-3">
                        Masuk ke Admin Panel
                    </button>

                    <!-- Forgot Password -->

                </form>
            </div>

            <!-- Back Link -->
            <div class="back-link">
                <a href="../index.html" class="text-decoration-none text-muted">
                    <i class="fas fa-arrow-left me-1"></i> Kembali ke Beranda
                </a>
            </div>

            <!-- Security Notice -->
            <div class="text-center mt-3">
                <small class="text-muted">
                    <i class="fas fa-lock me-1"></i> Panel ini hanya untuk admin yang berwenang
                </small>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
        <script>
            // Toggle password visibility
            document.querySelector('.password-toggle').addEventListener('click', function() {
                const passwordInput = document.querySelector('#password');
                const icon = this.querySelector('i');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        </script>
    </body>

    </html>