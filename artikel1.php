<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Menyusuri Wisata Mangrove Mengkuse Saat Pandemi'; ?></title>
    <link rel="icon" href="images/Logo-HIMK.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
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
                <?php
                $menu = [
                    "index.php" => "Beranda",
                    "abouthimk.php" => "Tentang HIMK",
                    "artikel.php" => "Artikel",
                    "berita.php" => "Berita",
                    "opini.php" => "Opini",
                    "krisar.php" => "Kritik dan Saran"
                ];
                foreach ($menu as $link => $name) {
                    echo "<li><a href='$link'>$name</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="social-media">
            <?php
            $socialLinks = [
                "https://www.instagram.com/himktanjungpinang23" => "fab fa-instagram",
                "https://youtube.com/@himktanjungpinang-bintan8205" => "fab fa-youtube",
                "https://www.facebook.com/profile.php?id=100011685574469" => "fab fa-facebook"
            ];
            foreach ($socialLinks as $link => $icon) {
                echo "<a href='$link' target='_blank'><i class='$icon'></i></a>";
            }
            ?>
        </div>
    </header>

    <main>
        <div id="content">
            <h1><?php echo 'Menyusuri Wisata Mangrove Mengkuse Saat Pandemi'; ?></h1>
            <img src="images/artikel1.png" alt="Wisata Mangrove Mengkuse" class="featured-image" />
            
            <?php
            $paragraphs = [
                "<strong>Tanjungbatu-</strong> Himpunan Mahasiswa Kundur (HIMK) Tanjungpinang-Bintan telah melaksanakan kegiatan tahunan yaitu kegiatan latihan kepemimpinan (LK) tingkat II Gelombang kedua, kegiatan ini dilaksanakan selama 5 hari.",
                "Latihan kepemimpinan (LK) tingkat II gelombang kedua ini dilaksanakan di Pulau Kundur, Kabupaten Karimun. Kegiatan ini diikuti oleh 10 peserta, yaitu 3 orang laki-laki dan 7 orang perempuan. Tujuan dari latihan kepemimpinan tingkat II ini adalah melakukan pengabdian dan penelitian ke masyarakat untuk mencari permasalahan yang ada di lingkungan masyarakat, kemudian mahasiswa diharapkan untuk dapat mencari solusi dari permasalahan-permasalahan tersebut."
            ];

            foreach ($paragraphs as $p) {
                echo "<p>$p</p>";
            }
            ?>

            <h2>Persiapan dan Pembagian Kelompok</h2>
            <p>Sebelum berangkat, kami berkumpul di stadion mini sekitar pukul 13:00 WIB...</p>

            <h2>Pengalaman di Mengkuse</h2>
            <p>Kami tiba di Mengkuse sekitar pukul 15:00 WIB...</p>

            <h3>Wisata Mangrove</h3>
            <p>Di Mengkuse terdapat wisata hutan mangrove yang menjadi identitas daerah tersebut...</p>

            <h4>Dampak Pandemi</h4>
            <p>Maraknya pandemi COVID-19 membuat objek wisata ini sepi...</p>

            <h4>Kendala Infrastruktur</h4>
            <p>Selain wisata mangrove yang kurang berkembang, kendala penerangan jalan juga masih menjadi masalah...</p>

            <h4>Harapan ke Depan</h4>
            <p>Dari permasalahan yang ada, diperlukan peran masyarakat...</p>

            <p><strong>Penulis: Nurdiah</strong></p>
        </div>
    </main>
    
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <h2>Himpunan Mahasiswa Kundur Tanjungpinang-Bintan</h2>
                <p>Sekretariat: Jalan Garuda Perum Kenangan Jaya 6 Blok G+ No A5, Tanjungpinang...</p>
            </div>
            <div class="footer-right">
                <p>Temukan kami di</p>
                <div class="social-media">
                    <?php
                    foreach ($socialLinks as $link => $icon) {
                        echo "<a href='$link' target='_blank'><i class='$icon'></i></a>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <p>&copy; 2024, HIMK Tanjungpinang-Bintan</p>
    </footer>
</body>
</html>
