<?php
// Variabel dinamis untuk judul halaman
$pageTitle = "HIMK Tanjungpinang-Bintan";
$year = date('Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" href="images/Logo-HIMK.png" type="image/png">
    <link rel="stylesheet" href="css/app.css" />
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
        <div class="content">
            <div class="content-description">
                <div class="welcome-content">
                    <img src="images/HUT-HIMK-ke-11.png" alt="HIMK Tanjungpinang-Bintan" class="welcome-image"> 
                </div>
                <div>
                    <h1 class="title">Himpunan Mahasiswa Kundur (HIMK)</h1>
                    <p>
                        Selamat datang di situs web profil Himpunan Mahasiswa Kundur (HIMK). 
                        Sebuah platform yang hadir sebagai wujud eksistensinya mahasiswa-mahasiswa Kundur yang berkuliah di Tanjungpinang-Bintan.
                    </p>
                    <button><a href="abouthimk.php">Kenali HIMK lebih lanjut, yuk</a></button>
                </div>
            </div>
        </div>

        <?php
        // Fungsi untuk menampilkan bagian artikel, berita, dan opini
        function renderPosts($title, $link, $posts) {
            echo "<section class='posts-section'>";
            echo "<div class='section-header'>";
            echo "<h2>$title</h2>";
            echo "<button><a href='$link'>Lainnya</a></button>";
            echo "</div><div class='gallery'>";
            foreach ($posts as $post) {
                echo "<div class='post'>";
                echo "<img src='{$post['image']}' alt='{$post['alt']}'>";
                echo "<h3>{$post['title']}</h3>";
                echo "<a href='{$post['link']}'>Jom bace lagi</a>";
                echo "</div>";
            }
            echo "</div></section>";
        }

        // Data untuk artikel, berita, dan opini
        $articles = [
            ['image' => 'images/artikel1.png', 'alt' => 'Wisata Mangrove Mengkuse', 'title' => 'Menyusuri Wisata Mangrove Mengkuse Saat Pandemi', 'link' => 'artikel1.php'],
            ['image' => 'images/artikel2.png', 'alt' => 'Mengkuse, Sawang Selatan', 'title' => '5 Hari Pengabdian di Mengkuse, Sawang Selatan', 'link' => 'artikel2.php'],
            ['image' => 'images/artikel3.png', 'alt' => 'Himpunan Mahasiswa Kundur', 'title' => 'Tanggul dan Pintu Air, Infrastruktur yang dibutuhkan Masyarakat Sungai Ungar Utara', 'link' => 'artikel3.php']
        ];

        $news = [
            ['image' => 'images/berita1.png', 'alt' => 'Berita 1', 'title' => 'HIMK Laksanakan Sosialisasi Perguruan Tinggi', 'link' => 'berita1.php'],
            ['image' => 'images/berita2.png', 'alt' => 'Berita 2', 'title' => 'Teori Tringa Jadi Dasar Latihan Kepemimpinan HIMK', 'link' => 'berita2.php'],
            ['image' => 'images/berita3.png', 'alt' => 'Berita 3', 'title' => 'HIMK Sosialisasi ke Sebelas', 'link' => 'berita3.php']
        ];

        $opinions = [
            ['image' => 'images/opini1.png', 'alt' => 'Opini 1', 'title' => 'Apakah OPD Kabupaten Karimun Serius?', 'link' => 'opini1.php'],
            ['image' => 'images/opini2.png', 'alt' => 'Opini 2', 'title' => 'Awas Serangan Fajar', 'link' => 'opini2.php'],
            ['image' => 'images/opini3.png', 'alt' => 'Opini 3', 'title' => 'Pasar Sawang Tak Berpenghuni', 'link' => 'opini3.php']
        ];

        // Render bagian artikel, berita, dan opini
        renderPosts('Artikel', 'artikel.php', $articles);
        renderPosts('Berita', 'berita.php', $news);
        renderPosts('Opini', 'opini.php', $opinions);
        ?>
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
        <p>&#169; <?php echo $year; ?> HIMK Tanjungpinang-Bintan</p>
    </footer>

    <script src="app.js"></script>
</body>
</html>
