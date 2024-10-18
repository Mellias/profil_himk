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

// Mengambil data berdasarkan ID
$id = $_GET['id'];
$sql = "SELECT * FROM krisar WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kategori = $_POST['category'];
    $tujuan = $_POST['target'];
    $nama_tujuan = $_POST['specific_name'];
    $pesan = $_POST['message'];

    // Update data ke dalam tabel krisar
    $sql = "UPDATE krisar SET kategori=?, Tujuan=?, Nama_tujuan=?, Pesan=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $kategori, $tujuan, $nama_tujuan, $pesan, $id);

    if ($stmt->execute()) {
        header("Location: admin.php?status=updated");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kritik dan Saran</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>
    <div class="container">
        <h2>Edit Kritik dan Saran</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="category">Kategori Masukan:</label>
                <select id="category" name="category" required>
                    <option value="Kritik" <?php if($data['kategori'] == 'Kritik') echo 'selected'; ?>>Kritik</option>
                    <option value="Saran" <?php if($data['kategori'] == 'Saran') echo 'selected'; ?>>Saran</option>
                    <option value="Curhatan" <?php if($data['kategori'] == 'Curhatan') echo 'selected'; ?>>Curhatan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="target">Tujuan:</label>
                <select id="target" name="target" required>
                    <option value="Himpunan Mahasiswa Kundur" <?php if($data['Tujuan'] == 'Himpunan Mahasiswa Kundur') echo 'selected'; ?>>Himpunan Mahasiswa Kundur</option>
                    <option value="Perorangan" <?php if($data['Tujuan'] == 'Perorangan') echo 'selected'; ?>>Perorangan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="specific_name">Nama Tujuan Spesifik:</label>
                <input type="text" id="specific_name" name="specific_name" value="<?php echo $data['Nama_tujuan']; ?>" required>
            </div>

            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required><?php echo $data['Pesan']; ?></textarea>
            </div>

            <button type="submit">Update</button>
        </form>
        
        <a href="admin.php" class="back-link">Kembali</a>
    </div>
</body>
</html>
