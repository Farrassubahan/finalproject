<?php
// Fungsi untuk menampilkan SweetAlert berdasarkan kondisi
function showAlert($title, $message, $icon, $redirect = null) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: '$title', 
                text: '$message',
                icon: '$icon',
                confirmButtonText: 'OK'
            }).then(() => {
                " . ($redirect ? "window.location = '$redirect';" : "") . "
            });
        });
    </script>
    ";
}
?>
