<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "himktpibintan"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses pengiriman data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kategori = $_POST['category'];
    $tujuan = $_POST['target'];
    $nama_tujuan = $_POST['specific_name'];
    $pesan = $_POST['message'];

    // Menyimpan data ke dalam tabel krisar
    $sql = "INSERT INTO krisar (kategori, Tujuan, Nama_tujuan, Pesan) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $kategori, $tujuan, $nama_tujuan, $pesan);

    if ($stmt->execute()) {
        // Redirect ke halaman admin.php dengan pesan berhasil
        header("Location: admin/admin.php?status=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>



$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran</title>
    <link rel="icon" href="images/Logo-HIMK.png" type="image/png">
    <link rel="stylesheet" href="css/krisar.css" />
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
        <section id="feedback">
            <h2>Kritik dan Saran</h2>
            <form action="" method="post">
                <label for="category">Kategori Masukan:</label>
                <select id="category" name="category" required>
                    <option value="" disabled selected>Pilih kategori masukan</option>
                    <option value="Kritik">Kritik</option>
                    <option value="Saran">Saran</option>
                    <option value="Curhatan">Curhatan</option>
                </select>
    
                <label for="target">Tujuan:</label>
                <select id="target" name="target" required>
                    <option value="" disabled selected>Ditujukan kepada</option>
                    <option value="Himpunan Mahasiswa Kundur">Himpunan Mahasiswa Kundur</option>
                    <option value="Perorangan">Perorangan</option>
                </select>
        
                <label for="specific_name">Nama Tujuan Spesifik (boleh kosong):</label>
                <input type="text" id="specific_name" name="specific_name" placeholder="Masukkan nama tujuan spesifik (boleh kosong)">
        
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" placeholder="Tuliskan pesan yang ingin disampaikan..." required></textarea>
        
                <button type="submit">Kirim</button>
            </form>
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
