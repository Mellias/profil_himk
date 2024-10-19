<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title = 'Artikel - HIMK Tanjungpinang-Bintan'; ?></title>
    <link rel="icon" href="images/Logo-HIMK.png" type="image/png">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
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
                $articles = [
                    ["img" => "images/artikel1.png", "title" => "Menyusuri Wisata Mangrove Mengkuse Saat Pandemi", "link" => "artikel1.php"],
                    ["img" => "images/artikel2.png", "title" => "5 Hari Pengabdian di Mengkuse, Sawang Selatan", "link" => "artikel2.php"],
                    ["img" => "images/artikel3.png", "title" => "Tanggul dan Pintu Air, Infrastruktur yang dibutuhkan", "link" => "artikel3.php"],
                    ["img" => "images/artikel4.png", "title" => "Kurangnya Pemberdayaan Potensi Desa Sawang Laut", "link" => "artikel4.php"],
                    ["img" => "images/artikel5.png", "title" => "Air Bersih, Masalah Krusial bagi Masyarakat Tanjung Sesup", "link" => "artikel5.php"],
                    ["img" => "images/artikel6.png", "title" => "Peningkatan Komoditas Sektor Pertanian", "link" => "artikel6.php"],
                    ["img" => "images/artikel7.png", "title" => "Peran Pemerintah dalam Potensi Pertanian", "link" => "artikel7.php"],
                    ["img" => "images/artikel8.png", "title" => "Administrasi Menghambat Potensi Desa Sawang Laut", "link" => "artikel8.php"],
                    ["img" => "images/artikel9.png", "title" => "Masalah Hutan Lindung di Gading Sari", "link" => "artikel9.php"]
                ];

                foreach ($articles as $article) {
                    echo "
                        <div class='post'>
                            <img src='{$article['img']}' alt='{$article['title']}'>
                            <h3>{$article['title']}</h3>
                            <a href='{$article['link']}'>Jom bace lagi</a>
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
