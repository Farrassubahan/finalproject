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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"><!-- fontaweosme -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" /><!-- linecone -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet"> <!-- SweetAlert2 -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <span class="wrapper">
        <?php include '../sidebar/sidebar.php' ?>
        <!-- Main Content -->
        <div class="main p-5">
            <div class="container mt-5">
                <h1 class="text-center">Admin Dashboard - Kampanye</h1>

                <!-- Form Tambah/Update Kampanye -->
                <form method="POST" enctype="multipart/form-data" class="mb-5">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Kampanye</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="target_amount" class="form-label">Target Donasi</label>
                        <input type="number" class="form-control" id="target_amount" name="target_amount" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button id="tombol-kampanye" type="submit" class="btn btn-success">Simpan Kampanye</button>

                </form>

                <!-- Daftar Kampanye -->
                <h2 class="mb-4">Daftar Kampanye</h2>
                <table class="table table-striped">
                    <thead>
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
                                <td><?php echo $campaign['title']; ?></td>
                                <td><?php echo substr($campaign['description'], 0, 50) . '...'; ?></td>
                                <td>Rp<?php echo number_format($campaign['target_amount'], 0, ',', '.'); ?></td>
                                <td>Rp<?php echo number_format($campaign['collected_amount'], 0, ',', '.'); ?></td>
                                <td><img src="<?php echo $campaign['image']; ?>" width="50"></td>
                                <td>
                                    <button class="btn btn-primary btn-sm edit-btn"
                                        data-id="<?php echo $campaign['id']; ?>"
                                        data-title="<?php echo $campaign['title']; ?>"
                                        data-description="<?php echo $campaign['description']; ?>"
                                        data-target="<?php echo $campaign['target_amount']; ?>">
                                        Edit
                                    </button>
                                    <a href="?delete=<?php echo $campaign['id']; ?>" id="tombol-kampanye" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <script>
                // JavaScript untuk mengisi form saat edit
                document.querySelectorAll('.edit-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        document.getElementById('id').value = this.dataset.id;
                        document.getElementById('title').value = this.dataset.title;
                        document.getElementById('description').value = this.dataset.description;
                        document.getElementById('target_amount').value = this.dataset.target;
                    });
                });
            </script>


        </div>
    </span>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76Y0I2IbPpKnopA0kxGV0ODfDDxeN6xxNf69YlRE2QpPShQw34qg5Jt0ZfuOXjR"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- swetallert -->
    <script src="script.js"></script>
</body>

</html>