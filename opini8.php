<?php
$title = "Harga Minyak Goreng Naik di Tengah Krisis Ekonomi";
$author = "Khairul Nizam";
$image = "images/opini8.png";
$logo = "images/Logo-HIMK.png";
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
            <img src="<?php echo $image; ?>" alt="<?php echo $author; ?>" class="featured-image">
            <p>
                Peraturan Menteri Perdagangan (Permendag) Nomor 11 Tahun 2022 menetapkan Harga Eceran Tertinggi (HET) minyak goreng curah di tingkat masyarakat/konsumen akhir sebesar Rp14.000 per liter atau Rp15.500 per kilogram. Berbagai perbincangan di media pun ikut menghiasi drama kenaikan harga minyak goreng. Harga minyak goreng kemasan di Kabupaten Karimun, Kepulauan Riau (Kepri), membuat resah masyarakat menjelang bulan suci Ramadhan (Dikutip dari media Batamnews, 22 Maret 2022).
            </p>
            <p>
                Sudah hampir 5 bulan lebih fenomena kenaikan harga minyak goreng menjadi polemik di masyarakat, mulai dari rumah tangga hingga pelaku usaha kecil mikro. Direktur Jenderal Perdagangan Dalam Negeri Kementerian Perdagangan, Oke Nurwan, mengatakan bahwa kenaikan harga minyak goreng lebih disebabkan oleh harga internasional yang naik tajam. Selain itu, penurunan panen sawit pada semester kedua menyebabkan suplai CPO menjadi terbatas dan mengganggu rantai distribusi industri minyak goreng. Faktor lain yang menyebabkan naiknya harga minyak goreng adalah meningkatnya permintaan CPO untuk industri biodiesel seiring penerapan kebijakan B30, serta gangguan logistik selama pandemi Covid-19, seperti berkurangnya jumlah kontainer dan kapal.
            </p>
            <p>
                Masyarakat Kabupaten Karimun, khususnya di Pulau Kundur, tidak memiliki banyak pilihan selain membeli minyak goreng dengan harga yang mahal untuk kebutuhan sehari-hari dan usaha kecil mikro. Pandemi belum usai dan bulan suci Ramadhan segera tiba, namun harga minyak goreng terus menghantui. Kondisi ini menunjukkan bahwa harga minyak goreng bukan lagi sekadar naik, melainkan sudah berubah menjadi harga baru yang meroket.
            </p>
            <p>
                Dampak kenaikan harga minyak goreng sangat dirasakan oleh pelaku usaha kecil mikro di Kundur. Misalnya, penjual gorengan di tepi jalan harus menaikkan harga jual bukan untuk mencari keuntungan lebih, melainkan untuk menyesuaikan dengan modal yang mereka keluarkan. Sangat disayangkan, Pemerintah Kabupaten Karimun tampak bungkam dan belum menentukan langkah yang akan diambil untuk masyarakat.
            </p>
            <p>
                Menjelang bulan suci Ramadhan, masyarakat Pulau Kundur, khususnya ibu rumah tangga yang biasanya membantu meningkatkan perekonomian keluarga dengan berjualan kue dan jajanan, menghadapi tantangan besar. Ketika minyak goreng sebagai bahan utama produksi belum bisa diatasi, apa yang bisa dilakukan masyarakat?
            </p>
            <p>
                Masyarakat Kabupaten Karimun sebagai konsumen berharap pemerintah campur tangan dalam polemik harga minyak goreng ini. Harga minyak goreng di tingkat konsumen akhir perlu lebih terjangkau, namun juga tidak boleh menghambat pertumbuhan sektor usaha pertanian perkebunan sawit serta sektor usaha industri pengolahan kelapa sawit di Kabupaten Karimun.
            </p>
            <p>
                <strong>Penulis: <?php echo $author; ?></strong>
            </p>
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
