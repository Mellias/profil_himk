<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="icon" href="images/Logo-HIMK.png" type="image/png">
    <link rel="stylesheet" href="css/main.css" />
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
                <img src="images/Logo-HIMK.png" alt="Himpunan Mahasiswa Kundur (HIMK)" />
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
            <a href="https://www.instagram.com/himktanjungpinang23" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@himktanjungpinang-bintan8205" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100011685574469" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
    </header>

    <main>
        <section class="posts-section">
            <div class="gallery">
                <?php
                $posts = [
                    ["images/berita1.png", "HIMK Tanjungpinang-Bintan Laksanakan Sosialisasi Perguruan Tinggi", "berita1.php"],
                    ["images/berita2.png", "Teori Tringa jadi Dasar Latihan Kepemimpinan HIMK", "berita2.php"],
                    ["images/berita3.png", "Berjalan Dengan Antusias, HIMK Mengadakan Sosialisasi Ke Sebelas", "berita3.php"],
                    ["images/berita4.png", "Memperingati Hari Anak Nasional, HIMK Adakan Kunjungan Kasih", "berita4.php"],
                    ["images/berita5.png", "Gelar Latihan Kepemimpinan, HIMK Ciptakan Kader Intelektual", "berita5.php"],
                    ["images/berita6.png", "Himpunan Mahasiswa Kundur Menggelar Sembang Alumni", "berita6.php"],
                    ["images/berita7.png", "HIMK Tanjungpinang-Bintan Menggelar MAKRAB ke-X", "berita7.php"],
                    ["images/berita8.png", "HIMK Menggelar Musyawarah Besar Ke-IX", "berita8.php"],
                    ["images/berita9.png", "HUT HIMK Tanjungpinang-Bintan ke IX", "berita9.php"]
                ];

                foreach ($posts as $post) {
                    echo "
                        <div class='post'>
                            <img src='{$post[0]}' alt='Himpunan Mahasiswa Kundur'>
                            <h3>{$post[1]}</h3>
                            <a href='{$post[2]}'>Jom bace lagi</a>
                        </div>
                    ";
                }
                ?>
            </div>
        </section>
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
                    <a href="https://www.instagram.com/himktanjungpinang23" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://youtube.com/@himktanjungpinang-bintan8205" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100011685574469" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <p>Copyright &#169; 2024, HIMK Tanjungpinang-Bintan</p>
    </footer>
</body>
</html>
