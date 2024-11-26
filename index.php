<?php
include 'admin/db-admin/conectdb.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gambaran FP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>


<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo korwil.jpeg" height="60" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#jadwal" class="nav-link">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#program yayasan">Program yayasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sistemdonasi">Program donasi</a>
                    </li>

                </ul>
                <div class="d-flex">
                    <a href="sistemdonasi/dasboarddonasi.html">
                        <button class="btn btn-success">Donasi</button>
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <!-- navbarend -->

    <!-- welcome -->
    <section>
        <!-- <div class="welcom"> -->

        <div class="container-fluid py-5">
            <div class="row flex-lg-row-reverse">

                <!-- Carousel Slide -->
                <div class="col-lg-5 col-md-12 p-0 shadow border" style="height: 100%; max-height: 400px;">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imgfp/1.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imgfp/2.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imgfp/3.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imgfp/4.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imgfp/5.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- Carousel End -->

                <div class="col-lg-6 col-md-12 px-5 py-5">
                    <button class="btn btn-light-success mb-2">
                        <a class="tombol"
                            href="https://www.google.com/maps/dir/-6.3307776,107.3480454/Majlis+ta'lim+Nurul+Hidayah,+Cikumpay,+Purwakarta+Regency,+West+Java/@-6.4230932,107.3334755,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e6913ca6aa2126d:0x2e93c336b5113faa!2m2!1d107.4931971!2d-6.4978812?entry=ttu&g_ep=EgoyMDI0MTExMS4wIKXMDSoASAFQAw%3D%3D">
                            <img src="img/Cuplikan layar 2024-10-31 205406.png" alt="">
                            Kp. mekar sari, Ds. cikumpay, RT07/03, Kec. campaka, Kab. Purwakarta
                        </a>
                    </button>
                    <h1 class="display-6 fw-bold font-bs lh-2 mb-4">
                        Majlis Ta'lim Nurul Hidayah Berdiri pada Tahun 2001
                    </h1>
                    <div class="lead mb-3">
                        <h6>

                            Selamat Datang di Website Yayasan Pengajian Nurul Hidayah
                            <br><br>

                            Assalamu’alaikum Warahmatullahi Wabarakatuh,

                            Selamat datang di website resmi Yayasan Pengajian Nurul hidayah, yang kami hadirkan
                            sebagai
                            sarana informasi dan dukungan terhadap kegiatan dakwah serta penyebaran nilai-nilai
                            keislaman. Yayasan kami bertujuan menciptakan generasi muslim yang cerdas dan berakhlak
                            mulia melalui pengajian rutin, kajian keislaman, pembacaan Al-Qur'an, serta pendidikan
                            akhlak bagi segala usia.
                            <br><br>
                            Di website ini, Anda dapat menemukan informasi tentang program-program kami, termasuk:
                            <br><br>

                            Pengajian Rutin
                            <br><br>
                            Kegiatan Sosial (Santunan, Wakaf, dll.)
                            <br><br>
                            Pendidikan Keagamaan (Belajar Mengaji, Tahsin, Kajian Kitab Kuning)
                            <br><br>
                            Kami mengajak Anda untuk berpartisipasi dalam berbagai kegiatan kami, baik melalui
                            donasi,
                            menjadi relawan, atau hadir dalam program-program yang kami adakan. Semoga yayasan ini
                            memberikan manfaat dan keberkahan bagi kita semua.
                            <br><br>

                            Jazakumullahu Khairan,
                            Wassalamu’alaikum Warahmatullahi Wabarakatuh.
                        </h6>

                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>

    <!-- welcome end -->

    <!-- jadwal-jadwal an(opsional) -->
    <section>
        <div class="container pb-5 py-5">
            <div class="row mb-3">
                <div class="col-lg-7">
                    <h1 class="fw-bold">Jadwal Pengajian Yayasan Nurul hidayah</h1>
                </div>
                <div class="col-lg-5">
                    <p>"Barangsiapa yang meniti jalan untuk mencari ilmu, Allah akan memudahkan baginya jalan menuju
                        surga (HR. Muslim). Semoga setiap langkah kita menuju majelis ilmu ini diberkahi dan diridhoi
                        oleh Allah SWT."</p>
                </div>

            </div>
            <div class="row" id="jadwal">

                <!-- jadwal -->
                <div class="col-lg-6">
                    <div class="card h-100 bg-white shadow rounded-3 p-3 border-0 mt-3 ">
                        <div class="row mb-3">
                            <div class="col-lg-4 fw-bold">Hari</div>
                            <div class="col-lg-4 fw-bold ">Waktu</div>
                            <div class="col-lg-4 fw-bold ">acara</div>
                        </div>
                        <!-- card jadwal -->
                        <div class="card bg-white p-4 border rounded-3 mb-3">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <img height="19" src="imgfp/logo jam.png" alt="gambarjadwal"> Senin-Minggu
                                </div>
                                <div class="col-lg-4 ">18:00-20:00 WIB</div>
                                <div class="col-lg-4 ">pengajian Anak-Anak</div>
                            </div>
                        </div>
                        <div class="card bg-white p-4 border rounded-3 mb-3">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <img height="19" src="imgfp/logo jam.png" alt="gambarjadwal"> Kamis
                                </div>
                                <div class="col-lg-4 ">18:00-20:00 WIB</div>
                                <div class="col-lg-4 ">Yasinan</div>
                            </div>
                        </div>
                        <div class="card bg-white p-4 border rounded-3 mb-3">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <img height="19" src="imgfp/logo jam.png" alt="gambarjadwal"> Rabu
                                </div>
                                <div class="col-lg-4 ">07:00-09:00 WIB</div>
                                <div class="col-lg-4 ">Pengajian Ibu-Ibu</div>
                            </div>
                        </div>
                        <div class="card bg-white p-4 border rounded-3 mb-3">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <img height="19" src="imgfp/logo jam.png" alt="gambarjadwal"> Minggu
                                </div>
                                <div class="col-lg-4 ">20:00-23:00 WIB</div>
                                <div class="col-lg-4 ">Rutinan Showlat</div>
                            </div>
                        </div>
                        <div class="card bg-white p-4 border rounded-3 mb-3">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <img height="19" src="imgfp/logo jam.png" alt="gambarjadwal"> setiap tanggal 11,
                                    bulan hijriah
                                </div>
                                <div class="col-lg-4 ">20:00-selsai WIB</div>
                                <div class="col-lg-4 ">Manakib</div>
                            </div>
                        </div>

                        <!-- card jadwal end -->
                    </div>
                </div>
                <!-- jadwalend -->

                <!-- kananya jadwal -->
                <div class="col-lg-6">
                    <div class="card border h-100 p-5 rounded-3 shadow bg-light-success">
                        <div class="text-center">
                            <h2 class="fw-bold mb-2">Guru Besar <br> <span class="text-success">Ponpes Nurul
                                    Hidayah</span></h2>
                            <img src="..." class="rounded-pill mb-3 img-fluid" width="450" alt="">
                            <h3 class="fw-bold mb-3"></h3>
                            <h5></h5>
                        </div>
                    </div>
                </div>


                <!-- kananya jadwal end -->

                <!-- program -->
                <section>

                    <div class="container pb-5" id="program yayasan">
                        <div class="text-center mb-5">
                            <h1 class="display-6 fw-bold lh-2 pt-5"> Program Yayasan</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card border-2 reounded-4 bg-light-success">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-newspaper fa-5x mb-2"></i>
                                        <div class="fw-bold">News/Berita</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="card border-2 reounded-4 bg-light-success">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-book fa-5x mb-2"></i>
                                        <div class="fw-bold">Pendidikan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <a href="programyayasan/jadwalkegiatan.php">
                                    <div class="card border-2 reounded-4 bg-light-success">
                                        <div class="card-body text-center">
                                            <i class="fa-regular fa-calendar-days fa-5x mb-2"></i>
                                            <div class="fw-bold">Jadwal kegiatan</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- program end -->

                <!-- program donasi -->

                <section class="bg-light-success">
                    <div class="container py-5" id="sistemdonasi">
                        <div class="d-flex justify-content-center text-center mb-5">
                            <h1 class="display-6 fw-bold w-50 lh-2">Ulurkan tangan amal anda di Majelis ta'lim nurul
                                hidayah
                            </h1>
                        </div>
                        <div class="row">
                            <!-- card1 -->
                            <div class="row">
                                <?php foreach ($campaigns as $campaign): ?>
                                    <div class="col-lg-4 mb-3">
                                        <div class="card bg-white h-100 border-0 p-3">
                                            <div class="card-body">
                                                <img src="<?php echo htmlspecialchars($campaign['image']); ?>" class="card-img-top" alt="Gambar Kampanye">
                                                <div class="card-title fw-bold mt-3"><?php echo htmlspecialchars($campaign['title']); ?></div>
                                                <div class="card-text mb-3"><?php echo htmlspecialchars(substr($campaign['description'], 0, 100)); ?></div>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo ($campaign['target_amount'] > 0) ? round(($campaign['collected_amount'] / $campaign['target_amount']) * 100) : 0; ?>%;">
                                                        <?php echo ($campaign['target_amount'] > 0) ? round(($campaign['collected_amount'] / $campaign['target_amount']) * 100) : 0; ?>%
                                                    </div>
                                                </div>
                                                <a href="sistemdonasi/detailkampanye.php?id=<?php echo $campaign['id']; ?>">
                                                    <button class="btn btn-outline-success">Detail Donasi</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- card1 end -->

                            <!--card2  -->
                            <div class="col-lg-4 mb-3">
                                <div class="card bg-white h-100 border-0 p-3">
                                    <div class="card-body">
                                        <img src="imgfp/logo donasi.png" class="card-img-top" alt="">
                                        <div class="card-title fw-bold">Galangan dana acara maulid nabi</div>
                                        <div class="card-text mb-3"> Berikan dukungan untuk bangun yayasan</div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <a href="sistemdonasi/dasboarddonasi.html">
                                            <button class="btn btn-outline-success"> Donasi</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--card2 end  -->

                        </div>
                    </div>
                </section>
                <!-- program donasi end -->
            </div>
        </div>
    </section>
    <!-- jadwal-jadwal an end -->
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<!-- <script src="sistemdonasi/progres/donasi.js"></script> -->
<!-- scrip chartjs -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->



</html>