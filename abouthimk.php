<?php
$pageTitle = "Tentang HIMK";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" href="images/Logo-HIMK.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <style>
       *, 
*::before,
*::after {
    box-sizing: border-box;
}

body {
    font-family: 'Quicksand', sans-serif;
    margin: 0;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

header {
    width: 100%;
    /* font-weight: bold; */
    background-color: #f8f9fa;
    border-bottom: 1px solid #fc6005;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0.5rem;
}

.logo {
    display: flex;
    align-items: center;
    margin-left: 20px;
}

.logo img {
    max-width: 80px;
    height: auto;
}

.nav-list {
    flex-grow: 1;
    text-align: center;
}

.nav-list ul {
    display: inline-flex;
    gap: 1rem;
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-list li a {
    padding: 0.25rem 0.5rem;
    border-radius: 15px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    color: #fc6005;
    transition: background-color 0.3s, color 0.3s;
}

.nav-list li:hover a {
    background-color: #fc6005;
    color: #fff;
}

.social-media {
    display: flex;
    gap: 8px;
}

.social-media a {
    color: #fc6005;
    font-size: 20px;
    text-decoration: none;
    transition: color 0.3s;
}

.social-media a:hover {
    color: #333;
}

main {
    flex: 1;
    width: 100%;
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 2rem;
}

.intro-container {
    display: flex;
    align-items: center;
    text-align: justify;
    gap: 2rem;
    margin-bottom: 2rem;
}

.main-image {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0;
}

.intro-text {
    font-size: 1.2rem;
    line-height: 1.6rem;
    margin: 0;
    flex: 1;
}

.vision-mission-container {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.vision-mission {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 2rem;
    background-color: #f9f9f9;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    text-align: left;
}

.vision-mission .vision-box,
.vision-mission .mission-box {
    flex: 1 1 45%;
    padding: 1rem;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
}

.vision-mission h2 {
    color: #fc6005;
}

.vision-mission ul {
    padding-left: 1rem;
    list-style-type: disc;
    text-align: left;
}

.chairman-vision-mission {
    display: flex;
    flex-direction: row;
    gap: 2rem;
    align-items: center; 
    justify-content: center;
    text-align: center; /* Center text within the div */
}

.chairman-image {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.chairman-image img {
    max-width: 200px;
    border-radius: 10px;
    margin-bottom: 0.5rem;
}

.chairman-image p {
    margin: 0;
}

.chairman-vision-mission .vision-mission {
    flex: 2;
}

footer {
    padding: 20px;
    background-color: #f8f9fa;
    color: #fc6005;
    text-align: center;
    font-weight: bold;
    border-top: 1px solid #fc6005;
}

footer .footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    padding: 0 1rem;
}

.footer-left, .footer-right {
    color: #fc6005;
    text-align: center;
}

.footer-left {
    text-align: left;
}

.footer-left h2 {
    margin: 0.5rem 0;
    color: #fc6005;
    text-align: center;
}

.footer-right {
    text-align: right;
}

footer p {
    margin: 0.5rem 0;
    text-align: center;
}

footer .social-media {
    display: flex;
    justify-content: center;
    gap: 20px;
}

footer .social-media a {
    color: #fc6005;
    font-size: 24px;
    text-decoration: none;
    transition: color 0.3s;
}

footer .social-media a:hover {
    color: #333;
}

@media screen and (max-width: 768px) {
    .navbar-container {
        flex-direction: column;
        align-items: center;
    }

    .logo {
        margin-left: 0;
        margin-bottom: 1rem;
    }

    .nav-list ul {
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }

    .nav-list li a {
        padding: 0.5rem 1rem;
    }

    header .social-media {
        justify-content: center;
        margin-top: 1rem;
    }

    header .social-media a {
        font-size: 18px;
    }

    .footer-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-left, .footer-right {
        margin-bottom: 1rem;
    }

    .intro-container, .vision-mission {
        flex-direction: column;
    }

    .chairman-vision-mission {
        flex-direction: column;
        align-items: center;
    }

    .chairman-vision-mission img {
        max-width: 100%;
    }

    .chairman-image img {
        max-width: 100%;
    }
}
    </style>
</head>

<body>
    <header class="navbar-container">
        <div class="logo">
            <a href="index.php">
                <img src="images/Logo-HIMK.png" alt="Himpunan Mahasiswa Kundur (HIMK)">
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
        <article>
            <div class="intro-container">
                <p class="intro-text">
                    Himpunan Mahasiswa Kundur (HIMK) merupakan perkumpulan mahasiswa dari Tanjungbatu yang menempuh pendidikan S-1 di Tanjungpinang-Bintan.
                    HIMK didirikan pada 23 September 2012 oleh Kakanda Aditya Nugroho Jati. Saat ini, HIMK telah berusia 11 tahun.
                </p>
                <img src="images/HUT-HIMK-ke-11.png" alt="Himpunan Mahasiswa Kundur" class="main-image">
            </div>

            <h1>Visi dan Misi HIMK Tanjungpinang-Bintan</h1>
            <div class="vision-mission-container">
                <div class="vision-mission">
                    <div class="vision-box">
                        <h2>Visi:</h2>
                        <p>Menjadi organisasi mahasiswa yang kritis dalam memperjuangkan kemajuan dan kesejahteraan Pulau Kundur berlandaskan iman dan taqwa.</p>
                    </div>
                    <div class="mission-box">
                        <h2>Misi:</h2>
                        <ul>
                            <li>Membentuk mahasiswa berkarakter dan beriman.</li>
                            <li>Mencerdaskan kader melalui pengkaderan.</li>
                            <li>Membangun solidaritas mahasiswa Kundur.</li>
                            <li>Mendorong regenerasi pergerakan organisasi.</li>
                            <li>Menjalin kerja sama dengan berbagai pihak.</li>
                            <li>Melestarikan seni dan budaya lokal.</li>
                        </ul>
                    </div>
                </div>

                <h1>Visi dan Misi Ketua HIMK 2023-2024</h1>
                <div class="chairman-vision-mission">
                    <div class="chairman-image">
                        <img src="images/Ketua-HIMK.png" alt="Ketua HIMK">
                        <p><strong>Muhammad Wibhi Kurnia</strong></p>
                        <p>Ketua Umum Periode 2023-2024</p>
                    </div>
                    <div class="vision-mission">
                        <div class="vision-box">
                            <h2>Visi:</h2>
                            <p>Mewujudkan HIMK sebagai tempat belajar yang mendukung pengembangan intelektual dan potensi setiap individu.</p>
                        </div>
                        <div class="mission-box">
                            <h2>Misi:</h2>
                            <ul>
                                <li>Memperkuat hubungan antar anggota.</li>
                                <li>Mengembangkan potensi individu.</li>
                                <li>Membangun kerja sama internal dan eksternal.</li>
                                <li>Mendorong kreativitas dan inovasi.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <h2>Himpunan Mahasiswa Kundur</h2>
                <p>Sekretariat: Jalan Garuda Perum Kenangan Jaya 6 Blok G+ No A5, Tanjungpinang, 29122</p>
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
        <p>&#169; <?php echo date('Y'); ?> HIMK Tanjungpinang-Bintan</p>
    </footer>
</body>

</html>

