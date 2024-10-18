<?php
session_start();

// Koneksi ke database
$servername = "localhost"; // Ganti dengan server Anda jika perlu
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "himktpibintan"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NIM = $_POST['NIM'];
    $password = $_POST['password'];

    // Query untuk memeriksa username
    $sql = "SELECT * FROM users WHERE NIM = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $NIM);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah ada pengguna dengan username tersebut
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            header("Location: dashboard.php"); // Arahkan ke halaman dashboard
            exit;
        } else {
            $error = "NIM atau password salah!";
        }
    } else {
        $error = "NIM atau password salah!";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style1.css"> <!-- Pastikan Anda memiliki file ini -->
</head>
<body>
    <div class="container">
        <h2>Login Admin</h2>
        <?php if (isset($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" id="NIM" name="NIM" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
