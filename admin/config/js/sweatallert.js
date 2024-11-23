// function confirmLogout(logoutUrl) {
//     Swal.fire({
//         title: 'Apakah Anda yakin ingin keluar?',
//         text: 'Anda akan keluar dari sesi admin!',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonText: 'Ya, keluar',
//         cancelButtonText: 'Batal'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             // Arahkan ke halaman logout
//             Swal.fire({
//                 title: 'Logot',
//                 text: 'Logout Berhasil.',
//                 icon: 'success'
//             })
//             window.location.href = logoutUrl;
//         }
//     });
// }
function confirmLogout(logoutUrl) {
    Swal.fire({
        title: 'Apakah Anda yakin ingin keluar?',
        text: 'Anda akan keluar dari sesi admin!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, keluar',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Tampilkan pesan sukses
            Swal.fire({
                title: 'Logout',
                text: 'Logout berhasil.',
                icon: 'success',
                timer: 2000, // Waktu tampilan alert (dalam milidetik)
                showConfirmButton: false
            }).then(() => {
                // Arahkan ke halaman logout setelah alert selesai
                window.location.href = logoutUrl;
            });
        }
    });
}
