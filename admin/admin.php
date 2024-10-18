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

// Mengambil data dari tabel krisar
$sql = "SELECT * FROM krisar";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kritik dan Saran</title>
    <link rel="stylesheet" href="admin.css" /> <!-- Tambahkan link ke file CSS -->
</head>
<body>
    <header>
        <h2>Data Kritik dan Saran</h2>
    </header>
    
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Tujuan</th>
                    <th>Nama Tujuan</th>
                    <th>Pesan</th>
                    <th>Aksi</th> <!-- Kolom aksi untuk edit dan hapus -->
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['kategori']; ?></td>
                            <td><?php echo $row['Tujuan']; ?></td>
                            <td><?php echo $row['Nama_tujuan']; ?></td>
                            <td><?php echo $row['Pesan']; ?></td>
                            <td>
                                <a href="edit_krisar.php?id=<?php echo $row['id']; ?>">Edit</a> | 
                                <a href="delete_krisar.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
                } ?>
            </tbody>
        </table>

        <a href="krisar.php">Kembali</a>
    </main>
    
    <footer>
        <p>&copy; 2024 HIMK Tanjungpinang-Bintan</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
