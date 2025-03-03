<?php
$title = "TEORI TRINGA JADI DASAR LATIHAN KEPEMIMPINAN HIMK";
$logo = "images/Logo-HIMK.png";
$featuredImage1 = "images/berita2.png";
$author = "Dorri Ridowinaldy";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="<?php echo $logo; ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" 
        rel="stylesheet"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="navbar-container">
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo $logo; ?>" alt="Himpunan Mahasiswa Kundur (HIMK)" />
            </a>
        </div>
        <div class="nav-list">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="abouthimk.php">Tentang HIMK</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="opini.php">Opini</a></li>
                <li><a href="krisar.php">Kritik dan Saran</a></li>
            </ul>
        </div>
        <div class="social-media">
            <a href="https://www.instagram.com/himktanjungpinang23?igsh=ZzhtNjNqcjM0ZjZp" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@himktanjungpinang-bintan8205?si=HBY2ZYLgfyDWR8Nl" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100011685574469" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
    </header>

    <main>
        <div id="content">
            <h1><?php echo $title; ?></h1>
            <img src="<?php echo $featuredImage1; ?>" alt="Latihan Kepemimpinan Pertama HIMK" class="featured-image">

            <section>
                <h2>Pengantar Kegiatan</h2>
                <p>
                    <strong>Toapaya Selatan</strong> - Himpunan Mahasiswa Kundur (HIMK) Tanjungpinang-Bintan mengadakan kegiatan Latihan Kepemimpinan (LK) tingkat 1 dengan tema "Menumbuhkan Jiwa Kepemimpinan Mahasiswa Berdasarkan Teori TRINGA." Kegiatan tersebut berlangsung selama 3 hari 2 malam, pada tanggal 23-25 Juni 2023 di Kantor Desa Toapaya Selatan, Kabupaten Bintan. Kegiatan ini juga dihadiri oleh demisioner-demisioner HIMK Kota Tanjungpinang-Bintan.
                </p>
            </section>

            <section>
                <h2>Tujuan Latihan Kepemimpinan</h2>
                <p>Latihan Kepemimpinan ini bertujuan untuk:</p>
                <ul>
                    <li>Menumbuhkan jiwa kepemimpinan di setiap individu dan kelompok.</li>
                    <li>Membentuk karakter dan kekritisan dalam mengambil keputusan.</li>
                    <li>Melatih mental, loyalitas, solidaritas, dan rasa kekeluargaan.</li>
                </ul>
            </section>

            <section>
                <h2>Teori TRINGA</h2>
                <p>Teori TRINGA, yang dibuat oleh Ki Hajar Dewantara, menjadi dasar dalam latihan ini. TRINGA terdiri dari tiga poin:</p>
                <ul>
                    <li>NGERTI (pengetahuan)</li>
                    <li>NGRASA (pemahaman)</li>
                    <li>NGELAKONI (melakukan)</li>
                </ul>
                <p>Dalam latihan ini, anggota HIMK diajak untuk memahami apa yang tidak mereka ketahui, sadar akan ketidaktahuan mereka, dan berkomitmen untuk mempelajarinya. Ini bertujuan untuk mencapai pembentukan karakter yang sesuai dengan tujuan kegiatan.</p>
            </section>

            <section>
                <h2>Ucapan Terima Kasih dan Harapan</h2>
                <p>Hoirul Anam, ketua pelaksana, menyampaikan rasa terima kasihnya kepada seluruh peserta dan pihak yang terlibat.</p>
                <blockquote>
                    "Saya mengucapkan ribuan terima kasih kepada seluruh peserta, pengurus, pimpinan, hingga demisioner yang berkesempatan hadir. Dalam momen ini, kita dapat saling mengenal dan menjalin silaturahmi yang lebih erat. Saya berharap kegiatan LK ini berjalan sesuai konsep yang telah kami rencanakan dan segala urusan dipermudahkan."
                </blockquote>
            </section>

            <section>
                <h2>Agenda Tahunan</h2>
                <p>Ketua HIMK Tanjungpinang-Bintan, M. Teo Renaldi, menjelaskan bahwa Latihan Kepemimpinan tingkat-1 adalah agenda wajib tahunan HIMK.</p>
                <blockquote>
                    "Latihan Kepemimpinan tingkat-1 ini merupakan agenda wajib tahunan HIMK. Latihan ini adalah usaha organisasi yang dilakukan secara terstruktur dan tersistematis, serta terus-menerus demi pembentukan dan pengembangan karakter anggota. LK 1 adalah tahapan awal bagi anggota HIMK untuk terdaftar sebagai Kader HIMK."
                </blockquote>
            </section>

            <section>
                <h2>Motivasi dari Demisioner</h2>
                <p>Muslim Hamdi, selaku demisioner HIMK, turut hadir dan membuka kegiatan. Ia memberikan motivasi kepada anggota HIMK untuk menjaga silaturahmi antar sesama angkatan.</p>
                <blockquote>
                    "LK ini bukan hanya sebagai ajang pengkaderan tetapi juga sebagai pembentuk karakter agar kedepannya bisa membawa dan memimpin diri sendiri."
                </blockquote>
            </section>

            <p><strong>Penulis: <?php echo $author; ?></strong></p>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <h2>Himpunan Mahasiswa Kundur Tanjungpinang-Bintan</h2>
                <p>Sekretariat: Jalan Garuda Perum Kenangan Jaya 6 Blok G+ No A5, Tanjungpinang, 29122, Kepulauan Riau, Indonesia</p>
            </div>
            <div class="footer-right">
                <p>Temukan kami di</p>
                <div class="social-media">
                    <a href="https://www.instagram.com/himktanjungpinang23?igsh=ZzhtNjNqcjM0ZjZp" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://youtube.com/@himktanjungpinang-bintan8205?si=HBY2ZYLgfyDWR8Nl" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100011685574469" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <p>Copyright &#169; 2024, HIMK Tanjungpinang-Bintan</p>
    </footer> 
</body>
</html>
