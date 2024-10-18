<?php
$title = "HUT HIMK Tanjungpinang-Bintan ke IX";
$logo = "images/Logo-HIMK.png";
$featured_image = "images/berita9.png";
$footer_address = "Sekretariat: Jalan Garuda Perum Kenangan Jaya 6 Blok G+ No A5, Tanjungpinang, 29122, Kepulauan Riau, Indonesia";
$instagram_link = "https://www.instagram.com/himktanjungpinang23?igsh=ZzhtNjNqcjM0ZjZp";
$youtube_link = "https://youtube.com/@himktanjungpinang-bintan8205?si=HBY2ZYLgfyDWR8Nl";
$facebook_link = "https://www.facebook.com/profile.php?id=100011685574469";
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
            <a href="index.html">
                <img src="<?php echo $logo; ?>" alt="Himpunan Mahasiswa Kundur (HIMK)" />
            </a>
        </div>
        <div class="nav-list">
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="abouthimk.html">Tentang HIMK</a></li>
                <li><a href="artikel.html">Artikel</a></li>
                <li><a href="berita.html">Berita</a></li>
                <li><a href="opini.html">Opini</a></li>
                <li><a href="krisar.html">Kritik dan Saran</a></li>
            </ul>
        </div>
        <div class="social-media">
            <a href="<?php echo $instagram_link; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="<?php echo $youtube_link; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="<?php echo $facebook_link; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
    </header>

    <main>
        <div id="content">
            <h1><?php echo $title; ?></h1>
            <img src="<?php echo $featured_image; ?>" alt="HUT HIMK IX" class="featured-image" />

            <p>
                Tepat pada tanggal 23 September 2021, Himpunan Mahasiswa Kundur kembali memperingati HUT yang ke-IX. Dalam memperingati HUT Himpunan Mahasiswa Kundur Tanjungpinang-Bintan, beberapa perlombaan se-Pulau Kundur diadakan:
            </p>
            <ul>
                <li>Lomba berbalas pantun (SD/Sederajat)</li>
                <li>Lomba puisi (SMP/Sederajat)</li>
                <li>Lomba film pendek (SMA/Sederajat) dengan tema "pendidikan dibalut pandemi"</li>
            </ul>
            <p>
                Para pemenang lomba tersebut akan diumumkan pada malam puncak serta menampilkan karya mereka.
            </p>

            <p>
                Pada tanggal 23 September 2021, diadakan malam syukuran di Islamic Center Tanjungbatu. Meskipun di masa pandemi, HIMK tetap bisa bersilaturahmi dengan memfasilitasi media via Zoom meeting.
            </p>

            <p>
                Selanjutnya, pada tanggal 25 September 2021, dilaksanakan kegiatan malam puncak di Gedung Serba Guna Kundur Barat, dengan berbagai penampilan khusus serta pengumuman dan pembagian hadiah bagi para pemenang lomba.
            </p>

            <p>
                Kegiatan ini menargetkan 115 peserta, yang dihadiri oleh Bapak Camat Kundur Barat, Bapak Kepala Desa Sei. Sebesi, demisioner-demisioner, seluruh anggota Himpunan Mahasiswa Kundur, dan para peserta lomba yang didampingi oleh guru sekolah se-Pulau Kundur.
            </p>

            <p>
                "Pada HUT Himpunan Mahasiswa Kundur Tanjungpinang-Bintan tahun ini, kami mengangkat tema 'Bersimpuh Petuah Bergaung Marwah' yang berarti duduk bersimpuh (duduk yang beretika menurut adat Melayu) dan mendengarkan nasihat dari pendahulu sebagai bentuk inspirasi dan pedoman hidup untuk melangkah ke depan, serta merupakan sesuatu yang menjadi pegangan guna menjaga kehormatan dan martabat organisasi," ujar Rina, Selaku Ketua Panitia.
            </p>

            <p>
                "Pandemi tidak menjadi tantangan bagi kami dalam menjalankan kegiatan dan peringatan organisasi kedaerahan ini. Tujuan organisasi kedaerahan ini bukan hanya sekedar kegiatan-kegiatan, melainkan upaya pembenahan daerah khususnya di Kundur ini," ucap Kakanda Izam Jumreni, Selaku Ketua Umum Himpunan Mahasiswa Kundur Tanjungpinang-Bintan pada kata sambutannya.
            </p>

            <p>
                Acara puncak HUT HIMK ke-9 ditutup dengan pemotongan tumpeng bersama Bapak Camat Kundur Barat, Bapak Kepala Desa Sei. Sebesi, demisioner, dan Ketua Umum Himpunan Mahasiswa Kundur Tanjungpinang-Bintan.
            </p>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <h2>Himpunan Mahasiswa Kundur Tanjungpinang-Bintan</h2>
                <p><?php echo $footer_address; ?></p>
            </div>
            <div class="footer-right">
                <p>Temukan kami di</p>
                <div class="social-media">
                    <a href="<?php echo $instagram_link; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo $youtube_link; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="<?php echo $facebook_link; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <p>Copyright &#169; 2024, HIMK Tanjungpinang-Bintan</p>
    </footer> 
</body>
</html>
