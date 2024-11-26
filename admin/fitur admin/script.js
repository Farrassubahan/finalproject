// // Fungsi SweetAlert untuk logout
// function confirmLogout(logoutUrl) {
//     Swal.fire({
//         title: "Apakah Anda yakin?",
//         text: "Anda akan diarahkan ke halaman login!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Ya, logout!",
//         cancelButtonText: "Batal"
//     }).then((result) => {
//         if (result.isConfirmed) {
//             // Tampilkan notifikasi sukses sebelum logout
//             Swal.fire({
//                 title: "Logout berhasil!",
//                 text: "Anda akan kembali ke halaman login.",
//                 icon: "success",
//                 timer: 2000, // Tampilkan selama 2 detik
//                 showConfirmButton: false // Tidak tampilkan tombol OK
//             }).then(() => {
//                 // Arahkan ke halaman login setelah SweetAlert selesai
//                 window.location.href = logoutUrl;
//             });
//         }
//     });
// }
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});


// SweetAlert untuk Logout
document.addEventListener("DOMContentLoaded", function () {
    const logoutButton = document.getElementById("logout-btn");
  
    if (logoutButton) {
      logoutButton.addEventListener("click", function (e) {
        e.preventDefault(); // Mencegah navigasi default
  
        Swal.fire({
          title: "Apakah Anda yakin?",
          text: "Anda akan diarahkan ke halaman login!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, logout",
          cancelButtonText: "Batal"
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: "Logout berhasil!",
              text: "Anda akan kembali ke halaman login.",
              icon: "success",
              timer: 2000,
              showConfirmButton: false
            }).then(() => {
              // Redirect ke halaman login
              window.location.href = "../login.php";
            });
          }
        });
      });
    }
  });

// tmbol nambah kampanye
document.addEventListener("DOMContentLoaded", function () {
  const saveButton = document.getElementById("tombol-kampanye");

  if (saveButton) {
      saveButton.addEventListener("click", function (e) {
          e.preventDefault(); // Mencegah pengiriman form atau refresh halaman

          // Menampilkan SweetAlert konfirmasi
          Swal.fire({
              title: "Apakah Anda yakin?",
              text: "Kampanye yang Anda buat akan disimpan.",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Ya, Simpan Kampanye",
              cancelButtonText: "Batal"
          }).then((result) => {
              if (result.isConfirmed) {
                  // Menampilkan SweetAlert success jika konfirmasi
                  Swal.fire({
                      title: "Berhasil!",
                      text: "Kampanye berhasil disimpan.",
                      icon: "success",
                      timer: 2000,
                      showConfirmButton: false
                  }).then(() => {
                    // window.location.href = "../login.php";
                      // Lakukan proses pengiriman form atau simpan data di sini
                      // Misalnya dengan AJAX atau mengirim form tanpa reload halaman
                      document.querySelector('form').submit(); // Mengirim form secara manual
                  });
              }
          });
      });
  }
});

// tombol hapus kampanye
document.addEventListener("DOMContentLoaded", function () {
  const saveButton = document.getElementById("hapus-kampanye");

  if (saveButton) {
      saveButton.addEventListener("click", function (e) {
          e.preventDefault(); // Mencegah pengiriman form atau refresh halaman

          // Menampilkan SweetAlert konfirmasi
          Swal.fire({
              title: "Apakah Anda yakin?",
              text: "Dengan perbubahan yang anda buat?.",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Ya, Simpan Kampanye",
              cancelButtonText: "Batal"
          }).then((result) => {
              if (result.isConfirmed) {
                  // Menampilkan SweetAlert success jika konfirmasi
                  Swal.fire({
                      title: "Berhasil!",
                      text: "Kampanye berhasil disimpan.",
                      icon: "success",
                      timer: 2000,
                      showConfirmButton: false
                  }).then(() => {
                    // window.location.href = "../login.php";
                      // Lakukan proses pengiriman form atau simpan data di sini
                      // Misalnya dengan AJAX atau mengirim form tanpa reload halaman
                      // document.querySelector('form').submit(); // Mengirim form secara manual
                  });
              }
          });
      });
  }
});
