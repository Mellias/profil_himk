<?php
include 'db_connect.php'; // Sertakan koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST['category'];
    $target = $_POST['target'];
    $specific_name = $_POST['specific_name'];
    $message = $_POST['message'];

    // Siapkan dan jalankan query untuk menyimpan feedback ke database
    $stmt = $conn->prepare("INSERT INTO feedback (category, target, specific_name, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $category, $target, $specific_name, $message);

    if ($stmt->execute()) {
        echo "Feedback berhasil dikirim!";
    } else {
        echo "Ada kesalahan: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
